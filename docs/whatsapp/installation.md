# Installation

## Requirements

- Docker
- Docker Compose
- Existing n8n Infrastructure

## Start Evolution API

```bash
docker compose -f docker-compose.evolution.yml up -d
```

## Verify Containers

```bash
docker ps
```

Expected containers

- wa-evolution
- wa-postgres
- wa-redis

## Connect WhatsApp

1. Open Evolution Manager

```
http://localhost:8082
```

2. Create Instance

```
customer-support
```

3. Scan QR Code

4. Wait until

```
CONNECTED
```

## Configure Webhook

```
http://ai-n8n:5678/webhook/whatsapp
```

Events

- MESSAGES_UPSERT
- MESSAGES_UPDATE
- SEND_MESSAGE