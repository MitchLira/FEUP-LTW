PRAGMA foreign_keys = ON;
PRAGMA encoding = "UTF-8";

CREATE TABLE user (
	username VARCHAR PRIMARY KEY,
	name VARCHAR,
	email VARCHAR UNIQUE,
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
	categories VARCHAR,
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


CREATE TRIGGER update_rating AFTER INSERT ON reviews
BEGIN
	UPDATE restaurant SET avgRating = (
		SELECT AVG(rating) FROM restaurant
		JOIN reviews ON (restaurant.id = NEW.idRestaurant)
		GROUP BY (idRestaurant)
		HAVING (idRestaurant = NEW.idRestaurant)
	)
	WHERE (restaurant.id = NEW.idRestaurant);
END;


INSERT INTO user VALUES('jpmb', 'João Barbosa', 'jb@hotmail.com', 'Portugal', 'reviewer', '1995-08-31', 'mamamia');
INSERT INTO user VALUES('miriamcmcg','Miriam Gonçalves', 'miriam@hotmail.com', 'Portugal', 'owner', '1996-09-19', 'mamatu');
INSERT INTO user VALUES('mitchie', 'Miguel Lira', 'lyrics@hotmail.com', 'Guatemala', 'user', '1996-02-25', 'mamueu');
INSERT INTO user VALUES('jonas', 'João Ferreira', 'joaoferreira@hotmail.com','Jamaica', 'owner', '1989-12-05', 'mamaela');
INSERT INTO user VALUES('tats', 'Tatiana Mendes', 'tats@hotmail.com','Portugal', 'reviewer', '1990-03-10', 'mamamosnos');						

INSERT INTO restaurant VALUES(NULL, 'miriamcmcg', 'Tappas Caffé', 'Portugal', 'Porto', 'Gaia', 'Rua Senhor de Matosinhos', '4450-001', 10.5, 'Artesanal', '11:30:00', '02:00:00', '2016-11-24', 0);
INSERT INTO restaurant VALUES(NULL, 'jonas', 'Hard Rock Caffé', 'Portugal', 'Porto', 'Porto', 'Avenida dos Aliados', '1500-150', 15, 'Contemporâneo','09:30:00', '01:00:00', '2016-09-17', 0);


INSERT INTO reviews VALUES(NULL, 'tats', 1, 'Melhor francesinha do Porto, recomendo!', 4.8);
INSERT INTO reviews VALUES(NULL, 'jpmb', 2, 'Um bocado caro, mas com excelente ambiente! Recomendo.', 4.5);
INSERT INTO reviews VALUES(NULL, 'tats', 2, 'Bastante caro para uma francesinha tão pequena!', 2.5);







