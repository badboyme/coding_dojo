-- 1 What query would you run to get all the custumers inside city_id = 312? 
-- Your query should return customer first name, last name, and address.
select customer.first_name, customer.last_name, address.address
from customer
join address on address.address_id = customer.address_id
join city on city.city_id = address.city_id
where city.city_id = 312;

-- 2 What query would you run to get all commedy films? Your query should retun film title, description, release year
-- special feature and genre.

select film.title as 'Title', film.description, film.release_year, film.rating, film.special_features, category.name
from film
join film_category on film.film_id = film_category.film_id
join category on film_category.category_id = category.category_id
where category.name in ('comedy');

-- 3 What query would you run to get all the films joined by actor_id=5? Your query should return the film title, description and release year. 

select film.title as 'Film Title', film.description as 'Film Description', film.release_year as 'Release Year', actor.actor_id as 'Actor ID'
from film
join film_actor on film_actor.film_id = film.film_id
join actor on actor.actor_id = film_actor.actor_id
where actor.actor_id = 5;

-- 4  What query would you run to get all the customers in store_id 1 and inside these cities (1,42,312 and 459)?
-- Your query should return customer firt name, last name, email, and address.

select customer.first_name as 'First name', customer.last_name as 'Last name', customer.email as 'Email', address.address as 'Address'
from customer
join address on address.address_id = customer.customer_id
join store on store.store_id = customer.store_id
join city on city.city_id = address.city_id
where store.store_id = 1 and city.city_id in (1,42,312,459);


-- 5 What query would you run to get all the films with rating "G" and special feature "Behind The Scenes", join by actor ID is 15? 
-- Your query should return film title, release year, rate and special features.

select film.title as 'Film title', film.release_year as 'Film realese', film.rental_rate as 'Rental rate', film.special_features as 'Special features', film.rating as 'Film rating'
from film
join film_actor on film_actor.film_id = film.film_id
join actor on actor.actor_id = film_actor.actor_id
where film.rating = 'G' and film.special_features = 'Behind The Scenes' and actor.actor_id = 15;

-- 6  What query would you run to get all the actors that join in the film_id "369"? 
-- Your query should retun film ID, title, actor ID, and actor name.

select film.film_id as 'Film ID', film.title 'Title', actor.actor_id as 'Actor ID', actor.first_name as 'First name'
from film
join film_actor on film_actor.film_id = film.film_id
join actor on actor.actor_id = film_actor.actor_id
where film.film_id = 369;

-- 7 What query would you run to get all the drama films with a rental rate of 2.99? 
-- Your query should return the film title, decription, release year, rating, special special features and genre.

select film.title as 'Title', film.description as 'Description', film.release_year as 'Release', film.rating as 'Rating', film.special_features as 'Special features', category.name as 'Genre', film.rental_rate as 'Rental rate'
from film
join film_category on film.film_id = film_category.film_id
join category on film_category.category_id = category.category_id
where category.name in ("drama") and film.rental_rate = 2.99;

-- What query wold you run to get all the action films that joinend by SANDRA KILMER.
-- Your query should return film title, description, release year, rating, special features, genre and actor's first and last name.

select film.title, film.description, film.release_year, film.rating, film.special_features, category.name, actor.first_name, actor.last_name
from film
join film_category on film.film_id = film_category.film_id
join category on film_category.category_id = category.category_id
join film_actor on film_actor.film_id = film.film_id
join actor on actor.actor_id  = film_actor.actor_id
where actor.first_name in ('sandra') and actor.last_name in ('kilmer'); 
