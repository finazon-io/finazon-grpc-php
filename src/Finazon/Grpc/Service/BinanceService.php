<?php
namespace Finazon\Grpc\Service;

use Finazon\Grpc\FinazonClient;
use Finazon\Grpc\Exception\RequestException;
use Finazon\Grpc\Api\BinanceServiceClient;

use Finazon\Grpc\Api\GetBinanceTimeSeriesResponse;
use Finazon\Grpc\Api\GetBinanceTimeSeriesRequest;


class BinanceService
{
	
	protected FinazonClient $client;
	
	public function __construct(string $apiToken, ?string $apiUrl = null)
	{
		$this->client = new FinazonClient($apiToken, $apiUrl);
	}
	
	
	/**
	 * @throws RequestException
	 */
    public function getTimeSeries(GetBinanceTimeSeriesRequest $request) : GetBinanceTimeSeriesResponse
    {
    	return $this->client->makeRequest(BinanceServiceClient::class, 'GetTimeSeries', $request);
    }
    
}