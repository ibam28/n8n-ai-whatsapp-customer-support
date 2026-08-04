# 🤖 n8n AI WhatsApp Customer Support

> AI-powered WhatsApp Customer Support Automation built with **n8n**, **Evolution API**, **Ollama**, **Docker**, **MySQL**, and **PHP REST API**.

<p align="center">
  <img src="docs/thumbnail.png" alt="Project Thumbnail" width="100%">
</p>

<p align="center">

![Status](https://img.shields.io/badge/status-active%20development-success)
![Version](https://img.shields.io/badge/version-v1.0.0--alpha-blue)
![License](https://img.shields.io/badge/license-MIT-green)
![PHP](https://img.shields.io/badge/PHP-8.3-777BB4)
![MySQL](https://img.shields.io/badge/MySQL-8.4-4479A1)
![Docker](https://img.shields.io/badge/Docker-Enabled-2496ED)

</p>

---

# 🚀 Project Overview

This project demonstrates how to build a complete AI-powered WhatsApp Customer Support platform using a local Large Language Model (LLM).

Incoming WhatsApp messages are received through Evolution API, processed by n8n workflows, enriched with customer and conversation data stored in MySQL, answered by Ollama AI, and automatically sent back to customers.

The project is designed as a production-ready portfolio showcasing backend architecture, workflow automation, REST API development, Docker deployment, and AI integration.

---

# ✨ Key Features

- 🤖 AI-generated WhatsApp replies
- 💬 WhatsApp automation
- ⚡ n8n workflow automation
- 🧠 Local LLM with Ollama
- 🗄️ MySQL conversation storage
- 🐘 PHP REST API
- 🐳 Docker deployment
- 👤 Customer management
- 💬 Conversation management
- 📈 Designed for future CRM integration
- 🤝 Human handover ready
- 📚 Knowledge Base (RAG) ready

---

# 🛠 Technology Stack

| Category | Technology |
|----------|------------|
| Workflow Automation | n8n |
| Messaging | Evolution API |
| AI | Ollama |
| Backend | PHP 8.3 |
| Database | MySQL 8.4 |
| Containerization | Docker |
| Administration | Adminer |

---

# 📊 Project Status

| Sprint | Status |
|---------|--------|
| Documentation | ✅ Completed |
| Infrastructure | ✅ Completed |
| REST API Foundation | ✅ Completed |
| Customer API | ✅ Completed |
| Evolution API | 🚧 In Progress |
| n8n Workflow | ⏳ Planned |
| AI Integration | ⏳ Planned |

---

# 🏗️ System Architecture

<p align="center">
  <img src="docs/architecture-diagram.png" alt="System Architecture" width="100%">
</p>

The platform receives incoming WhatsApp messages through Evolution API. n8n orchestrates the workflow, communicates with the PHP REST API, stores and retrieves customer data from MySQL, generates AI responses using Ollama, and sends replies back to customers automatically.

---

# 📁 Project Structure

```text
.
├── api/
│   ├── config/
│   ├── controllers/
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
│   └── php/
│
├── docs/
│   ├── thumbnail.png
│   ├── architecture-diagram.png
│   └── screenshots/
│
├── workflows/
├── docker-compose.yml
└── README.md
```
---

# 🚀 Quick Start

## Prerequisites

Before starting, make sure the following software is installed:

- Docker
- Docker Compose
- Git

---

## Clone Repository

```bash
git clone git@github.com:ibam28/n8n-ai-whatsapp-customer-support.git

cd n8n-ai-whatsapp-customer-support
```

---

## Configure Environment

```bash
cp .env.example .env
```

---

## Start Containers

```bash
docker compose up -d --build
```

---

## Verify Running Containers

```bash
docker ps
```

Expected services:

- MySQL
- Adminer
- PHP REST API

---

## Open Services

| Service | URL |
|----------|-----|
| PHP REST API | http://localhost:8080 |
| Adminer | http://localhost:8081 |
---

# ⚙️ Environment Variables

Create a `.env` file from the provided template:

```bash
cp .env.example .env
```

Example configuration:

| Variable | Description |
|----------|-------------|
| TZ | Server timezone |
| MYSQL_ROOT_PASSWORD | MySQL root password |
| MYSQL_DATABASE | Database name |
| MYSQL_USER | Database username |
| MYSQL_PASSWORD | Database password |
| DB_HOST | Database host |
| DB_NAME | Database name for PHP |
| DB_USER | Database username for PHP |
| DB_PASSWORD | Database password for PHP |
| OLLAMA_MODEL | Local LLM model |
| EVOLUTION_API_KEY | Evolution API authentication key |
| N8N_SECURE_COOKIE | n8n secure cookie option |
| GENERIC_TIMEZONE | n8n timezone |

---

# 🌐 REST API

Current API endpoints:

| Method | Endpoint | Description |
|---------|----------|-------------|
| GET | `/` | Project health check |
| GET | `/health` | Health status |
| GET | `/customers` | Get all customers |

More endpoints will be added during future sprints.

Planned APIs:

- POST /customers
- GET /conversations
- POST /conversations
- GET /messages
- POST /messages
---

# 🗄️ Database

Current database includes:

- customers
- conversations
- messages

Database initialization scripts:

```text
database/init/

01-schema.sql

02-sample-data.sql
```

The database is automatically initialized when the MySQL container starts for the first time.

---

# 🛣️ Development Roadmap

## Version 1.0

- [x] Docker Environment
- [x] PHP REST API
- [x] MySQL Database
- [x] Customer API
- [ ] Evolution API Integration
- [ ] n8n Workflow
- [ ] Ollama AI Integration

---

## Version 2.0

- [ ] Conversation Memory
- [ ] Human Handover
- [ ] CRM Integration
- [ ] Knowledge Base (RAG)
- [ ] Dashboard & Analytics
---

# 📄 License

This project is licensed under the MIT License.

See the LICENSE file for details.
> More documentation will be added as the project evolves.