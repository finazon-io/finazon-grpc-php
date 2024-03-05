<?php
namespace Finazon\Grpc\Service;

use Finazon\Grpc\FinazonClient;
use Finazon\Grpc\Exception\RequestException;
use Finazon\Grpc\Api\ApiUsageServiceClient;

use Finazon\Grpc\Api\GetApiUsageResponse;
use Finazon\Grpc\Api\GetApiUsageRequest;


class ApiUsageService
{
	
	protected FinazonClient $client;
	
	public function __construct(string $apiToken, ?string $apiUrl = null)
	{
		$this->client = new FinazonClient($apiToken, $apiUrl);
	}
	
	
	/**
	 * @throws RequestException
	 */
    public function getApiUsage(GetApiUsageRequest $request) : GetApiUsageResponse
    {
    	return $this->client->makeRequest(ApiUsageServiceClient::class, 'GetApiUsage', $request);
    }
    
}