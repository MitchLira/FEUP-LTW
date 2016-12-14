PRAGMA foreign_keys = ON;
PRAGMA encoding = "UTF-8";

CREATE TABLE user (
	username VARCHAR PRIMARY KEY,
	name VARCHAR,
	email VARCHAR,
	country VARCHAR,
	status VARCHAR,
	birthday DATE,
	password VARCHAR
);

CREATE TABLE restaurant (
	id INTEGER PRIMARY KEY AUTOINCREMENT,
	owner VARCHAR REFERENCES user(username),
	name VARCHAR,
	country VARCHAR,
	city VARCHAR,
	state VARCHAR,
	street VARCHAR,
	zipcode VARCHAR,
	price FLOAT,
	description VARCHAR,
	open TIME,
	close TIME,
	entryDate DATE,
	avgRating FLOAT
);

CREATE TABLE reviews (
	id INTEGER PRIMARY KEY AUTOINCREMENT,
	username VARCHAR REFERENCES user(username),
	idRestaurant INTEGER REFERENCES restaurant(id),
	fulltext VARCHAR,
	rating FLOAT
);



CREATE TABLE images_user (
	id INTEGER PRIMARY KEY AUTOINCREMENT,
	username VARCHAR REFERENCES user(username),
	title VARCHAR DEFAULT ""
);


CREATE TABLE images_restaurant (
	id INTEGER PRIMARY KEY AUTOINCREMENT,
	idRestaurant INTEGER REFERENCES restaurant(id),
	title VARCHAR DEFAULT ""
);


CREATE TRIGGER update_rating AFTER INSERT ON reviews
BEGIN
	UPDATE restaurant SET avgRating = round((
		SELECT AVG(rating) FROM restaurant
		JOIN reviews ON (restaurant.id = NEW.idRestaurant)
		GROUP BY (idRestaurant)
		HAVING (idRestaurant = NEW.idRestaurant)
	), 1)
	WHERE (restaurant.id = NEW.idRestaurant);
END;