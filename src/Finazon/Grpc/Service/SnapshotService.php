<?php
namespace Finazon\Grpc\Service;

use Finazon\Grpc\FinazonClient;
use Finazon\Grpc\Exception\RequestException;
use Finazon\Grpc\Api\SnapshotServiceClient;

use Finazon\Grpc\Api\GetSnapshotResponse;
use Finazon\Grpc\Api\GetSnapshotRequest;


class SnapshotService
{
	
	protected FinazonClient $client;
	
	public function __construct(string $apiToken, ?string $apiUrl = null)
	{
		$this->client = new FinazonClient($apiToken, $apiUrl);
	}
	
	
	/**
	 * @throws RequestException
	 */
    public function getSnapshot(GetSnapshotRequest $request) : GetSnapshotResponse
    {
    	return $this->client->makeRequest(SnapshotServiceClient::class, 'GetSnapshot', $request);
    }
    
}