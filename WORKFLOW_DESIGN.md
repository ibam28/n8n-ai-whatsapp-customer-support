# Workflow Design

## Main Workflow

Customer

↓

WhatsApp

↓

Evolution API

↓

Webhook Trigger

↓

Validate Request

↓

Find Customer

↓

Create Customer (if not exists)

↓

Find Active Conversation

↓

Create Conversation (if not exists)

↓

Save Customer Message

↓

Ask Ollama

↓

Save AI Reply

↓

Send WhatsApp Reply

↓

Finish

---

# Future Workflow

## Human Handover

Customer

↓

AI cannot answer

↓

Notify Admin

↓

Admin Reply

↓

Customer

---

## CRM Integration

Conversation Closed

↓

Create Lead

↓

CRM

---

## Analytics

Every Day

↓

Generate Report

↓

Email Admin
