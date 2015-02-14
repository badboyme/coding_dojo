

select * from users;
select * from friendship;


SELECT users.id as 'User Id', users.alias, friendship.friend_id, friendship.id as 'Friend Id'
FROM users
LEFT JOIN friendship ON users.id = friendship.users_id
WHERE users.id = users.id;



DELETE FROM friendship
WHERE friendship.id = '6';

SELECT users.alias, friendship.friend_id
FROM friendship
LEFT JOIN users ON users.id = friendship.friend_id;


select users.name, users.email
from users where id = '1';


SELECT products.description, products.price, sum(quantity) AS 'quantity', orders.id AS 'order_id'
		FROM orders
		left JOIN products
		ON products.id = orders.products_id
		GROUP BY products.id;

