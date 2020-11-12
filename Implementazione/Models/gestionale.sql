DROP DATABASE IF EXISTS gestionale;
CREATE DATABASE gestionale;
USE gestionale;
CREATE TABLE switch  (
	id INTEGER,
    posizione VARCHAR(25),
    modello VARCHAR(25),
    numero_porte VARCHAR(25),
    PRIMARY KEY(id)
);

CREATE TABLE dispositivo (
	id INTEGER,
    dispotivo VARCHAR(25),
	PRIMARY KEY(id)
);

CREATE TABLE cavo (
	id INTEGER,
	cavo VARCHAR(25),
	PRIMARY KEY(id)
);

CREATE TABLE collegamento (
    switch_id INTEGER,
    numero_porta INTEGER,
    cavo_id INTEGER,
    dispositivo_id INTEGER,
    PRIMARY KEY(switch_id, numero_porta),
    FOREIGN KEY (switch_id) REFERENCES switch(id),
    FOREIGN KEY (dispositivo_id) REFERENCES dispositivo(id),
	FOREIGN KEY (cavo_id) REFERENCES cavo(id)
);

CREATE TABLE ruolo (
	id INTEGER,
    ruolo VARCHAR(25),
    PRIMARY KEY(id)
);

CREATE TABLE utente (
	nome VARCHAR(25),
    password_utente VARCHAR(64),
    ruolo_id INTEGER,
    PRIMARY KEY(nome),
    FOREIGN KEY (ruolo_id) REFERENCES ruolo(id)
);