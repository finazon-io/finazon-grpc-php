<?php
namespace Finazon\Grpc\Service;

use Finazon\Grpc\FinazonClient;
use Finazon\Grpc\Exception\RequestException;
use Finazon\Grpc\Api\BenzingaServiceClient;

use Finazon\Grpc\Api\GetDividentsCalendarResponse;
use Finazon\Grpc\Api\GetDividentsCalendarRequest;

use Finazon\Grpc\Api\GetEarningsCalendarResponse;
use Finazon\Grpc\Api\GetEarningsCalendarRequest;

use Finazon\Grpc\Api\GetNewsResponse;
use Finazon\Grpc\Api\GetNewsRequest;

use Finazon\Grpc\Api\GetIPOResponse;
use Finazon\Grpc\Api\GetIPORequest;


class BenzingaService
{
	
	protected FinazonClient $client;
	
	public function __construct(string $apiToken, ?string $apiUrl = null)
	{
		$this->client = new FinazonClient($apiToken, $apiUrl);
	}
	
	
	/**
	 * @throws RequestException
	 */
    public function getDividentsCalendar(GetDividentsCalendarRequest $request) : GetDividentsCalendarResponse
    {
    	return $this->client->makeRequest(BenzingaServiceClient::class, 'GetDividentsCalendar', $request);
    }
    
	/**
	 * @throws RequestException
	 */
    public function getEarningsCalendar(GetEarningsCalendarRequest $request) : GetEarningsCalendarResponse
    {
    	return $this->client->makeRequest(BenzingaServiceClient::class, 'GetEarningsCalendar', $request);
    }
    
	/**
	 * @throws RequestException
	 */
    public function getNews(GetNewsRequest $request) : GetNewsResponse
    {
    	return $this->client->makeRequest(BenzingaServiceClient::class, 'GetNews', $request);
    }
    
	/**
	 * @throws RequestException
	 */
    public function getIPO(GetIPORequest $request) : GetIPOResponse
    {
    	return $this->client->makeRequest(BenzingaServiceClient::class, 'GetIPO', $request);
    }
    
}