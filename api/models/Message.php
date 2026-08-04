<?php

declare(strict_types=1);

require_once __DIR__ . '/BaseModel.php';

class Message extends BaseModel
{
    public function findAll(): array
    {
        $statement = $this->db->query(
            'SELECT * FROM messages ORDER BY id DESC'
        );

        return $statement->fetchAll();
    }

    public function findByConversationId(int $conversationId): array
    {
        $statement = $this->db->prepare(
            'SELECT * FROM messages
             WHERE conversation_id = :conversation_id
             ORDER BY id ASC'
        );

        $statement->execute([
            'conversation_id' => $conversationId
        ]);

        return $statement->fetchAll();
    }
}