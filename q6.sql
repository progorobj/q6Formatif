DROP DATABASE IF EXISTS examen;
CREATE DATABASE examen;
USE examen;

CREATE TABLE Personne (
                         Matricule INT NOT NULL UNIQUE PRIMARY KEY,
                         Prenom VARCHAR(255) NOT NULL,
                         Nom VARCHAR(255) NOT NULL,
                         Tache TEXT
);


INSERT INTO Personne (Matricule, Prenom, Nom, Tache)
VALUES (
        '10234',
        'Alice',
        'Merveilles',
        'Programmeure pour le robot assigné au triage des paquets'
       );

INSERT INTO Personne (Matricule, Prenom, Nom, Tache)
VALUES (
           '10456',
           'Bob',
           'Gratton',
           'Mécanicien des convoyeurs de l\'entrepôt'
       );

INSERT INTO Personne (Matricule, Prenom, Nom, Tache)
VALUES (
           '10678',
           'Eve',
           'Secret',
           'Responsable des commandes de produits'
       );



