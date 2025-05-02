create database mvc;
use mvc;
create table products(
id INT auto_increment primary key,
name varchar(100) not null,
price decimal(10,2) NOT NULL
)