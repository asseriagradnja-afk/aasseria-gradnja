CREATE DATABASE gradjevinska_firma;
USE gradjevinska_firma;

CREATE TABLE projekti (
  id INT AUTO_INCREMENT PRIMARY KEY,
  naziv VARCHAR(255) NOT NULL,
  opis TEXT NOT NULL,
  slika VARCHAR(255) NOT NULL
);

CREATE TABLE admini (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(50) NOT NULL,
  password VARCHAR(255) NOT NULL
);

-- admin / lozinka123
INSERT INTO admini (username, password) VALUES ('admin', MD5('lozinka123'));
