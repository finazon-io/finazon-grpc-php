<?php
namespace Finazon\Grpc\Service;

use Finazon\Grpc\FinazonClient;
use Finazon\Grpc\Exception\RequestException;
use Finazon\Grpc\Api\SecServiceClient;

use Finazon\Grpc\Api\GetSecFillingsResponse;
use Finazon\Grpc\Api\GetSecFillingsRequest;


class SecService
{
	
	protected FinazonClient $client;
	
	public function __construct(string $apiToken, ?string $apiUrl = null)
	{
		$this->client = new FinazonClient($apiToken, $apiUrl);
	}
	
	
	/**
	 * @throws RequestException
	 */
    public function getFilings(GetSecFillingsRequest $request) : GetSecFillingsResponse
    {
    	return $this->client->makeRequest(SecServiceClient::class, 'GetFilings', $request);
    }
    
}