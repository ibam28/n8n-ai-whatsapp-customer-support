<?php

declare(strict_types=1);

require_once __DIR__ . '/../models/Conversation.php';

class ConversationService
{
    private Conversation $conversation;

    public function __construct()
    {
        $this->conversation = new Conversation();
    }

    public function findAll(): array
    {
        return $this->conversation->findAll();
    }

    public function findByCustomerId(int $customerId): array
    {
        return $this->conversation->findByCustomerId($customerId);
    }
}