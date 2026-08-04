<?php

declare(strict_types=1);

require_once __DIR__ . '/../models/Customer.php';

class CustomerService
{
    private Customer $customer;

    public function __construct()
    {
        $this->customer = new Customer();
    }

    public function findAll(): array
    {
        return $this->customer->findAll();
    }
}