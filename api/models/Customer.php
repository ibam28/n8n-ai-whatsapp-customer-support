<?php

declare(strict_types=1);

require_once __DIR__ . '/BaseModel.php';

class Customer extends BaseModel
{
    public function findAll(): array
    {
        $statement = $this->db->query(
            'SELECT * FROM customers ORDER BY id DESC'
        );

        return $statement->fetchAll();
    }
}