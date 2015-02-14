SELECT * FROM orders;
SELECT * FROM products;

SELECT products.description, products.price, sum(orders.quantity) AS 'quantity'
FROM orders
LEFT JOIN products
ON products.id = orders.products_id
GROUP BY products.id;

SELECT products.description, products.price, orders.quantity AS 'quantity'
select *
FROM orders 
left JOIN products
ON products.id = orders.products_id
GROUP BY products.id;


-- SUM(orders.quantity)
-- GROUP BY products.id;





-- 
-- 
-- 
-- 
-- SELECT products.description, 
--        products.price, 
--        SUM(orders.quantity) AS sum_quantity
-- FROM orders 
-- LEFT JOIN products ON products.id = products.id
-- GROUP BY products.description, products.price;
-- 
-- 
-- 
-- SELECT products.description, 
--        products.price, 
--        SUM(orders.quantity) AS 'quantity'
-- FROM orders 
-- LEFT JOIN products
-- ON products.id = products.id
-- GROUP BY products.description,products.price;
-- 
-- 
-- 
-- 
-- SELECT products.description, products.price, s(orders.quantity) AS 'quantity'
-- FROM orders 
-- LEFT JOIN products
-- ON products.id = products.id
-- GROUP BY products.id;
-- 
-- SUM(orders.quantity) ON ;
-- GROUP BY products.id ;
-- WHERE orders.id;
-- 
-- 
-- SELECT orders.id, orders.description, orders.price, orders.quantity FROM orders
-- 
-- GROUP BY products.id ;
-- 
-- 
-- GROUP BY countries.region ORDER BY COUNT(countries.region) DESC;
-- 
-- 
-- SELECT Orders.OrderID, Customers.CustomerName, Orders.OrderDate
-- FROM Orders
-- INNER JOIN Customers
-- ON Orders.CustomerID = Customers.CustomerID;
-- -- WHERE orders.id = products.id;

SELECT products.description, 
       products.price, 
       SUM(orders.quantity) AS 'quantity'
FROM orders 
LEFT JOIN products
ON products.id = products.id
GROUP BY products.description,products.price;
-- 