<?php


namespace App\Services;


use App\Http\traits\ConsumesExternalService;

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
}
