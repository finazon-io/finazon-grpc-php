<?php
namespace Finazon\Grpc\Service;

use Finazon\Grpc\FinazonClient;
use Finazon\Grpc\Exception\RequestException;
use Finazon\Grpc\Api\TimeSeriesServiceClient;

use Finazon\Grpc\Api\GetTimeSeriesResponse;
use Finazon\Grpc\Api\GetTimeSeriesRequest;

use Finazon\Grpc\Api\GetTimeSeriesAtrResponse;
use Finazon\Grpc\Api\GetTimeSeriesAtrRequest;

use Finazon\Grpc\Api\GetTimeSeriesBBandsResponse;
use Finazon\Grpc\Api\GetTimeSeriesBBandsRequest;

use Finazon\Grpc\Api\GetTimeSeriesIchimokuResponse;
use Finazon\Grpc\Api\GetTimeSeriesIchimokuRequest;

use Finazon\Grpc\Api\GetTimeSeriesMaResponse;
use Finazon\Grpc\Api\GetTimeSeriesMaRequest;

use Finazon\Grpc\Api\GetTimeSeriesMacdResponse;
use Finazon\Grpc\Api\GetTimeSeriesMacdRequest;

use Finazon\Grpc\Api\GetTimeSeriesObvResponse;
use Finazon\Grpc\Api\GetTimeSeriesObvRequest;

use Finazon\Grpc\Api\GetTimeSeriesRsiResponse;
use Finazon\Grpc\Api\GetTimeSeriesRsiRequest;

use Finazon\Grpc\Api\GetTimeSeriesSarResponse;
use Finazon\Grpc\Api\GetTimeSeriesSarRequest;

use Finazon\Grpc\Api\GetTimeSeriesStochResponse;
use Finazon\Grpc\Api\GetTimeSeriesStochRequest;


class TimeSeriesService
{
	
	protected FinazonClient $client;
	
	public function __construct(string $apiToken, ?string $apiUrl = null)
	{
		$this->client = new FinazonClient($apiToken, $apiUrl);
	}
	
	
	/**
	 * @throws RequestException
	 */
    public function getTimeSeries(GetTimeSeriesRequest $request) : GetTimeSeriesResponse
    {
    	return $this->client->makeRequest(TimeSeriesServiceClient::class, 'GetTimeSeries', $request);
    }
    
	/**
	 * @throws RequestException
	 */
    public function getTimeSeriesAtr(GetTimeSeriesAtrRequest $request) : GetTimeSeriesAtrResponse
    {
    	return $this->client->makeRequest(TimeSeriesServiceClient::class, 'GetTimeSeriesAtr', $request);
    }
    
	/**
	 * @throws RequestException
	 */
    public function getTimeSeriesBBands(GetTimeSeriesBBandsRequest $request) : GetTimeSeriesBBandsResponse
    {
    	return $this->client->makeRequest(TimeSeriesServiceClient::class, 'GetTimeSeriesBBands', $request);
    }
    
	/**
	 * @throws RequestException
	 */
    public function getTimeSeriesIchimoku(GetTimeSeriesIchimokuRequest $request) : GetTimeSeriesIchimokuResponse
    {
    	return $this->client->makeRequest(TimeSeriesServiceClient::class, 'GetTimeSeriesIchimoku', $request);
    }
    
	/**
	 * @throws RequestException
	 */
    public function getTimeSeriesMa(GetTimeSeriesMaRequest $request) : GetTimeSeriesMaResponse
    {
    	return $this->client->makeRequest(TimeSeriesServiceClient::class, 'GetTimeSeriesMa', $request);
    }
    
	/**
	 * @throws RequestException
	 */
    public function getTimeSeriesMacd(GetTimeSeriesMacdRequest $request) : GetTimeSeriesMacdResponse
    {
    	return $this->client->makeRequest(TimeSeriesServiceClient::class, 'GetTimeSeriesMacd', $request);
    }
    
	/**
	 * @throws RequestException
	 */
    public function getTimeSeriesObv(GetTimeSeriesObvRequest $request) : GetTimeSeriesObvResponse
    {
    	return $this->client->makeRequest(TimeSeriesServiceClient::class, 'GetTimeSeriesObv', $request);
    }
    
	/**
	 * @throws RequestException
	 */
    public function getTimeSeriesRsi(GetTimeSeriesRsiRequest $request) : GetTimeSeriesRsiResponse
    {
    	return $this->client->makeRequest(TimeSeriesServiceClient::class, 'GetTimeSeriesRsi', $request);
    }
    
	/**
	 * @throws RequestException
	 */
    public function getTimeSeriesSar(GetTimeSeriesSarRequest $request) : GetTimeSeriesSarResponse
    {
    	return $this->client->makeRequest(TimeSeriesServiceClient::class, 'GetTimeSeriesSar', $request);
    }
    
	/**
	 * @throws RequestException
	 */
    public function getTimeSeriesStoch(GetTimeSeriesStochRequest $request) : GetTimeSeriesStochResponse
    {
    	return $this->client->makeRequest(TimeSeriesServiceClient::class, 'GetTimeSeriesStoch', $request);
    }
    
}