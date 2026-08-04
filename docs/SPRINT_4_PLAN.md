# Sprint 4 Plan

## Sprint Name

Evolution API Integration

---

# Objective

Integrate Evolution API into the existing backend infrastructure.

At the end of this sprint, the backend should be be able to receive incoming WhatsApp messages through Evolution API and store them in the MySQL database.

---

# Sprint Goal

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
PHP REST API
    │
    ▼
MySQL
```

---

# Current Architecture

```
Browser
    │
    ▼
PHP REST API
    │
    ▼
Service Layer
    │
    ▼
Model Layer
    │
    ▼
MySQL
```

---

# Target Architecture

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
PHP REST API
    │
    ▼
Service Layer
    │
    ▼
Model Layer
    │
    ▼
MySQL
```

---

# Sprint Roadmap

## Sprint 4.1 — Infrastructure

- [ ] Verify Evolution API version
- [ ] Configure Docker Compose
- [ ] Configure Redis
- [ ] Configure Environment Variables
- [ ] Start Evolution API

Deliverable:

Evolution API running successfully.

---

## Sprint 4.2 — WhatsApp Connection

- [ ] Create WhatsApp Instance
- [ ] Generate QR Code
- [ ] Scan QR Code
- [ ] Verify Connected Status

Deliverable:

WhatsApp connected successfully.

---

## Sprint 4.3 — Webhook

- [ ] Create webhook endpoint
- [ ] Configure Evolution API webhook
- [ ] Receive webhook payload
- [ ] Validate JSON payload

Deliverable:

Backend receives WhatsApp events.

---

## Sprint 4.4 — Database Integration

- [ ] Create customer automatically
- [ ] Create conversation automatically
- [ ] Store incoming message
- [ ] Validate database relationship

Deliverable:

Incoming messages stored in MySQL.

---

## Sprint 4.5 — Send Reply

- [ ] Send WhatsApp message
- [ ] Verify delivery
- [ ] Error handling

Deliverable:

Backend sends WhatsApp messages.

---

## Sprint 4.6 — End-to-End Testing

Flow

```
WhatsApp
    │
    ▼
Evolution API
    │
    ▼
PHP Backend
    │
    ▼
MySQL
    │
    ▼
Response
```

Deliverable:

End-to-end communication working.

---

# Technology Stack

- PHP 8.3
- MySQL 8.4
- Redis
- Docker
- Evolution API
- Composer

---

# Target Release

v1.0.3-alpha

---

# Success Criteria

- Evolution API running
- WhatsApp connected
- Webhook working
- Incoming messages stored
- Outgoing messages working

---

Status

Planning