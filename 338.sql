SELECT users.name,
    cities.name as city_name,
    countries.name as country_name
FROM users
    LEFT JOIN cities ON cities.id = users.city_id
    LEFT JOIN countries ON countries.id = cities.country_id;