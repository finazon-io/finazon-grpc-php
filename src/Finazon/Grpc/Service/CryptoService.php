<?php
namespace Finazon\Grpc\Service;

use Finazon\Grpc\FinazonClient;
use Finazon\Grpc\Exception\RequestException;
use Finazon\Grpc\Api\CryptoServiceClient;

use Finazon\Grpc\Api\GetCryptoTimeSeriesResponse;
use Finazon\Grpc\Api\GetCryptoTimeSeriesRequest;


class CryptoService
{
	
	protected FinazonClient $client;
	
	public function __construct(string $apiToken, ?string $apiUrl = null)
	{
		$this->client = new FinazonClient($apiToken, $apiUrl);
	}
	
	
	/**
	 * @throws RequestException
	 */
    public function getTimeSeries(GetCryptoTimeSeriesRequest $request) : GetCryptoTimeSeriesResponse
    {
    	return $this->client->makeRequest(CryptoServiceClient::class, 'GetTimeSeries', $request);
    }
    
}