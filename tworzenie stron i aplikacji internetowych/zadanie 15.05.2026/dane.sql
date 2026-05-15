

CREATE TABLE Stanowiska
(
    Id_stanowisko integer primary key auto_increment not null,
    Nazwa         varchar(40)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

CREATE TABLE Pracownicy
(
    Id_pracownika     integer primary key auto_increment not null,
    Nazwisko          varchar(50),
    Imie              varchar(40),
    Id_stanowisko     integer,
    Miasto            varchar(30),
    Data_zatrudnienia date,
    Wynagrodzenie     Decimal(10, 2),
    foreign key FK_STANOW_PRACOW (Id_stanowisko) references Stanowiska (Id_stanowisko)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

CREATE TABLE Dzialy
(
    Id_dzial integer primary key auto_increment not null,
    Nazwa    varchar(40)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

CREATE TABLE Ksiazki
(
    Sygnatura   integer primary key auto_increment not null,
    Tytul       varchar(100),
    Nazwisko    varchar(50),
    Imie        varchar(40),
    Wydawnictwo varchar(40),
    Miejsce_wyd varchar(40),
    Rok_wyd     integer,
    Objetosc_ks integer,
    Cena        Decimal(10, 2),
    Id_dzial    integer,
    foreign key FK_Dzialy_Ksiazki (Id_dzial) references Dzialy (Id_dzial)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

CREATE TABLE Czytelnicy
(
    Nr_czytelnika   integer primary key auto_increment not null,
    Nazwisko        varchar(35),
    Imie            varchar(15),
    Data_ur         date,
    Ulica           varchar(40),
    Kod             integer,
    Miasto          varchar(40),
    Data_zapisania  date,
    Data_skreslenia date,
    Nr_legitymacji  integer,
    Funkcja         enum ('PD','S'),
    Plec            enum ('K','M')
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

CREATE TABLE Wypozyczenia
(
    Nr_transakcji     integer primary key auto_increment not null,
    Sygnatura         integer                            not null,
    Id_pracownika     integer                            not null,
    Nr_czytelnika     integer                            not null,
    Data_wypozyczenia date                               not null,
    Data_zwrotu       date,
    foreign key FK_PRACOW_WYPOZ (Id_pracownika) references Pracownicy (Id_pracownika),
    foreign key FK_WYPOZ_Ksiazki (Sygnatura) references Ksiazki (Sygnatura),
    foreign key FK_CZYT_WYPOZ (Nr_czytelnika) references Czytelnicy (Nr_czytelnika)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

INSERT INTO Czytelnicy
VALUES (null, 'Adamowski', 'Franciszek', '1944-10-09', 'Orzechowa', '21500', 'Biała Podlaska', '2008-01-30', null,
        '12222', 'S', 'M');
INSERT INTO Czytelnicy
VALUES (null, 'Kowalski', 'Zygmunt', '1990-07-23', 'AL.1000-lecia', '21500', 'Biała Podlaska', '2007-09-02', null,
        '12123', 'S', 'M');
INSERT INTO Czytelnicy
VALUES (null, 'Kola', 'Mariusz', '1979-11-14', 'Moniuszki', '21500', 'Biała Podlaska', '2007-04-12', null, '12730', 'S',
        'M');
INSERT INTO Czytelnicy
VALUES (null, 'Szala', 'Rafał', '1999-01-24', 'Francuska', '21500', 'Biała Podlaska', '2006-05-15', null, '134271', 'S',
        'M');
INSERT INTO Czytelnicy
VALUES (null, 'Borowik', 'Kalina', '1972-09-09', 'Chełmska', '21500', 'Biała Podlaska', '2000-12-01', '2007-12-14',
        '12693', 'S', 'K');
insert into Czytelnicy
values (null, 'Kowalczuk', 'Ziemowit', '1989-04-14', 'Zygmunta Augusta', '21500', 'Biała Podlaska', '2003-04-12', null,
        '1067', 'PD', 'M');
INSERT INTO Czytelnicy
VALUES (null, 'Oledzki', 'Arek', '1979-04-13', 'Długa', '21500', 'Biała Podlaska', '2010-01-05', null, '1234', 'S',
        'M');
INSERT INTO Czytelnicy
VALUES (null, 'Adamowski', 'Paweł', '1990-11-14', 'Krzywa', '19500', 'Lublin', '2008-04-10', '2009-05-02', '1543', 'S',
        'M');
INSERT INTO Czytelnicy
VALUES (null, 'Borowińska', 'Katarzyna', '1965-06-23', 'Nowa', '19500', 'Gołdap', '2006-07-24', '2009-08-15', '1365',
        'S', 'K');
INSERT INTO Czytelnicy
VALUES (null, 'Doroszuk', 'Marek', '1981-12-14', 'Suwalska', '19500', 'Lublin', '2007-05-12', null, '2543', 'S', 'M');
INSERT INTO Czytelnicy
VALUES (null, 'Daniluk', 'Aleksandra', '1989-12-28', 'Daleka', '19500', 'Lublin', '2007-10-12', null, '4321', 'S', 'K');
INSERT INTO Czytelnicy
VALUES (null, 'Darecki', 'Adam', '1988-11-14', 'Sosnowa', '21500', 'Biała Podlaska', '2006-12-12', null, '1267', 'S',
        'M');
INSERT INTO Czytelnicy
VALUES (null, 'Kowalski', 'Marek', '1983-11-14', 'Jodłowa', '21500', 'Biała Podlaska', '2006-03-12', '2009-03-19',
        '1268', 'S', 'M');
INSERT INTO Czytelnicy
VALUES (null, 'Borowińska', 'Katarzyna', '1956-05-14', 'Nowa', '21500', 'Biała Podlaska', '2009-12-01', null, '1269',
        'S', 'K');
INSERT INTO Czytelnicy
VALUES (null, 'Ziemowit', 'Marek', '1979-11-14', 'Moniuszki', '21500', 'Biała Podlaska', '2006-04-12', null, '1270',
        'S', 'M');
INSERT INTO Czytelnicy
VALUES (null, 'Pawelec', 'Rafał', '1965-11-14', 'Kosynierów', '21040', 'Piaski', '2008-05-12', null, '1271', 'S', 'M');
INSERT INTO Czytelnicy
VALUES (null, 'Ziemowit', 'Rafał', '1955-03-24', 'Sidorska', '21048', 'Lublin', '2008-05-12', null, '1271', 'S', 'M');

INSERT INTO Dzialy
VALUES (null, 'Informatyka');
INSERT INTO Dzialy
VALUES (null, 'Ekonomia');
INSERT INTO Dzialy
VALUES (null, 'Fantastyka');
INSERT INTO Dzialy
VALUES (null, 'Historia');
INSERT INTO Dzialy
VALUES (null, 'Prawo');
INSERT INTO Dzialy
VALUES (null, 'Literatura dla dzieci i młodzieży');
INSERT INTO Dzialy
VALUES (null, 'Literatura');
INSERT INTO Dzialy
VALUES (null, 'Medyczne');
INSERT INTO Dzialy
VALUES (null, 'Przyrodnicze');

INSERT INTO Ksiazki
VALUES (null, 'Fotografowanie aparatem cyfrowym - samouczek', 'Krzymowski', 'Bogdan', 'Help', 'Warszawa', 2010, 484,
        25.90, 1);
INSERT INTO Ksiazki
VALUES (null, 'Strategia błękitnego oceanu', 'Mauborgne', 'Rene', 'MT Biznes', 'Warszawa', 2007, 336, 61.90, 2);
INSERT INTO Ksiazki
VALUES (null, 'Metro 2033', 'Glukhovsky', 'Dmitry', 'Insignis Media', 'Warszawa', 2010, 592, 37.90, 3);
INSERT INTO Ksiazki
VALUES (null, 'Piękno Pacyfiku', 'Sledge', 'Eugene B.', 'Magnum', 'Warszawa', 2010, 328, 37.99, 7);
INSERT INTO Ksiazki
VALUES (null, 'Prawo pracy', 'Florek', 'Ludwik', 'C.H. Beck', 'Warszawa', 2009, 370, 42.49, 5);
INSERT INTO Ksiazki
VALUES (null, 'Uwarunkowania i plany rozwoju turystyki', 'Młynarczyk', 'Zygmunt', 'Wydawnictwo Naukowe UAM', 'Warszawa',
        '2008', '100', '49', '2');
INSERT INTO Ksiazki
VALUES (null, 'Ekspresja receptorów sterydowych', 'Skrzypczak', 'Maciej', 'Wydawnictwo Naukowe UAM', 'Warszawa', '2008',
        '121', '115', '1');
INSERT INTO Ksiazki
VALUES (null, 'Adobe Flash i PHP', 'Keefe', 'Matthew', 'Helion', 'Warszawa', '2010', '496', '71.10', '1');
INSERT INTO Ksiazki
VALUES (null, 'Pancerni korsarze Kriegsmarine', 'Kaczmarek', 'Rafał', 'Attyka', 'Wrocław', '2010', '268', '89.90', '7');
INSERT INTO Ksiazki
VALUES (null, 'Kodeks ruchu drogowego', 'Haliński', 'Wiesław', 'Muza', 'Poznań', '2010', '236', '79.90', '5');
INSERT INTO Ksiazki
VALUES (null, 'Pan Tadeusz', 'Mickiewicz', 'Adam', 'PWN', 'Warszawa', '1945', '300', '70', '7');
INSERT INTO Ksiazki
VALUES (null, 'Programowanie', 'Matejek', 'Roman', 'PWN', 'Warszawa', '1995', '100', '79', '1');
INSERT INTO Ksiazki
VALUES (null, 'Grafika', 'Malas', 'Grzegorz', 'PWN', 'Warszawa', '1999', '105', '155', '1');
INSERT INTO Ksiazki
VALUES (null, 'Programowanie obiektowe', 'Matejek', 'Roman', 'PWN', 'Warszawa', '1995', '100', '79', '1');
INSERT INTO Ksiazki
VALUES (null, '100 największych osiągnięć medycyny', 'Eugene', 'Straus W.', 'Świat Książki', 'Poznań', 2003, 491, 112,
        8);
INSERT INTO Ksiazki
VALUES (null, 'Atlas Ptaków', 'Hecker', 'Frank', 'RM', 'Kraków', 1999, 189, 72, 9);
INSERT INTO Ksiazki
VALUES (null, 'Geografia Fizyczna Polski', 'Richling', 'Andrzej', 'PWN', 'Warszawa', 2005, 200, 115, 9);
INSERT INTO Ksiazki
VALUES (null, 'Podstawy ekonomii', 'Kwiatkowski', 'Eugeniusz', 'PWN', 'Warszawa', 2007, 553, '69.90', 2);

INSERT INTO Stanowiska
VALUES (null, 'Bibliotekarz');
INSERT INTO Stanowiska
VALUES (null, 'Księgowy');
INSERT INTO Stanowiska
VALUES (null, 'Kierownik');
INSERT INTO Stanowiska
VALUES (null, 'Dyrektor');
INSERT INTO Stanowiska
VALUES (null, 'Konserwator');

INSERT INTO Pracownicy
VALUES (null, 'Kowalczuk', 'Jan', 1, 'Lublin', '2007-05-05', 1700);
INSERT INTO pracownicy
VALUES (null, 'Czuj', 'Krystyna', 2, 'Lublin', '2006-04-02', 2850);
INSERT INTO pracownicy
VALUES (null, 'Brzeski', 'Mateusz', 3, 'Lublin', '2006-05-07', 2900);
INSERT INTO pracownicy
VALUES (null, 'Darecki', 'Antoni', 4, 'Lublin', '2007-05-28', 2700);
INSERT INTO pracownicy
VALUES (null, 'Molek', 'Anna', 5, 'Lublin', '2008-09-11', 1200);
INSERT INTO pracownicy
VALUES (null, 'Potępa', 'Krzysztof', '1', 'Lublin', '2000-07-24', 9000);
INSERT INTO pracownicy
VALUES (null, 'Potępa', 'Wojciech', '1', 'Warszawa', '2008-08-02', 1900);
INSERT INTO pracownicy
VALUES (null, 'Tomaszewski', 'Radosław', '1', 'Lublin', '2005-12-02', 2100);
INSERT INTO pracownicy
VALUES (null, 'Ignatowicz', 'Emilia', '1', 'Warszawa', '2000-07-24', 2000);
INSERT INTO pracownicy
VALUES (null, 'Potępa', 'Mariusz', '1', 'Lublin', '2006-02-13', 1700);
INSERT INTO pracownicy
VALUES (null, 'Borowik', 'Lukasz', '1', 'Lublin', '1999-03-14', 1900);
INSERT INTO pracownicy
VALUES (null, 'Malinowski', 'Dariusz', '2', 'Biała Podlaska', '2004-05-24', 3000);
INSERT INTO pracownicy
VALUES (null, 'Zielińska', 'Danuta', '1', 'Biała Podlaska', '1999-05-06', 2000);
INSERT INTO pracownicy
VALUES (null, 'Makarski', 'Tomasz', '1', 'Lublin', '2000-07-07', 2000);
INSERT INTO pracownicy
VALUES (null, 'Zielonka', 'Mateusz', '1', 'Biała Podlaska', '2009-03-14', 2000);

INSERT INTO Wypozyczenia
VALUES (null, 11, 14, 2, '2009-12-05', '2010-03-22');
INSERT INTO Wypozyczenia
VALUES (null, 12, 7, 1, '2009-10-09', '2010-01-16');
INSERT INTO Wypozyczenia
VALUES (null, 9, 7, 3, '2009-05-01', '2009-09-04');
INSERT INTO Wypozyczenia
VALUES (null, 2, 3, 11, '2006-12-12', '2007-12-14');
INSERT INTO Wypozyczenia
VALUES (null, 3, 3, 4, '2009-01-09', '2009-04-05');
INSERT INTO Wypozyczenia
VALUES (null, 1, 14, 11, '2010-03-03', null);
INSERT INTO Wypozyczenia
VALUES (null, 1, 6, 2, '2009-12-06', null);
INSERT INTO Wypozyczenia
VALUES (null, 15, 6, 3, '2009-10-14', '2009-12-05');
INSERT INTO Wypozyczenia
VALUES (null, 13, 8, 4, '2010-05-09', null);
INSERT INTO Wypozyczenia
VALUES (null, 10, 14, 5, '2009-05-05', null);
INSERT INTO Wypozyczenia
VALUES (null, 10, 11, 5, '2009-06-14', null);
INSERT INTO Wypozyczenia
VALUES (null, 8, 11, 2, '2009-11-05', null);
INSERT INTO Wypozyczenia
VALUES (null, 9, 3, 3, '2009-12-22', null);
INSERT INTO Wypozyczenia
VALUES (null, 3, 11, 4, '2010-01-08', null);
INSERT INTO Wypozyczenia
VALUES (null, 3, 13, 11, '2010-03-05', null);
INSERT INTO Wypozyczenia
VALUES (null, 13, 13, 5, '2009-12-05', '2010-03-22');
INSERT INTO Wypozyczenia
VALUES (null, 15, 13, 3, '2009-10-09', '2010-01-16');
INSERT INTO Wypozyczenia
VALUES (null, 9, 1, 3, '2009-05-01', '2009-09-04');
INSERT INTO Wypozyczenia
VALUES (null, 2, 1, 5, '2009-12-12', null);
INSERT INTO Wypozyczenia
VALUES (null, 6, 1, 4, '2009-01-09', '2009-04-05');
INSERT INTO Wypozyczenia
VALUES (null, 4, 11, 1, '2010-03-03', null);
INSERT INTO Wypozyczenia
VALUES (null, 1, 9, 2, '2009-12-06', null);
INSERT INTO Wypozyczenia
VALUES (null, 15, 9, 3, '2009-11-14', '2009-12-05');
INSERT INTO Wypozyczenia
VALUES (null, 13, 9, 4, '2010-01-22', null);
INSERT INTO Wypozyczenia
VALUES (null, 10, 9, 5, '2009-12-14', null);
INSERT INTO Wypozyczenia
VALUES (null, 10, 8, 6, '2009-09-30', null);
INSERT INTO Wypozyczenia
VALUES (null, 7, 8, 2, '2008-11-05', '2008-11-05');
INSERT INTO Wypozyczenia
VALUES (null, 9, 8, 3, '2009-12-22', '2010-01-05');
INSERT INTO Wypozyczenia
VALUES (null, 1, 14, 3, '2010-01-08', null);
INSERT INTO Wypozyczenia
VALUES (null, 3, 7, 6, '2010-03-05', null);
INSERT INTO Wypozyczenia
VALUES (null, 9, 1, 1, '2009-11-05', '2010-03-22');
INSERT INTO Wypozyczenia
VALUES (null, 12, 1, 1, '2009-11-09', '2010-01-16');
INSERT INTO Wypozyczenia
VALUES (null, 9, 10, 3, '2009-05-01', '2009-09-04');
INSERT INTO Wypozyczenia
VALUES (null, 2, 10, 5, '2009-12-16', null);
INSERT INTO Wypozyczenia
VALUES (null, 3, 10, 6, '2009-02-09', '2009-04-05');
INSERT INTO Wypozyczenia
VALUES (null, 4, 13, 1, '2010-03-03', null);
INSERT INTO Wypozyczenia
VALUES (null, 1, 7, 2, '2009-12-06', null);
INSERT INTO Wypozyczenia
VALUES (null, 15, 7, 3, '2009-10-14', '2009-12-05');
INSERT INTO Wypozyczenia
VALUES (null, 13, 7, 4, '2010-05-09', null);
INSERT INTO Wypozyczenia
VALUES (null, 10, 7, 5, '2009-05-05', null);
INSERT INTO Wypozyczenia
VALUES (null, 10, 11, 1, '2009-06-14', null);
INSERT INTO Wypozyczenia
VALUES (null, 8, 11, 2, '2009-11-05', null);
INSERT INTO Wypozyczenia
VALUES (null, 9, 11, 3, '2009-12-22', null);
INSERT INTO Wypozyczenia
VALUES (null, 3, 11, 4, '2010-01-08', null);
INSERT INTO Wypozyczenia
VALUES (null, 3, 11, 5, '2010-03-05', null);
INSERT INTO Wypozyczenia
VALUES (null, 13, 8, 5, '2009-12-05', '2010-03-22');
INSERT INTO Wypozyczenia
VALUES (null, 15, 8, 1, '2009-10-09', '2010-01-16');
INSERT INTO Wypozyczenia
VALUES (null, 9, 8, 3, '2009-05-01', '2009-09-04');
INSERT INTO Wypozyczenia
VALUES (null, 2, 11, 5, '2009-12-12', null);
INSERT INTO Wypozyczenia
VALUES (null, 6, 11, 4, '2009-01-09', '2009-04-05');
INSERT INTO Wypozyczenia
VALUES (null, 1, 11, 1, '2010-03-03', null);
INSERT INTO Wypozyczenia
VALUES (null, 2, 11, 2, '2009-12-06', null);
INSERT INTO Wypozyczenia
VALUES (null, 1, 11, 3, '2009-11-14', '2009-12-05');
INSERT INTO Wypozyczenia
VALUES (null, 5, 11, 4, '2010-01-22', null);
INSERT INTO Wypozyczenia
VALUES (null, 13, 13, 4, '2009-12-14', null);
INSERT INTO Wypozyczenia
VALUES (null, 10, 13, 6, '2009-09-30', null);
INSERT INTO Wypozyczenia
VALUES (null, 7, 13, 3, '2008-11-05', '2008-11-05');
INSERT INTO Wypozyczenia
VALUES (null, 7, 13, 3, '2009-12-22', '2010-01-05');
INSERT INTO Wypozyczenia
VALUES (null, 3, 13, 3, '2010-01-08', null);
INSERT INTO Wypozyczenia
VALUES (null, 3, 13, 7, '2010-03-05', null);