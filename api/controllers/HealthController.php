<?php

declare(strict_types=1);

require_once __DIR__ . '/../responses/Response.php';

class HealthController
{
    public function index(): void
    {
        Response::json([
            'project' => 'n8n AI WhatsApp Customer Support',
            'version' => '1.0.0',
            'status' => 'running'
        ]);
    }
}