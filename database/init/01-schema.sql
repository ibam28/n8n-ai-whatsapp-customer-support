CREATE DATABASE IF NOT EXISTS whatsapp_support;

USE whatsapp_support;

-- =====================================
-- Customers
-- =====================================

CREATE TABLE customers (

    id INT AUTO_INCREMENT PRIMARY KEY,

    phone VARCHAR(30) NOT NULL UNIQUE,

    name VARCHAR(100),

    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,

    updated_at TIMESTAMP
        DEFAULT CURRENT_TIMESTAMP
        ON UPDATE CURRENT_TIMESTAMP

);

-- =====================================
-- Conversations
-- =====================================

CREATE TABLE conversations (

    id INT AUTO_INCREMENT PRIMARY KEY,

    customer_id INT NOT NULL,

    status ENUM(
        'OPEN',
        'CLOSED',
        'HANDOVER'
    ) DEFAULT 'OPEN',

    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,

    updated_at TIMESTAMP
        DEFAULT CURRENT_TIMESTAMP
        ON UPDATE CURRENT_TIMESTAMP,

    CONSTRAINT fk_conversation_customer
        FOREIGN KEY (customer_id)
        REFERENCES customers(id)
        ON DELETE CASCADE

);

-- =====================================
-- Messages
-- =====================================

CREATE TABLE messages (

    id INT AUTO_INCREMENT PRIMARY KEY,

    conversation_id INT NOT NULL,

    sender ENUM(
        'customer',
        'assistant',
        'admin'
    ) NOT NULL,

    message TEXT NOT NULL,

    created_at TIMESTAMP
        DEFAULT CURRENT_TIMESTAMP,

    CONSTRAINT fk_message_conversation
        FOREIGN KEY (conversation_id)
        REFERENCES conversations(id)
        ON DELETE CASCADE

);