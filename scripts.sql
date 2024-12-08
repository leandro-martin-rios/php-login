CREATE DATABASE login_db;

USE login_db;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);

-- Inserta un usuario de prueba (con contraseña sin encriptar)
INSERT INTO users (username, password) VALUES ('admin', '1234');