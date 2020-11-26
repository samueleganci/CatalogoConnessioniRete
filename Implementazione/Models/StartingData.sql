USE gestionale;

/* I permessi SELECT, INSERT, UPDATE, DELETE sono stati dati mediante MySQL Workbench, solo sul database 'gestionale'. */
CREATE USER application@localhost IDENTIFIED BY 'Password&1';

/* Inserimento dei primi 3 utenti per poter accedere al sito. */
INSERT INTO ruolo (id, ruolo) VALUES (0, "Amministratore");
INSERT INTO ruolo (id, ruolo) VALUES (1, "Operatore");
INSERT INTO ruolo (id, ruolo) VALUES (2, "Viewer");
INSERT INTO utente (nome, password_utente, ruolo_id) VALUES ('Amministratore', 'fa838cb64417ac5d8eedc7112d54e11c', 0);
INSERT INTO utente (nome, password_utente, ruolo_id) VALUES ('Operatore', 'fa838cb64417ac5d8eedc7112d54e11c', 1);
INSERT INTO utente (nome, password_utente, ruolo_id) VALUES ('Viewer', 'fa838cb64417ac5d8eedc7112d54e11c', 2);
INSERT INTO cavo (cavo) VALUES ("Ethernet");
INSERT INTO cavo (cavo) VALUES ("RJ45");
INSERT INTO cavo (cavo) VALUES ("Cavo coassiale");
INSERT INTO dispositivo (dispositivo) VALUES ("Stampante BROTHER");
INSERT INTO dispositivo (dispositivo) VALUES ("PC Lenovo");
INSERT INTO dispositivo (dispositivo) VALUES ("NAS");
INSERT INTO switch (posizione, modello, etichetta, numero_porte) VALUES ("Aula 1", "Cisco", "Etichetta1", 12);
INSERT INTO switch (posizione, modello, etichetta, numero_porte) VALUES ("Aula 2", "Cisco", "Etichetta2", 24);
INSERT INTO switch (posizione, modello, etichetta, numero_porte) VALUES ("Aula 3", "Cisco", "Etichetta3", 24);
INSERT INTO collegamento VALUES (1, 0, 1, 1);
INSERT INTO collegamento VALUES (1, 1, 2, 2);
INSERT INTO collegamento VALUES (1, 2, 3, 3);
INSERT INTO collegamento VALUES (2, 0, 1, 1);
INSERT INTO collegamento VALUES (2, 1, 2, 2);
INSERT INTO collegamento VALUES (2, 2, 3, 3);
INSERT INTO collegamento VALUES (1, 0, 1, 1);
INSERT INTO collegamento VALUES (1, 1, 2, 2);
INSERT INTO collegamento VALUES (1, 2, 3, 3);