# Database Design

## customers

| Column | Type | Description |
|---------|------|-------------|
| id | INT | Primary Key |
| phone | VARCHAR(30) | WhatsApp Number |
| name | VARCHAR(100) | Customer Name |
| created_at | TIMESTAMP | Created Time |
| updated_at | TIMESTAMP | Updated Time |

---

## conversations

| Column | Type | Description |
|---------|------|-------------|
| id | INT | Primary Key |
| customer_id | INT | Customer ID |
| status | ENUM | OPEN / CLOSED / HANDOVER |
| created_at | TIMESTAMP | Created Time |
| updated_at | TIMESTAMP | Updated Time |

---

## messages

| Column | Type | Description |
|---------|------|-------------|
| id | INT | Primary Key |
| conversation_id | INT | Conversation ID |
| sender | ENUM | customer / assistant / admin |
| message | TEXT | Chat Message |
| created_at | TIMESTAMP | Created Time |
