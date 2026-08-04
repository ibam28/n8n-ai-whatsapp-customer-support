<?php

declare(strict_types=1);

require_once __DIR__ . '/../services/CustomerService.php';
require_once __DIR__ . '/../responses/Response.php';

class CustomerController
{
    public function index(): void
    {
        $service = new CustomerService();

        Response::json(
            $service->findAll()
        );
    }
}