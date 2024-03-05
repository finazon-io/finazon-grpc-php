<?php
namespace Finazon\Grpc\Service;

use Finazon\Grpc\FinazonClient;
use Finazon\Grpc\Exception\RequestException;
use Finazon\Grpc\Api\DatasetsServiceClient;

use Finazon\Grpc\Api\GetDatasetsResponse;
use Finazon\Grpc\Api\GetDatasetsRequest;


class DatasetsService
{
	
	protected FinazonClient $client;
	
	public function __construct(string $apiToken, ?string $apiUrl = null)
	{
		$this->client = new FinazonClient($apiToken, $apiUrl);
	}
	
	
	/**
	 * @throws RequestException
	 */
    public function getDatasets(GetDatasetsRequest $request) : GetDatasetsResponse
    {
    	return $this->client->makeRequest(DatasetsServiceClient::class, 'GetDatasets', $request);
    }
    
}