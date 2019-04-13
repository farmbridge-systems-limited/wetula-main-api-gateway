<?php


namespace App\Http\traits;


use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

trait ConsumesExternalService
{
    /**
     * Send a request to any external micro-service
     * @param $method
     * @param $requestUri
     * @param array $formParams
     * @param array $headers
     * @return string Response obtain from that service
     * @throws GuzzleException
     */
    public function performRequest($method, $requestUri, $formParams = [], $headers = []){
        $client = new Client([
            'base_uri' => $this->baseUri
        ]);

        $response = $client->request($method, $requestUri, [
            'form_params' => $formParams,
            'headers' => $headers
        ]);

        return $response->getBody()->getContents();
    }
}
