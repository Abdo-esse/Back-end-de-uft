create database FUT;
 use FUT;
 create table club(
    id PRIMARY key AUTO_INCREMENT not null,
    name VARCHAR(50),
    image VARCHAR,
    city VARCHAR(50),
    country VARCHAR(50)
    )