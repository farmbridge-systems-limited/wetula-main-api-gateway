<?php
/**
 * Created by PhpStorm.
 * User: Dan White
 * Date: 4/4/2019
 * Time: 3:03 PM
 */

namespace App\Http\Controllers;


use App\Models\Land;
use App\traits\ApiResponser;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class LandController extends Controller
{
    use ApiResponser;

    public function show($farmer_info_id, $land_id): JsonResponse
    {

    }

    public function update(Request $request, $farmer_info_id, $land_id)
    {

    }

    public function destroy($land_id)
    {

    }
}
