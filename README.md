# 🤖 n8n AI WhatsApp Customer Support

> AI-powered WhatsApp Customer Support Automation built with **n8n**, **Evolution API**, **Ollama**, **Docker**, **MySQL**, and **PHP REST API**.

![Project Thumbnail](docs/thumbnail.png)

<p align="center">

![Status](https://img.shields.io/badge/status-active%20development-success)
![Version](https://img.shields.io/badge/version-v1.0.0--alpha-blue)
![License](https://img.shields.io/badge/license-MIT-green)
![PHP](https://img.shields.io/badge/PHP-8.3-777BB4)
![MySQL](https://img.shields.io/badge/MySQL-8.4-4479A1)
![Docker](https://img.shields.io/badge/Docker-Enabled-2496ED)

</p>

---

## 🚀 Project Overview

This project demonstrates how to build a complete AI-powered WhatsApp Customer Support platform using **n8n**, **Evolution API**, **Ollama**, **Docker**, **MySQL**, and **PHP REST API**.

Incoming WhatsApp messages are received through Evolution API, processed by n8n workflows, enriched with customer and conversation data stored in MySQL, answered by Ollama AI, and automatically sent back to customers.

The project is designed as a production-ready portfolio demonstrating backend architecture, workflow automation, REST API development, Docker deployment, and AI integration.

---

## ✨ Key Features

- 🤖 AI-generated WhatsApp replies
- 💬 WhatsApp automation
- ⚡ Workflow automation with n8n
- 🧠 Local AI using Ollama
- 🗄️ MySQL conversation storage
- 🐘 PHP REST API
- 🐳 Docker deployment
- 👤 Customer management
- 💬 Conversation management
- 🤝 Human handover ready
- 📚 Knowledge Base (RAG) ready
- 📈 CRM integration ready

---

## 🎯 Skills Demonstrated

- Backend API Development
- Docker Containerization
- PHP OOP
- MySQL Database Design
- Workflow Automation (n8n)
- AI Integration (Ollama)
- REST API Development
- Software Architecture

---

## 🏗️ System Architecture

![System Architecture](docs/architecture-diagram.png)

The platform receives incoming WhatsApp messages through Evolution API. n8n orchestrates the workflow, communicates with the PHP REST API, stores customer and conversation data in MySQL, generates AI responses using Ollama, and sends replies back to customers automatically.

---

## 🛠 Technology Stack

| Category | Technology |
|-----------|------------|
| Workflow Automation | n8n |
| Messaging | Evolution API |
| AI | Ollama |
| Backend | PHP 8.3 |
| Database | MySQL 8.4 |
| Containerization | Docker |
| Administration | Adminer |

---

## 📊 Project Status

- [x] Documentation
- [x] Infrastructure
- [x] Docker Environment
- [x] PHP REST API
- [x] MySQL Database
- [x] Customer API
- [ ] Evolution API Integration
- [ ] n8n Workflow
- [ ] AI Integration
- [ ] Conversation Memory
- [ ] Human Handover
- [ ] CRM Integration

---

## 📁 Project Structure

```text
.
├── api/
│   ├── config/
│   ├── controllers/
│   ├── helpers/
│   ├── models/
│   ├── responses/
│   ├── routes/
│   └── index.php
│
├── database/
│   └── init/
│       ├── 01-schema.sql
│       └── 02-sample-data.sql
│
├── docker/
│   ├── evolution/
│   └── php/
│
├── docs/
│   ├── thumbnail.png
│   ├── architecture-diagram.png
│   └── screenshots/
│
├── workflows/
├── docker-compose.yml
├── README.md
└── LICENSE
```

---

## 🚀 Quick Start

### Clone Repository

```bash
git clone git@github.com:ibam28/n8n-ai-whatsapp-customer-support.git

cd n8n-ai-whatsapp-customer-support
```

### Configure Environment

```bash
cp .env.example .env
```

### Start Containers

```bash
docker compose up -d --build
```

### Verify Running Containers

```bash
docker ps
```

Expected services:

- MySQL
- Adminer
- PHP REST API

### Open Services

| Service | URL |
|----------|-----|
| PHP REST API | http://localhost:8080 |
| Adminer | http://localhost:8081 |

---

## ⚙️ Environment Variables

Create a `.env` file using:

```bash
cp .env.example .env
```

Main configuration:

| Variable | Description |
|-----------|-------------|
| TZ | Server timezone |
| MYSQL_ROOT_PASSWORD | MySQL root password |
| MYSQL_DATABASE | Database name |
| MYSQL_USER | Database username |
| MYSQL_PASSWORD | Database password |
| DB_HOST | PHP database host |
| DB_NAME | PHP database name |
| DB_USER | PHP database username |
| DB_PASSWORD | PHP database password |
| OLLAMA_MODEL | Ollama AI model |
| EVOLUTION_API_KEY | Evolution API key |
| N8N_SECURE_COOKIE | n8n secure cookie |
| GENERIC_TIMEZONE | n8n timezone |

---

## 🌐 REST API

Current endpoints:

| Method | Endpoint | Description |
|---------|----------|-------------|
| GET | `/` | Project status |
| GET | `/health` | Health check |
| GET | `/customers` | List customers |

Planned endpoints:

- POST /customers
- GET /conversations
- POST /conversations
- GET /messages
- POST /messages

---

## 🗄️ Database

Current database tables:

- customers
- conversations
- messages

Initialization scripts:

```text
database/init/
├── 01-schema.sql
└── 02-sample-data.sql
```

The database is automatically initialized during the first MySQL container startup.

---

## 📚 Documentation

Additional documentation will be available in the `docs/` directory.

- Architecture Diagram
- Database Design
- API Design
- Installation Guide
- Workflow Screenshots
- Development Roadmap

---

## 🛣️ Development Roadmap

### Version 1.0

- [x] Docker Environment
- [x] PHP REST API
- [x] MySQL Database
- [x] Customer API
- [ ] Evolution API Integration
- [ ] n8n Workflow
- [ ] Ollama AI Integration

### Version 2.0

- [ ] Conversation Memory
- [ ] Human Handover
- [ ] CRM Integration
- [ ] Knowledge Base (RAG)
- [ ] Dashboard & Analytics

---
## WhatsApp Integration

The project includes an Evolution API integration for WhatsApp automation.

Current implementation includes:

- Dockerized Evolution API
- PostgreSQL
- Redis
- n8n Webhook Integration
- Production Webhook Validation
- WhatsApp Session Management

> **Known Issue**
>
> During testing with Evolution API v2.3.7, manual webhook requests succeed while automatic webhook dispatch from Evolution API returns HTTP 404. The integration architecture and troubleshooting process are fully documented in `docs/whatsapp/troubleshooting.md`.

---

## 📄 License

This project is licensed under the **MIT License**.

See the **LICENSE** file for more information.

---

⭐ If you find this project useful, consider giving it a star on GitHub.