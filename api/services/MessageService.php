<?php

declare(strict_types=1);

require_once __DIR__ . '/../models/Message.php';

class MessageService
{
    private Message $message;

    public function __construct()
    {
        $this->message = new Message();
    }

    public function findAll(): array
    {
        return $this->message->findAll();
    }

    public function findByConversationId(int $conversationId): array
    {
        return $this->message->findByConversationId($conversationId);
    }
}