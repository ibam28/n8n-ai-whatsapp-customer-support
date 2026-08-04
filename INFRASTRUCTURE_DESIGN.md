# Infrastructure Design

## Containers

- Evolution API
- n8n
- Ollama
- MySQL
- Adminer
- PHP REST API

---

## Docker Network

whatsapp-network

---

## Docker Volumes

- mysql_data
- n8n_data
- ollama_data
- evolution_data

---

## Ports

| Service | Port |
|----------|------|
| PHP API | 8080 |
| Adminer | 8081 |
| Evolution API | 8082 |
| n8n | 5678 |
| Ollama | 11434 |
| MySQL | 3306 |

---

## Folder Structure

docker/

- php/
- mysql/
- evolution/
