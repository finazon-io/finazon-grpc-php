<?php
namespace Finazon\Grpc\Service;

use Finazon\Grpc\FinazonClient;
use Finazon\Grpc\Exception\RequestException;
use Finazon\Grpc\Api\TickersServiceClient;

use Finazon\Grpc\Api\FindTickersStocksResponse;
use Finazon\Grpc\Api\FindTickersStocksRequest;

use Finazon\Grpc\Api\FindTickersCryptoResponse;
use Finazon\Grpc\Api\FindTickersCryptoRequest;

use Finazon\Grpc\Api\FindTickersForexResponse;
use Finazon\Grpc\Api\FindTickersForexRequest;

use Finazon\Grpc\Api\FindTickersUSResponse;
use Finazon\Grpc\Api\FindTickersUSRequest;


class TickersService
{
	
	protected FinazonClient $client;
	
	public function __construct(string $apiToken, ?string $apiUrl = null)
	{
		$this->client = new FinazonClient($apiToken, $apiUrl);
	}
	
	
	/**
	 * @throws RequestException
	 */
    public function findTickersStocks(FindTickersStocksRequest $request) : FindTickersStocksResponse
    {
    	return $this->client->makeRequest(TickersServiceClient::class, 'FindTickersStocks', $request);
    }
    
	/**
	 * @throws RequestException
	 */
    public function findTickersCrypto(FindTickersCryptoRequest $request) : FindTickersCryptoResponse
    {
    	return $this->client->makeRequest(TickersServiceClient::class, 'FindTickersCrypto', $request);
    }
    
	/**
	 * @throws RequestException
	 */
    public function findTickersForex(FindTickersForexRequest $request) : FindTickersForexResponse
    {
    	return $this->client->makeRequest(TickersServiceClient::class, 'FindTickersForex', $request);
    }
    
	/**
	 * @throws RequestException
	 */
    public function findTickersUS(FindTickersUSRequest $request) : FindTickersUSResponse
    {
    	return $this->client->makeRequest(TickersServiceClient::class, 'FindTickersUS', $request);
    }
    
}