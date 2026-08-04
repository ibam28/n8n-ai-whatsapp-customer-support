# WhatsApp Integration Architecture

## Overview

This project integrates WhatsApp with n8n using Evolution API.

```
WhatsApp
     │
     ▼
Evolution API
     │
     ▼
Webhook
     │
     ▼
n8n Workflow
     │
     ▼
AI Processing
     │
     ▼
MySQL
     │
     ▼
WhatsApp Reply
```

## Components

| Component | Purpose |
|-----------|---------|
| Evolution API | Connects WhatsApp sessions |
| n8n | Workflow automation engine |
| Ollama | Local AI model |
| MySQL | Stores conversations |
| Docker | Container orchestration |

## Docker Networks

```
ai-network

├── ai-n8n
└── wa-evolution
```

## Services

| Service | Port |
|---------|------|
| n8n | 5678 |
| Evolution API | 8082 |
| MySQL | 3306 |