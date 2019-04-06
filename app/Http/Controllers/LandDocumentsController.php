<?php
/**
 * Created by PhpStorm.
 * User: Dan White
 * Date: 4/4/2019
 * Time: 3:03 PM
 */

namespace App\Http\Controllers;


use App\Models\LandDocument;
use App\traits\ApiResponser;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class LandDocumentsController extends Controller
{
    use ApiResponser;

    public function show($farmer_info_id, $document_id): JsonResponse
    {

    }

    public function update(Request $request, $land_id, $document_id)
    {

    }

    public function destroy($document_id)
    {

    }
}
