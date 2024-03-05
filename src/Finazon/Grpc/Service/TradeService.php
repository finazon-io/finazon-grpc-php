<?php
namespace Finazon\Grpc\Service;

use Finazon\Grpc\FinazonClient;
use Finazon\Grpc\Exception\RequestException;
use Finazon\Grpc\Api\TradeServiceClient;

use Finazon\Grpc\Api\GetTradesResponse;
use Finazon\Grpc\Api\GetTradesRequest;


class TradeService
{
	
	protected FinazonClient $client;
	
	public function __construct(string $apiToken, ?string $apiUrl = null)
	{
		$this->client = new FinazonClient($apiToken, $apiUrl);
	}
	
	
	/**
	 * @throws RequestException
	 */
    public function getTrades(GetTradesRequest $request) : GetTradesResponse
    {
    	return $this->client->makeRequest(TradeServiceClient::class, 'GetTrades', $request);
    }
    
}