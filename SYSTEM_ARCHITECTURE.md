# System Architecture

## Components

### Evolution API

Responsible for connecting to WhatsApp, receiving incoming messages, and sending outgoing replies.

---

### n8n

Responsible for workflow automation.

Tasks:

- Receive webhook
- Validate payload
- Save customer
- Save message
- Ask Ollama
- Save AI response
- Send WhatsApp reply

---

### Ollama

Responsible for generating AI responses using a local Large Language Model.

---

### MySQL

Stores:

- Customers
- Conversations
- Messages

---

### PHP REST API

Provides additional REST endpoints for future integrations.

---

### Adminer

Database management interface.

---

## Message Flow

Customer

↓

WhatsApp

↓

Evolution API

↓

n8n

↓

MySQL

↓

Ollama

↓

MySQL

↓

Evolution API

↓

Customer

