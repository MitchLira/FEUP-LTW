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
	idOwner INTEGER REFERENCES user(username),
	name VARCHAR,
	location VARCHAR,
	price FLOAT,
	category VARCHAR,
	open TIME,
	close TIME,
	entryDate DATE
);

CREATE TABLE reviews (
	id INTEGER PRIMARY KEY AUTOINCREMENT,
	username VARCHAR REFERENCES user(username),
	idRestaurant INTEGER REFERENCES restaurant(id),
	fulltext VARCHAR,
	rating FLOAT
);


INSERT INTO user VALUES('jpmb', 'João Barbosa', 'jb@hotmail.com', 'Portugal', 'reviewer', '1995-08-31', 'mamamia');
INSERT INTO user VALUES('miriamcmcg','Miriam Gonçalves', 'miriam@hotmail.com', 'Portugal', 'owner', '1996-09-19', 'mamatu');
INSERT INTO user VALUES('mitchie', 'Miguel Lira', 'lyrics@hotmail.com', 'Guatemala', 'user', '1996-02-25', 'mamueu');
INSERT INTO user VALUES('jonas', 'João Ferreira', 'joaoferreira@hotmail.com','Jamaica', 'owner', '1989-12-05', 'mamaela');
INSERT INTO user VALUES('tats', 'Tatiana Mendes', 'tats@hotmail.com','Portugal', 'reviewer', '1990-03-10', 'mamamosnos');						

INSERT INTO restaurant VALUES(NULL, 'miriamcmcg', 'Tappas Caffé', 'Gaia, Porto, Portugal', 10.5, 'Artesanal', '11:30:00', '02:00:00', '2016-11-24');
INSERT INTO restaurant VALUES(NULL, 'jonas', 'Hard Rock Caffé','Aliados, Porto, Portugal', 15, 'Contemporâneo','09:30:00', '01:00:00', '2016-09-17');

INSERT INTO reviews VALUES(NULL, 'tats', 1, 'Melhor francesinha do Porto, recomendo!', 4.8);
INSERT INTO reviews VALUES(NULL, 'jpmb', 2, 'Um bocado caro, mas com excelente ambiente! Recomendo.', 4.5);
INSERT INTO reviews VALUES(NULL, 'tats', 2, 'Bastante caro para uma francesinha tão pequena!', 2.5);









