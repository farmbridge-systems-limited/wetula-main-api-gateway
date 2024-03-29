<?php

namespace App\Http\Controllers;

use App\Http\traits\ApiResponser;
use App\Services\FarmersService;
use Carbon\Carbon;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\{Http\JsonResponse, Http\Request, Http\Response, Support\Facades\DB};

class FarmerInfoController extends Controller
{
    use ApiResponser;

    /**
     * The service to consume the farmers microservice
     * @var FarmersService
     */
    public $farmersService;

    public function __construct(FarmersService $farmersService)
    {
        $this->farmersService = $farmersService;
    }

    /**
     * Return the full list of farmers both verified and unverified
     * @throws GuzzleException
     * @api /farmers
     * @author Danquah Bernard White
     */
    public function index()
    {
        return $this->successResponse($this->farmersService->obtainFarmers());
    }

    /**
     * Creates an instance of @see FarmerInfo
     * @param Request $request
     * @return JsonResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {

    }

    /**
     * Obtain and show the details of one author
     * @param $farmer_info
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($farmer_info): JsonResponse
    {

    }


    /**
     * Updates an existing @see FarmerInfo data only.
     * Update for remaining entities will be in done their specific
     * controllers targeting those entities only.
     * @param Request $request
     * @param $farmer_info_id
     * @return \Illuminate\Http\JsonResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update(Request $request, $farmer_info_id): JsonResponse
    {

    }

    /**
     * Remove an existing @see FarmerInfo
     * @param $farmer_info
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($farmer_info_id): JsonResponse
    {

    }


}
