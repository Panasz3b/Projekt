drop database if exists bazaSklepProjekt;
create database bazaSklepProjekt;
use bazaSklepProjekt;

create table uzytkownicy (
    IdUzytkownika int PRIMARY KEY  not null auto_increment,
    nazwa varchar (255),
    haslo varchar(255)
);

create table produkty (
    IdProdukt int  PRIMARY KEY  not null auto_increment,
    nazwa varchar (255),
    opis text,
    obrz varchar (255)
);

INSERT INTO uzytkownicy (nazwa, haslo)
VALUES ("admin", "admin");


INSERT INTO produkty (nazwa, opis,obrz)
VALUES ("Masc", "TO JEST MASC","img\masc.jpg");

INSERT INTO produkty (nazwa, opis,obrz)
VALUES ("Woda", "TO JEST Woda","img\Woda.jpg");

INSERT INTO produkty (nazwa, opis,obrz)
VALUES ("Marchew", "TO JEST Marchew","img\Marchew.jpg");

INSERT INTO produkty (nazwa, opis,obrz)
VALUES ("Kurczak", "TO JEST Kurczak","img\Kurczak.jpg");

INSERT INTO produkty (nazwa, opis,obrz)
VALUES ("Energol", "TO JEST Energol","img\Energol.jpg");