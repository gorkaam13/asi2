CREATE TABLE capitales (
    capital varchar(50) NOT NULL,
	latitud varchar(10)NOT NULL,
	longitud varchar(10)NOT NULL,
	PRIMARY KEY( capital )
);

create table users (
	user varchar (30) not null,
	pass varchar (250) not null,
	PRIMARY KEY (user)
);

INSERT INTO capitales (capital,latitud,longitud) VALUES 
 ('madrid','40.416','-3.702'),
 ('paris','48.853','2.348'),
 ('londres','51.507', '-0.127'),
('berlin','52.512', '13.326');
INSERT INTO users  VALUES 
 ('admin','admin');
