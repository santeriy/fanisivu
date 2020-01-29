create table pelaajat (
    id int primary key auto_increment,
    Nimi varchar(100) not null,
    Info varchar(100) not null
);

insert into pelaajat (Nimi, Info) values ('Nuppu','Kantaa aina joukkuetta. Tekee joka paikasta.');
insert into pelaajat (Nimi, Info) values ('Holden','Joukkueen paras pelaaja.');
insert into pelaajat (Nimi, Info) values ('Humble','Ei mihinkään..');
insert into pelaajat (Nimi, Info) values ('Isoisä','Huutelee aina kaljapäissää');