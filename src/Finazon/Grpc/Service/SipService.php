<?php
namespace Finazon\Grpc\Service;

use Finazon\Grpc\FinazonClient;
use Finazon\Grpc\Exception\RequestException;
use Finazon\Grpc\Api\SipServiceClient;

use Finazon\Grpc\Api\GetSipTradesResponse;
use Finazon\Grpc\Api\GetSipTradesRequest;

use Finazon\Grpc\Api\GetSipMarketCenterResponse;
use Finazon\Grpc\Api\GetSipMarketCenterRequest;


class SipService
{
	
	protected FinazonClient $client;
	
	public function __construct(string $apiToken, ?string $apiUrl = null)
	{
		$this->client = new FinazonClient($apiToken, $apiUrl);
	}
	
	
	/**
	 * @throws RequestException
	 */
    public function getTrades(GetSipTradesRequest $request) : GetSipTradesResponse
    {
    	return $this->client->makeRequest(SipServiceClient::class, 'GetTrades', $request);
    }
    
	/**
	 * @throws RequestException
	 */
    public function getMarketCenter(GetSipMarketCenterRequest $request) : GetSipMarketCenterResponse
    {
    	return $this->client->makeRequest(SipServiceClient::class, 'GetMarketCenter', $request);
    }
    
}