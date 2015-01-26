INSERT INTO users (first_name, last_name, password, email, created_at, updated_at) VALUES ('Esteban', 'Gallego', '1111111111', 'egallego00@gmail.com', NOW(), NOW());
SELECT * FROM users;
INSERT INTO users (first_name, last_name, password, email, created_at, updated_at) VALUES ('Esteban', 'Gallego', '1111111111', 'egallego00@gmail.com', NOW(), NOW())
SELECT * FROM users;
SELECT * FROM users WHERE users.password = '1111111111' AND users.email = 'egallego00@gmail.com';
SELECT * FROM users WHERE users.password = 'cvbsdfbsdf' AND users.email = 'egallego00@gmail.com';

SELECT * FROM messages;
INSERT INTO messages (postMessage, created_at, updated_at) VALUES ('sfda', NOW(), NOW());