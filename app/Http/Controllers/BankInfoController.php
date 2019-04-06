<?php
/**
 * Created by PhpStorm.
 * User: Dan White
 * Date: 4/4/2019
 * Time: 3:03 PM
 */

namespace App\Http\Controllers;


use App\Models\BankInfo;
use App\traits\ApiResponser;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class BankInfoController extends Controller
{
    use ApiResponser;


    /**
     * Returns BankInfo of Farmer
     * @param $farmer_info_id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($farmer_info_id): JsonResponse
    {

    }

    public function update(Request $request, $farmer_info_id)
    {

    }

    public function destroy($bank_info_id)
    {

    }
}
