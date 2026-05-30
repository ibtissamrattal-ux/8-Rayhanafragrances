
CREATE DATABASE IF NOT EXISTS u315291019_rayhana_db;
USE u315291019_rayhana_db;

CREATE TABLE users (
id INT AUTO_INCREMENT PRIMARY KEY,
email VARCHAR(191) UNIQUE NOT NULL,
password VARCHAR(255) NOT NULL,
full_name VARCHAR(100),
created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE products (
id INT AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(100),
price DECIMAL(10,2),
image VARCHAR(255)
);

CREATE TABLE cart (
id INT AUTO_INCREMENT PRIMARY KEY,
user_id INT,
product_id INT,
quantity INT DEFAULT 1
);

INSERT INTO products(name,price,image) VALUES
('Oud Royal',799,'assets/homme-oud-1.jpg'),
('Musk Élégance',699,'assets/homme-musk-1.jpg'),
('Floral Rose',650,'assets/femme-floral-1.jpg'),
('Vanille Gold',750,'assets/femme-vanille-1.jpg'),
('Unisexe Oud',820,'assets/unisexe-oud-1.jpg'),
('Unisexe Floral',730,'assets/unisexe-floral-1.jpg');