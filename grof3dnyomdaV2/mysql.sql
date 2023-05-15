CREATE TABLE products(product_id int AUTO_INCREMENT PRIMARY KEY,
                   product_name varchar(50) not null UNIQUE,
                   product_price int(7) not null,
                   product_material varchar(4) not null,
                   product_color varchar(10) not null,
                   product_width int(20),
                   product_height int(20),
                   product_length int(20));
CREATE TABLE users(user_name varchar(40) PRIMARY KEY,
                   user_passwd varchar(100) NOT null UNIQUE,
                   user_firstname varchar(50) not null,
                   user_lastname varchar(30) not null,
                   user_phone varchar(11),
                   user_email varchar(40) not null);
CREATE TABLE message(message_id int AUTO_INCREMENT PRIMARY KEY,
                    message_username varchar(40),
                    message_product varchar(50),
                    message_message varchar(2023) not null,
                    message_datetime datetime,
                    FOREIGN key(message_username) REFERENCES users(user_name) on DELETE CASCADE);

CREATE TABLE package_point(package_point_id int AUTO_INCREMENT PRIMARY KEY,
                           package_point_postal_code int(4) not null,
                           package_point_city varchar(50) not null,
                           package_point_address varchar(110) not null);
CREATE TABLE sales(sales_id int AUTO_INCREMENT PRIMARY KEY,
                   sales_user varchar(40),
                   sales_datetime datetime, 
                   sales_product_id int,
                   sales_point_id int,
                   FOREIGN KEY(sales_user)REFERENCES users(user_name) on DELETE set null,
                   FOREIGN KEY(sales_product_id) REFERENCES products(product_id) on DELETE SET null,
                   FOREIGN KEY(sales_point_id) REFERENCES package_point(package_point_id) on DELETE set null);