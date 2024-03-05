<?php
namespace Finazon\Grpc\Service;

use Finazon\Grpc\FinazonClient;
use Finazon\Grpc\Exception\RequestException;
use Finazon\Grpc\Api\ForexServiceClient;

use Finazon\Grpc\Api\GetForexTimeSeriesResponse;
use Finazon\Grpc\Api\GetForexTimeSeriesRequest;


class ForexService
{
	
	protected FinazonClient $client;
	
	public function __construct(string $apiToken, ?string $apiUrl = null)
	{
		$this->client = new FinazonClient($apiToken, $apiUrl);
	}
	
	
	/**
	 * @throws RequestException
	 */
    public function getTimeSeries(GetForexTimeSeriesRequest $request) : GetForexTimeSeriesResponse
    {
    	return $this->client->makeRequest(ForexServiceClient::class, 'GetTimeSeries', $request);
    }
    
}