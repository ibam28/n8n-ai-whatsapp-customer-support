<?php

declare(strict_types=1);

class Response
{
    public static function json(array $data, int $status = 200): never
    {
        http_response_code($status);

        header('Content-Type: application/json; charset=utf-8');

        echo json_encode(
            $data,
            JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE
        );

        exit;
    }
}