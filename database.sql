CREATE DATABASE company;
USE company;
CREATE TABLE people(
    id int(11) auto_increment primary key,
    name varchar(30) not null,
    email varchar(75) not null
    );