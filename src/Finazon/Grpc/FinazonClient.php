<?php


namespace Finazon\Grpc;

use Google\Protobuf\Internal\Message;
use Google\Rpc\Code as RpcCode;
use Grpc\BaseStub;
use Grpc\ChannelCredentials;
use Finazon\Grpc\Exception as FinazonGrpcExceptions;

class FinazonClient
{
    const GRPC_URL_TEMPLATE = 'grpc-v%s.finazon.io';

    protected string $apiToken;
    protected ?string $apiUrl;
    protected ?ChannelCredentials $credentials;
    
    protected static array $exceptionMap = [
        RpcCode::UNAUTHENTICATED => FinazonGrpcExceptions\UnauthorizedException::class,
        RpcCode::PERMISSION_DENIED => FinazonGrpcExceptions\PermissionDeniedException::class,
    ];

    public function __construct(string $apiToken, ?string $apiUrl = null, ?ChannelCredentials $credentials = null)
    {
        $this->apiToken = $apiToken;
        if (empty($apiUrl)) {
            $apiUrl = $this->getGrpcUrl();
        }
        $this->apiUrl = $apiUrl;
        if ($credentials === null) {
            $credentials = ChannelCredentials::createSsl();
        }
        $this->credentials = $credentials;
    }

    /**
     * @param string $stubClass
     * @param string $method
     * @param Message $request
     * @throws FinazonGrpcExceptions\BaseException
     * @return void
     */
    public function makeRequest(string $stubClass, string $method, Message $request) : Message
    {
        /** @var BaseStub $stub */
        $stub = new $stubClass(
            $this->apiUrl, 
            ['credentials' => $this->credentials],
        );
        $metadata = ['Authorization' => ['Bearer ' . $this->apiToken]];
        [$response, $status] = $stub->$method($request, $metadata)->wait();
        $statusCode = $status->code ?? 0;
        if ($statusCode !== RpcCode::OK) {
            $exceptionClass = self::$exceptionMap[$statusCode] ?? FinazonGrpcExceptions\RequestException::class;
            throw new $exceptionClass($status->details, $statusCode, $method);
        }
        return $response;
    }

    /**
     * @return string
     * @throws \Exception
     */
    protected function getGrpcUrl(): string
    {
        return sprintf(self::GRPC_URL_TEMPLATE, $this->getGrpcVersion());
    }

    /**
     * @return string
     * @throws \Exception
     */
    protected function getGrpcVersion(): string
    {
        $versionFile = $this->getPackagePath() . DIRECTORY_SEPARATOR . 'VERSION';
        if (!file_exists($versionFile) or !is_readable($versionFile)) {
            throw new \Exception("Version file $versionFile is not exists or not readable");
        }
        $version = file_get_contents($versionFile);
        list($major, $minor, $other) = explode('.', $version, 3);
        return implode('-', [$major, $minor]);
    }

    /**
     * @return string
     */
    protected function getPackagePath(): string
    {
        return realpath(dirname(__FILE__, 4));
    }
}