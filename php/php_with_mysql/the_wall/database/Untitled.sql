
SELECT messages.*, users.first_name, users.last_name FROM messages LEFT JOIN users ON messages.users_id = users.id;
SELECT comments.*, users.first_name, users.last_name FROM messages LEFT JOIN users ON messages.users_id = users.id;
SELECT  comments comment, created_at, updated_at, messages_id, users_id;

SELECT comments.*, comments.comment, comments.id, users.first_name, users.last_name 
FROM comments LEFT JOIN users ON  messages.id = comments.users_id;


SELECT comments.*, comments.comment, comments.id, users.first_name, users.last_name 
FROM comments LEFT 
JOIN users ON users.id = comments.messages_id
JOIN messages ON messages.users_id = users.users_id;

SELECT * FROM comments;

