CREATE TABLE products(
    product_name varchar(100) PRIMARY KEY,
    product_img VARCHAR(100) NOT NULL,
    product_price int(7) not null,
    product_material varchar(4) not null,
    product_color varchar(10) not null,
    product_width int(20),
    product_height int(20),
    product_length int(20)
);

CREATE TABLE users(
    user_name varchar(40) PRIMARY KEY,
    user_passwd varchar(100) NOT null,
    user_firstname varchar(50) not null,
    user_lastname varchar(30) not null,
    user_phone varchar(11),
    user_email varchar(40) not null
);
CREATE TABLE postal_codes(
    postal_code INT(4) PRIMARY KEY,
    postal_city VARCHAR(100) NOT NULL
);

CREATE TABLE messages(
    message_id int AUTO_INCREMENT PRIMARY KEY,
    message_username varchar(40),
    message_product varchar(50),
    message_message varchar(2023) not null,
    message_datetime datetime,
    FOREIGN key(message_username) REFERENCES users(user_name) on DELETE CASCADE,
    FOREIGN key(message_product) REFERENCES products(product_name) on DELETE CASCADE
);

CREATE TABLE package_points(
    package_point_id int AUTO_INCREMENT PRIMARY KEY,
    package_point_postal_code int(4) not null,
    package_point_address varchar(110) not null,
    FOREIGN KEY (package_point_postal_code) REFERENCES postal_codes(postal_code) ON DELETE CASCADE
);

CREATE TABLE orders(
    order_number INT(10) PRIMARY KEY AUTO_INCREMENT,
    user_name VARCHAR(40) NOT NULL,
    total INT(10) NOT NULL, 
    package_point INT,
    email VARCHAR(100),
    firstName VARCHAR(100),
    lasName VARCHAR(100),
    completed int(1),
    FOREIGN KEY(package_point) REFERENCES package_points(package_point_id) ON DELETE CASCADE
);
CREATE TABLE orderedProducts(
    order_number INT(10),
    product_name VARCHAR(100),
    product_count INT(10),
    FOREIGN KEY (order_number) REFERENCES orders(order_number) ON DELETE CASCADE,
    FOREIGN KEY (product_name ) REFERENCES products(product_name) ON DELETE CASCADE
);

INSERT INTO `postal_codes`(`postal_code`, `postal_city`) VALUES (5600,'Békéscsaba');
INSERT INTO `postal_codes`(`postal_code`, `postal_city`) VALUES (1085,'Budapest VIII. ');
INSERT INTO `postal_codes`(`postal_code`, `postal_city`) VALUES (1149,'Budapest XIV.');
INSERT INTO `postal_codes`(`postal_code`, `postal_city`) VALUES (1062,'Budapest VI.');
INSERT INTO `postal_codes`(`postal_code`, `postal_city`) VALUES (6000,'Kecskemét');
INSERT INTO `postal_codes`(`postal_code`, `postal_city`) VALUES (2370,'Dabas');


INSERT INTO `package_points`(`package_point_postal_code`, `package_point_address`) VALUES (5600, 'Andrássy út 37-43');
INSERT INTO `package_points`(`package_point_postal_code`, `package_point_address`) VALUES (5600, 'Tesco, Szarvasi út 68');
INSERT INTO `package_points`(`package_point_postal_code`, `package_point_address`) VALUES (5600, 'Corvin u 41');

INSERT INTO `package_points`(`package_point_postal_code`, `package_point_address`) VALUES (1085, 'Blaha Lujza tér 5');
INSERT INTO `package_points`(`package_point_postal_code`, `package_point_address`) VALUES (1149, 'Pillangó u. 15');
INSERT INTO `package_points`(`package_point_postal_code`, `package_point_address`) VALUES (1062, 'Westend Váci út 3');

INSERT INTO `package_points`(`package_point_postal_code`, `package_point_address`) VALUES (2370, 'Iskola u. 1/A');
INSERT INTO `package_points`(`package_point_postal_code`, `package_point_address`) VALUES (2370, 'ALDI Dabas, domb út 1');

INSERT INTO `package_points`(`package_point_postal_code`, `package_point_address`) VALUES (6000, 'Izski út 12');
INSERT INTO `package_points`(`package_point_postal_code`, `package_point_address`) VALUES (6000, 'Március 15. u. 5');
INSERT INTO `package_points`(`package_point_postal_code`, `package_point_address`) VALUES (6000, 'Korona u. 2 (Malom mozi)');




