-- //1-What query would you run to get all the coutries that speak Slovene. Your query should return the name 
-- //of the Country, language and language percentage in decrease order.

SELECT countries.name, languages.language, languages.percentage
FROM countries JOIN languages ON countries.id = languages.country_id
WHERE languages.language = "Slovene" ORDER BY percentage DESC;

-- // #2 What query would you run to display the number of cities for each coutry and total amound of cities.
-- // Your query shoul arrange the result by number of cities in decrecent order.
SELECT COUNT(cities.country_id) AS 'Count of Cities', countries.name AS 'Coutry'
FROM cities 
JOIN countries ON countries.id = cities.country_id AND countries.id
GROUP BY country_id ORDER BY COUNT(*) DESC;

-- // #3 What query would you run to get all the cities in mexico with a population greater than 500.000.
-- //Your query should arrange the result by population in decreasing order.
SELECT cities.name AS 'City Name', cities.population AS 'Population', countries.name AS Country
FROM cities
JOIN countries ON countries.id = cities.country_id AND countries.id
WHERE cities.population > '500000' AND countries.name = 'mexico' ORDER BY population DESC;

-- // #4 What query would you run to ge all lenguage in each country with a percentage grater than 89%.
-- // Your query should Arrange the result by population in decending order. 

SELECT languages.language, languages.percentage
FROM languages WHERE percentage > '89%' ORDER BY percentage DESC;

-- // #5 What query would you run to get all the countries whith surface area bellow 501 and population greater than 100.000

SELECT countries.surface_area AS 'Surface', countries.population AS 'Population'
FROM countries
WHERE surface_area < '501' AND population > '100000';

-- // #6 What query would you run to get countries with only Constitutional Monarchy
-- // with Captital Greater than 200 and life expentancy grater tahn 75 years

SELECT countries.government_form, countries.capital, countries.life_expectancy
FROM countries WHERE government_form = 'Constitutional Monarchy' AND capital > '200' AND life_expectancy > '75';

-- // # 7 What query would you run to get all the cities of Argentina inside of Buenos Aires district and have population grater than 500.000,
-- // The query should retun the Contry Name, 

SELECT cities.district, cities.population, countries.name, cities.name
FROM cities
JOIN countries ON countries.id = cities.country_id
WHERE countries.name = 'Argentina' AND cities.district = 'Buenos Aires' AND cities.population > '500000';

-- # 8 What query would you run to summarize the number of countries in each region

SELECT COUNT(countries.region) AS 'Countries', countries.region AS 'Region'
FROM countries
GROUP BY countries.region ORDER BY COUNT(countries.region) DESC;








