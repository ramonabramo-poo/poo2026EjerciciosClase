CREATE DATABASE IF NOT EXISTS curso_web;
USE curso_web;

CREATE TABLE IF NOT EXISTS alumnos (
    id_alumno INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL,
    curso VARCHAR(50) NOT NULL,
    nota DECIMAL(4,2)
);

INSERT INTO alumnos (nombre, curso, nota) VALUES 
('Jano', 'Desarrollo Web', 8.5),
('Julio', 'Sistemas', 7.2),
('Shabi', 'Bases de Datos', 9.0),
('Antonio', 'Redes', 6.8),
('Pablo', 'Desarrollo Web', 5.5),
('Hans', 'Ciberseguridad', 9.5);