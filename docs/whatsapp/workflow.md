# n8n Workflow

Incoming Message

↓

Webhook

↓

AI Processing

↓

Database

↓

Send WhatsApp Message

## Webhook

Method

POST

Path

```
whatsapp/messages-upsert
```

## Production URL

```
http://localhost:5678/webhook/whatsapp/messages-upsert
```

Example Payload

```json
{
  "event": "MESSAGES_UPSERT",
  "data": {
    "key": {
      "remoteJid": "6281234567890@s.whatsapp.net"
    },
    "message": {
      "conversation": "Hello"
    }
  }
}
```