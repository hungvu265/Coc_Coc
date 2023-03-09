<?php

namespace App\Utils;

class ResponseUtil
{
    public static function makeResponse(string $message, $data): array
    {
        return [
            'status_code' => 'success',
            'data' => $data,
            'message' => $message,
        ];
    }

    public static function makeError(string $message, array $data = []): array
    {
        $res = [
            'status_code' => 'error',
            'message' => $message,
        ];

        if (! empty($data)) {
            $res['data'] = $data;
        }

        return $res;
    }
}
