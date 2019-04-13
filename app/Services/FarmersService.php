<?php


namespace App\Services;


use App\Http\traits\ConsumesExternalService;
use GuzzleHttp\Exception\GuzzleException;

class FarmersService
{
    use ConsumesExternalService;

    /**
     * The base url to consume the farmers service
     * @var string
     */
    public $baseUri;

    public function __construct()
    {
        $this->baseUri = config('services.farmers.base_uri');
    }

    /**
     * Obtain the full list of farmers
     * @return string
     * @throws GuzzleException
     */
    public function obtainFarmers(): string
    {
        return  $this->performRequest('GET', '/farmers');
    }
}
