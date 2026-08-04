USE whatsapp_support;

INSERT INTO customers (phone, name)
VALUES
('628111111111', 'John Doe'),
('628222222222', 'Jane Smith');

INSERT INTO conversations (customer_id, status)
VALUES
(1, 'OPEN'),
(2, 'OPEN');

INSERT INTO messages (conversation_id, sender, message)
VALUES
(1, 'customer', 'Hello, I need information about your services.'),
(1, 'assistant', 'Hello! How can I help you today?'),
(2, 'customer', 'Do you provide AI chatbot solutions?');