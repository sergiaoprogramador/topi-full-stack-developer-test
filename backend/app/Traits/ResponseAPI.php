<?php

namespace App\Traits;

trait ResponseAPI
{
    public function coreReponse(string $message, array|object $data = null, int $statusCode, bool $isSuccess = true): object
    {
        if(!$message) return response()->json(['message' => 'Mensagem é requerida'], 500);

        if($isSuccess) {
            return response()->json([
                'message' => $message,
                'error' => false,
                'code' => $statusCode,
                'results' => $data
            ], $statusCode);
        } else {
            return response()->json([
                'message' => $message,
                'error' => true,
                'code' => $statusCode
            ], $statusCode);
        }
    }

    public function success(string $message, array|object $data, int $statusCode = 200): object
    {
        return $this->coreReponse($message, $data, $statusCode);
    }

    public function error(string $message, int $statusCode = 500): object
    {
        return $this->coreReponse($message, null, $statusCode, false);
    }
}
