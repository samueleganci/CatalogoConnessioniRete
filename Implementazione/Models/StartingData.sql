USE gestionale;

/* I permessi SELECT, INSERT, UPDATE, DELETE sono stati dati mediante MySQL Workbench, solo sul database 'gestionale'. */
CREATE USER application@localhost IDENTIFIED BY 'Password&1';

/* Inserimento dei primi 3 utenti per poter accedere al sito. */
INSERT INTO ruolo (id, ruolo) VALUES (0, "Amministratore");
INSERT INTO ruolo (id, ruolo) VALUES (1, "Operatore");
INSERT INTO ruolo (id, ruolo) VALUES (2, "Viewer");
INSERT INTO utente (nome, password_utente, ruolo_id) VALUES ("Amministratore", "Password&1", 0);
INSERT INTO utente (nome, password_utente, ruolo_id) VALUES ("Operatore", "Password&1", 1);
INSERT INTO utente (nome, password_utente, ruolo_id) VALUES ("Viewer", "Password&1", 2);