SELECT users.name,
    cities.name as city_name
FROM users
    LEFT JOIN cities ON cities.id = users.city_id
LIMIT 100;