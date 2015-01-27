INSERT INTO messages (message, created_at, updated_at) 
VALUES ('camilo', NOW(), NOW());


SELECT * FROM messages;
SELECT * FROM users;


INSERT INTO users (first_name, last_name, password, email, created_at, updated_at) 
VALUES ('camilo', 'Gafsdfdsafllego', '1111111111', 'egallefasdfsdafgo00@gxxxxmail.com', NOW(), NOW());



INSERT INTO messages (users_id, message, created_at, updated_at) 
VALUES ( '1', 'fasdfadsfasd', NOW(), NOW());

INSERT INTO users (first_name, last_name, password, email, created_at, updated_at) 
VALUES ('camilo', 'Gafsdfdsafllego', '1111111111', 'egallefasdfsdafgo00@gxxxxmail.com', NOW(), NOW());

INSERT INTO comments (messages_id, comment, created_at, updated_at) VALUES ('1', 'testisn', NOW(), NOW());
select * from comments;



INSERT INTO messages (users_id, message, created_at, updated_at) VALUES ('1', 'fasdfdasfadsf', NOW(), NOW());


INSERT INTO messages (message, created_at, updated_at) VALUES ('fasdfadsfasd', NOW(), NOW());