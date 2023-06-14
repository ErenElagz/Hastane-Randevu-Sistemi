CREATE DATABASE hastane;

CREATE TABLE randevu (
    id int PRIMARY AUTO_INCREMENT,
    name varchar(255),
    surname varchar(255),
    tc varchar(255),
    city varchar(255)
    department varchar(255)
    date varchar(255)
);

CREATE TABLE kullanıcılar (
    id int PRIMARY AUTO_INCREMENT,
    name varchar(255),
    password varchar(255),

);

INSERT INTO `kullanıcılar` (`id`, `name`, `password`,) VALUES (1, 'Eren', '123'),