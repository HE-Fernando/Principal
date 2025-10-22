CREATE DATABASE productos_db CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE productos_db;

CREATE TABLE productos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    categoria VARCHAR(50) NOT NULL,
    precio DECIMAL(10,2) NOT NULL,
    stock INT NOT NULL
);

INSERT INTO productos (nombre, categoria, precio, stock) VALUES
('Laptop Dell', 'Electrónica', 45000, 5),
('Mouse Logitech', 'Electrónica', 1500, 25),
('Teclado Mecánico', 'Electrónica', 8000, 15),
('Remera Nike', 'Ropa', 3500, 50),
('Pantalón Levis', 'Ropa', 12000, 30),
('Zapatillas Adidas', 'Ropa', 25000, 20),
('Arroz 1kg', 'Alimentos', 800, 100),
('Fideos', 'Alimentos', 600, 150),
('Aceite', 'Alimentos', 1200, 80),
('Lámpara LED', 'Hogar', 2500, 40),
('Silla Gamer', 'Hogar', 35000, 8),
('Monitor 24 pulgadas', 'Electrónica', 55000, 3);