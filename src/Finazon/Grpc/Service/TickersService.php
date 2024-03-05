<?php
namespace Finazon\Grpc\Service;

use Finazon\Grpc\FinazonClient;
use Finazon\Grpc\Exception\RequestException;
use Finazon\Grpc\Api\TickersServiceClient;

use Finazon\Grpc\Api\FindTickerStocksResponse;
use Finazon\Grpc\Api\FindTickersStocksRequest;

use Finazon\Grpc\Api\FindTickerCryptoResponse;
use Finazon\Grpc\Api\FindTickersCryptoRequest;

use Finazon\Grpc\Api\FindTickerForexResponse;
use Finazon\Grpc\Api\FindTickersForexRequest;

use Finazon\Grpc\Api\FindTickerUSResponse;
use Finazon\Grpc\Api\FindTickerUSRequest;


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
    public function findTickersStocks(FindTickersStocksRequest $request) : FindTickerStocksResponse
    {
    	return $this->client->makeRequest(TickersServiceClient::class, 'FindTickersStocks', $request);
    }
    
	/**
	 * @throws RequestException
	 */
    public function findTickersCrypto(FindTickersCryptoRequest $request) : FindTickerCryptoResponse
    {
    	return $this->client->makeRequest(TickersServiceClient::class, 'FindTickersCrypto', $request);
    }
    
	/**
	 * @throws RequestException
	 */
    public function findTickersForex(FindTickersForexRequest $request) : FindTickerForexResponse
    {
    	return $this->client->makeRequest(TickersServiceClient::class, 'FindTickersForex', $request);
    }
    
	/**
	 * @throws RequestException
	 */
    public function findTickerUS(FindTickerUSRequest $request) : FindTickerUSResponse
    {
    	return $this->client->makeRequest(TickersServiceClient::class, 'FindTickerUS', $request);
    }
    
}