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
    public function successResponse($data, $code = Response::HTTP_OK): Response
    {
        return response($data, $code)->header('Content-Type', 'application/json');
    }

    /**
     * Builds direct error responses
     * for example, a request to a route that does not exist
     * @param string|array $message
     * @param int $code
     * @return \Illuminate\Http\JsonResponse
     */
    public function errorResponse($message, $code): JsonResponse
    {
        return response()->json(['message' => $message, 'code' => $code], $code);
    }

    /**
     * Error responses coming from external microservices
     * @param string|array $message
     * @param int $code
     * @return \Illuminate\Http\JsonResponse
     */
    public function errorMessage($message, $code): JsonResponse
    {
        return response($message, $code)->header('Content-Type', 'application/json');
    }
}
