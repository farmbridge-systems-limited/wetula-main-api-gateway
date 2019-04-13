<?php


namespace App\Http\traits;


use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

trait ApiResponser
{
    /**
     * Builds success response
     * @param string|array $data
     * @param int $code
     * @return Response
     */
    public function successResponse($data, $code = Response::HTTP_OK)
    {
        return response()->json($data, $code)->header('Content-Type', 'application/json');
    }

    /**
     * Builds error responses
     * @param string|array $message
     * @param int $code
     * @return \Illuminate\Http\JsonResponse
     */
    public function errorResponse($message, $code): JsonResponse
    {
        return response()->json(['message' => $message, 'code' => $code], $code);
    }

    /**
     * Builds error responses
     * @param string|array $message
     * @param int $code
     * @return \Illuminate\Http\Response
     */
    public function errorMessage($message, $code)
    {
        return response()->json($message, $code)->header('Content-Type', 'application/json');
    }


}
