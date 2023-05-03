-- Crear una base de datos llamada form
create database form;
use form;

-- esta tendra las siguientes tablas
-- users, **Crear una validacion para que un usuario no pueda tener menos de 18 años
create table users (
	userID int primary key auto_increment,
    firstname varchar(100),
    lastname varchar(100),
    birthdate date,
    age int check (age>=18), 
    created_at timestamp
);

-- contact_form
create table contact_form (
	ID int primary key auto_increment,
    phoneNumber char(11),
    email varchar(100),
    message mediumtext,
    created_at timestamp
);

-- products
create table products (
	productID int primary key auto_increment,
    productName varchar(100),
    price decimal (10, 2),
    created_at timestamp
);

-- orders
create table orders (
	orderID int primary key auto_increment,
    productID int,
    created_at timestamp,
    foreign key (productID) references products(productID)
);

-- 1) Crear 4 datos falsos para cada tabla e insertarlos en sus respectivas tablas
INSERT INTO users (firstname, lastname, birthdate, age)
VALUES
('Yohan', 'Angulo', str_to_date('10-09-1998', '%d-%m-%Y'), 24),
('David', 'Useche', str_to_date('16-01-1967', '%d-%m-%Y'), 55),
('Erin', 'Angulo', str_to_date('17-09-1980', '%d-%m-%Y'), 42),
('Jose', 'Useche', str_to_date('10-05-1992', '%d-%m-%Y'), 30);

INSERT INTO contact_form (phoneNumber, email, message)
VALUES
('04129613339', 'anguloyohan@gmail.com', 'First message'),
('04129613338', 'daviduseche@gmail.com', 'Second message'),
('04129613337', 'anguloerin@gmail.com', 'Third message'),
('04129613336', 'joseuseche@gmail.com', 'Fourth message');

INSERT INTO products (productName, price)
VALUES
('Monitor', 30),
('Mouse', 7),
('Speakers', 30.50),
('Keyboad', 15.25);

INSERT INTO orders (productID)
VALUES
(1),
(1),
(3),
(4);

-- 2) Realizar un llamado que solo contenga el userID y nombre de cada usuario.
SELECT userID, firstname FROM users;

-- 3) Realizar un llamado donde solo se traiga a los usuarios mayores de 40 años
SELECT * FROM users WHERE age > 40;

-- 5) traer una relacion de cada orden con su producto
SELECT o.orderID, p.productName, o.created_at, p.price as 'pricePerUnit'
FROM
orders AS o
INNER JOIN
products AS p
ON o.productID = p.productID;

-- 6) eliminar todos los usuarios mayores a 50 años
DELETE FROM users WHERE age > 50;

-- 7) Actualizar todos los precios de los productos y darles un descuento del 15%
UPDATE products SET price = price * .85;





