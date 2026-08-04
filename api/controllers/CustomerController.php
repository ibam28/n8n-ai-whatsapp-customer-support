<?php

declare(strict_types=1);

require_once __DIR__ . '/../models/Customer.php';
require_once __DIR__ . '/../responses/Response.php';

class CustomerController
{
    public function index(): void
    {
        $customer = new Customer();

        Response::json(
            $customer->findAll()
        );
    }
}