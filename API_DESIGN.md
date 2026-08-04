# API Design

## Base URL

http://localhost:8080/api

---

# Health Check

GET /health

Response

```json
{
  "status": "ok"
}
```

---

# Customers

## Get Customers

GET /customers

---

## Get Customer

GET /customers/{id}

---

# Conversations

## Get Conversations

GET /conversations

---

## Get Conversation

GET /conversations/{id}

---

# Messages

## Get Messages

GET /messages

---

## Get Conversation Messages

GET /conversations/{id}/messages

---

# AI

## Generate Reply

POST /ai/reply

Request

```json
{
  "phone": "+628123456789",
  "message": "Hello"
}
```

Response

```json
{
  "reply": "Hello! How can I help you today?"
}
```

---

# Webhook

POST /webhook/whatsapp

Used by Evolution API to send incoming WhatsApp messages to the system.
