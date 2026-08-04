<?php

declare(strict_types=1);

require_once __DIR__ . '/BaseModel.php';

class Conversation extends BaseModel
{
    public function findAll(): array
    {
        $statement = $this->db->query(
            'SELECT * FROM conversations ORDER BY id DESC'
        );

        return $statement->fetchAll();
    }

    public function findByCustomerId(int $customerId): array
    {
        $statement = $this->db->prepare(
            'SELECT * FROM conversations
             WHERE customer_id = :customer_id
             ORDER BY id DESC'
        );

        $statement->execute([
            'customer_id' => $customerId
        ]);

        return $statement->fetchAll();
    }
}