<?php

declare(strict_types=1);

require_once __DIR__ . '/../services/ConversationService.php';
require_once __DIR__ . '/../responses/Response.php';

class ConversationController
{
    public function index(): void
    {
        $service = new ConversationService();

        Response::json(
            $service->findAll()
        );
    }
}