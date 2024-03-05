<?php
namespace Finazon\Grpc\Service;

use Finazon\Grpc\FinazonClient;
use Finazon\Grpc\Exception\RequestException;
use Finazon\Grpc\Api\ExchangeServiceClient;

use Finazon\Grpc\Api\GetMarketsCryptoResponse;
use Finazon\Grpc\Api\GetMarketsCryptoRequest;

use Finazon\Grpc\Api\GetMarketsStocksResponse;
use Finazon\Grpc\Api\GetMarketsStocksRequest;


class ExchangeService
{
	
	protected FinazonClient $client;
	
	public function __construct(string $apiToken, ?string $apiUrl = null)
	{
		$this->client = new FinazonClient($apiToken, $apiUrl);
	}
	
	
	/**
	 * @throws RequestException
	 */
    public function getMarketsCrypto(GetMarketsCryptoRequest $request) : GetMarketsCryptoResponse
    {
    	return $this->client->makeRequest(ExchangeServiceClient::class, 'GetMarketsCrypto', $request);
    }
    
	/**
	 * @throws RequestException
	 */
    public function getMarketsStocks(GetMarketsStocksRequest $request) : GetMarketsStocksResponse
    {
    	return $this->client->makeRequest(ExchangeServiceClient::class, 'GetMarketsStocks', $request);
    }
    
}