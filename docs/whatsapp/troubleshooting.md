# Troubleshooting

## Environment

| Component | Status |
|----------|--------|
| Docker | ✅ |
| PostgreSQL | ✅ |
| Redis | ✅ |
| n8n | ✅ |
| Evolution API | ✅ |
| WhatsApp Connection | ✅ |
| Webhook Registration | ✅ |

---

## Validation

### Webhook Test

Host

```bash
curl http://localhost:5678/webhook/whatsapp/messages-upsert
```

Result

```
HTTP 200
```

---

Container

```bash
docker exec -it wa-evolution curl \
http://ai-n8n:5678/webhook/whatsapp/messages-upsert
```

Result

```
HTTP 200
```

---

Webhook Configuration

```
URL

http://ai-n8n:5678/webhook/whatsapp

Enabled

true

Events

MESSAGES_UPSERT
MESSAGES_UPDATE
SEND_MESSAGE

webhookByEvents

true
```

---

## Known Issue

During testing with Evolution API v2.3.7, incoming WhatsApp events were received correctly by Evolution API.

However, webhook delivery to n8n returned HTTP 404 even though the same endpoint responded with HTTP 200 when tested manually using curl.

Current evidence indicates that:

- Docker networking is functional.
- n8n production webhook is reachable.
- Evolution API can reach the webhook endpoint manually.
- The issue occurs only during Evolution API's internal webhook dispatch process.

This behavior is currently under investigation.