create database FUT;
 use FUT;
 create table club(
    id int PRIMARY key AUTO_INCREMENT not null,
    name VARCHAR(50),
    logo VARCHAR (200),
    city VARCHAR(50),
    country VARCHAR(50)
    );
 

 create table  Nationality(
    id int PRIMARY key AUTO_INCREMENT not null,
    name VARCHAR(50),
    flage VARCHAR (200)
    );
insert into Nationality (name,flage) values ('moroco','https://flagpedia.net/data/flags/emoji/twitter/256x256/ma.png');

    create table players(
       id int PRIMARY key AUTO_INCREMENT not null,
       name varchar(50),
       position CHAR(5),
       status char(15),
       rating int not null,
       date_delat date,
       id_club int not null,
       id_nationality int not NULL,
       Foreign Key (id_club) REFERENCES club (id),
       Foreign Key (id_nationality) REFERENCES Nationality (id)
    ) ;
 
    create table footballplayer(
        id int not null PRIMARY key AUTO_INCREMENT,
        pace int not null,
        shooting int not null,
        passing int not null,
        dribbling int not null,
        defending int not null,
        physical int not null,
        id_player int not null,
        Foreign Key (id_player) REFERENCES players (id)
    );

    create table  golkeeperPlayer(
        id int not null PRIMARY key AUTO_INCREMENT,
        diving int not null,
        handling int not null,
        kicking int not null,
        reflexes int not null, 
        speed int not null,
        physical int not null,
        id_player int not null,
        Foreign Key (id_player) REFERENCES players (id)
    );
 show TABLES;

insert into club(
   VALUES
   (null,"Real Madrid","https://cdn.sofifa.net/meta/team/3468/120.png","Brazil","abdo"),
   (null,"Real Madrid","https://cdn.sofifa.net/meta/team/3468/120.png","Brazil","abdo"),
   (null,"Real Madrid","https://cdn.sofifa.net/meta/team/3468/120.png","Brazil","abdo")
);
SELECT * FROM club;
