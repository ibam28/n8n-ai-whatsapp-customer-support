<?php

declare(strict_types=1);

require_once __DIR__ . '/../services/MessageService.php';
require_once __DIR__ . '/../responses/Response.php';

class MessageController
{
    public function index(): void
    {
        $service = new MessageService();

        Response::json(
            $service->findAll()
        );
    }
}