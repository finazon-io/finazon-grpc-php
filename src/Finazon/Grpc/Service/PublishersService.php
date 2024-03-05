<?php
namespace Finazon\Grpc\Service;

use Finazon\Grpc\FinazonClient;
use Finazon\Grpc\Exception\RequestException;
use Finazon\Grpc\Api\PublisherServiceClient;

use Finazon\Grpc\Api\GetPublishersResponse;
use Finazon\Grpc\Api\GetPublishersRequest;


class PublishersService
{
	
	protected FinazonClient $client;
	
	public function __construct(string $apiToken, ?string $apiUrl = null)
	{
		$this->client = new FinazonClient($apiToken, $apiUrl);
	}
	
	
	/**
	 * @throws RequestException
	 */
    public function getPublishers(GetPublishersRequest $request) : GetPublishersResponse
    {
    	return $this->client->makeRequest(PublisherServiceClient::class, 'GetPublishers', $request);
    }
    
}