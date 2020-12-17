DROP DATABASE IF EXISTS gestionale;
CREATE DATABASE gestionale;
USE gestionale;
CREATE TABLE switch  (
	id INT AUTO_INCREMENT,
    posizione VARCHAR(25) NOT NULL,
    modello VARCHAR(25)  NOT NULL,
	etichetta VARCHAR(25) NOT NULL,
    numero_porte INT NOT NULL,
    PRIMARY KEY(id)
);
CREATE TABLE dispositivo (
	id INT AUTO_INCREMENT,
    dispositivo VARCHAR(25) NOT NULL,
	PRIMARY KEY(id)
);
CREATE TABLE cavo (
	id INT AUTO_INCREMENT,
	cavo VARCHAR(25) NOT NULL,
	PRIMARY KEY(id)
);
CREATE TABLE collegamento (
    switch_id INT,
    numero_porta INT,
    cavo_id INT NOT NULL,
    dispositivo_id INT NOT NULL,
    PRIMARY KEY(switch_id, numero_porta),
    FOREIGN KEY (switch_id) REFERENCES switch(id),
    FOREIGN KEY (dispositivo_id) REFERENCES dispositivo(id),
	FOREIGN KEY (cavo_id) REFERENCES cavo(id)
);
CREATE TABLE ruolo (
	id INT,
    ruolo VARCHAR(25) NOT NULL,
    PRIMARY KEY(id)
);
CREATE TABLE utente (
	nome VARCHAR(25),
    password_utente VARCHAR(64) NOT NULL,
    ruolo_id INT NOT NULL,
    PRIMARY KEY(nome),
    FOREIGN KEY (ruolo_id) REFERENCES ruolo(id)
);

/* Inserimento dei dati di partenza. */
DELETE FROM utente;
DELETE FROM ruolo;
INSERT INTO ruolo (id, ruolo) VALUES (0, "Amministratore");
INSERT INTO ruolo (id, ruolo) VALUES (1, "Operatore");
INSERT INTO ruolo (id, ruolo) VALUES (2, "Viewer");
INSERT INTO utente (nome, password_utente, ruolo_id) VALUES ('Amministratore', 'fa838cb64417ac5d8eedc7112d54e11c', 0);
INSERT INTO utente (nome, password_utente, ruolo_id) VALUES ('Operatore', 'fa838cb64417ac5d8eedc7112d54e11c', 1);
INSERT INTO utente (nome, password_utente, ruolo_id) VALUES ('Viewer', 'fa838cb64417ac5d8eedc7112d54e11c', 2);

/* I permessi SELECT, INSERT, UPDATE, DELETE sono stati dati mediante MySQL Workbench, solo sul database 'gestionale'. */
DROP USER IF EXISTS application;
CREATE USER application IDENTIFIED BY 'Password&1';
GRANT SELECT, INSERT, UPDATE, DELETE ON gestionale.* TO application;