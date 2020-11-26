DROP DATABASE IF EXISTS gestionale;
CREATE DATABASE gestionale;
USE gestionale;
CREATE TABLE switch  (
	id INT AUTO_INCREMENT,
    posizione VARCHAR(25),
    modello VARCHAR(25),
	etichetta VARCHAR(25),
    numero_porte INT,
    PRIMARY KEY(id)
);

CREATE TABLE dispositivo (
	id INT AUTO_INCREMENT,
    dispositivo VARCHAR(25),
	PRIMARY KEY(id)
);

CREATE TABLE cavo (
	id INT AUTO_INCREMENT,
	cavo VARCHAR(25),
	PRIMARY KEY(id)
);

CREATE TABLE collegamento (
    switch_id INT,
    numero_porta INT,
    cavo_id INT,
    dispositivo_id INT,
    PRIMARY KEY(switch_id, numero_porta),
    FOREIGN KEY (switch_id) REFERENCES switch(id),
    FOREIGN KEY (dispositivo_id) REFERENCES dispositivo(id),
	FOREIGN KEY (cavo_id) REFERENCES cavo(id)
);

CREATE TABLE ruolo (
	id INT,
    ruolo VARCHAR(25),
    PRIMARY KEY(id)
);

CREATE TABLE utente (
	nome VARCHAR(25),
    password_utente VARCHAR(64),
    ruolo_id INT,
    PRIMARY KEY(nome),
    FOREIGN KEY (ruolo_id) REFERENCES ruolo(id)
);