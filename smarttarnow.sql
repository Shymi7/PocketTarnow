-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 15 Kwi 2019, 20:49
-- Wersja serwera: 10.1.37-MariaDB
-- Wersja PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `smarttarnow`
--

CREATE DATABASE `smarttarnow`;
USE `smarttarnow`;


-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `atrakcje`
--

CREATE TABLE `atrakcje` (
  `id_atrakcji` int(11) NOT NULL,
  `kategoria` text COLLATE utf8_polish_ci NOT NULL,
  `tytul` text COLLATE utf8_polish_ci NOT NULL,
  `opis` text COLLATE utf8_polish_ci NOT NULL,
  `sciezka` text COLLATE utf8_polish_ci NOT NULL,
  `linka` text COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `atrakcje`
--

INSERT INTO `atrakcje` (`id_atrakcji`, `kategoria`, `tytul`, `opis`, `sciezka`, `linka`) VALUES
(2, 'history', 'Kamienica Ratajewiczowska', 'Najstarsza tarnowska kamienica mieszcząca się pod adresem Rynek 5.\r\n\r\nOd 1992 pełni funkcję siedziby Tarnowskiego Centrum Kultury.', 'img/atrakcje/at2.jpg', 'https://www.google.com/maps/place/Rynek+5,+33-100+Tarn%C3%B3w/@50.0121759,20.9856213,17z/data=!3m1!4b1!4m8!1m2!2m1!1srynek+5!3m4!1s0x473d84aa8b8fdd81:0x51626ff753e09af0!8m2!3d50.0121759!4d20.98781'),
(3, 'history', 'Muzeum Diecezjalne w Tarnowie', 'Najstarsze muzeum diecezjalne w Polsce założone 25 października 1888 roku przez ówczesnego rektora tarnowskiego seminarium duchownego ks. Józefa Bąbę.\r\n', 'img/atrakcje/at3.jpg', 'https://www.google.com/maps/place/plac+Katedralny+6,+33-100+Tarn%C3%B3w/@50.0128225,20.9847426,17z/data=!3m1!4b1!4m5!3m4!1s0x473d83558896da8f:0x134b8279f620d7da!8m2!3d50.0128225!4d20.9869313'),
(4, 'youth', 'Park Strzelecki', 'Park miejski w Tarnowie, w którym znajduje się Mauzoleum generała Józefa Bema. Starodrzew w parku jest pomnikiem przyrody. W parku wytyczono ścieżkę przyrodniczo-dydaktyczną z przystankami przy najciekawszych gatunkach roślin.', 'img/atrakcje/at4.jpg', 'https://www.google.com/maps/place/Park+Strzelecki/@50.0196939,20.982964,17z/data=!3m1!4b1!4m5!3m4!1s0x473d83512b9b5167:0x1fa2137f44000b65!8m2!3d50.0196939!4d20.9851527'),
(5, 'youth', 'Park Trampolin Ninja Jump', 'Park Trampolin Ninja Jump to miejsce, które pomoże ci się odprężyć, dostarczy niezapomnianej rozrywki i zapewni dawkę niezbędnej aktywności fizycznej. Poprzez ruch na trampolinach dzieciaki zyskują pewność siebie i większe czucie własnego ciała, zaś dorośli na nowo odkryją w sobie dziecko . W Ninja Jump czeka na Was moc atrakcji: arena z masą trampolin dających wiele różnych możliwości ćwiczeń i akrobacji,skośne trampoliny na ścianach, street jump – pas do nauki kombinacji trików, strefa kosza, climb pegboard, tor ninja, basen z gąbkami.', 'img/atrakcje/at5.jpg', 'https://www.google.com/maps/place/Park+Trampolin+Ninja+Jump/@49.9987171,20.9848104,17z/data=!3m1!4b1!4m5!3m4!1s0x473d9b4c4025f7f3:0x5e99b79448572e70!8m2!3d49.9987137!4d20.9869991'),
(6, 'youth', 'Park Trampolin Fly Park', 'Park Trampolin Ninja Jump to miejsce, które pomoże ci się odprężyć, dostarczy niezapomnianej rozrywki i zapewni dawkę niezbędnej aktywności fizycznej. Poprzez ruch na trampolinach dzieciaki zyskują pewność siebie i większe czucie własnego ciała, zaś dorośli na nowo odkryją w sobie dziecko . W Ninja Jump czeka na Was moc atrakcji: arena z masą trampolin dających wiele różnych możliwości ćwiczeń i akrobacji,skośne trampoliny na ścianach, street jump – pas do nauki kombinacji trików, strefa kosza, climb pegboard, tor ninja, basen z gąbkami.', 'img/atrakcje/at6.jpg', 'https://www.google.com/maps/place/FlyPark/@50.0346925,21.0023943,17z/data=!3m1!4b1!4m5!3m4!1s0x473d833456bffffd:0xd68804c9e2b09f00!8m2!3d50.0346891!4d21.004583'),
(7, 'kids', 'Centrum Zabaw Simba', 'Anglojęzyczny Klub Malucha Happy.SiMBA jest pierwszym w Tarnowie i okolicy miejscem, gdzie dzieci w wieku od dwóch do sześciu lat mogą brać udział w zabawach i zajęciach prowadzonych wyłącznie w języku angielskim.', 'img/atrakcje/at7.jpg', 'https://www.google.com/maps/place/Centrum+dla+Dzieci+SiMBA/@50.0123422,20.9711114,17z/data=!3m1!4b1!4m5!3m4!1s0x473d83544ccc33b5:0xf43beb4c6918d408!8m2!3d50.0123388!4d20.9733001'),
(8, 'kids', 'Fontanna z Układem Słonecznym', 'Niedaleko dworca kolejowego i Plant Kolejowych najnowsza atrakcja dla najmłodszych – fontanna ze słońcem i układem słonecznym. Gwiazda wykonana została ze szkła i stali, a na stalowych orbitach umieszczono granitowe planety. Napędzane strumieniem wody, niczym prawdziwe ciała niebieskie wirują wokół własnej osi. Fontanna jest oczywiście iluminowana -zatem warto tu przyjść wieczorem, by w pełnej krasie obejrzeć niezwykłe widowisko.', 'img/atrakcje/at8.jpg', 'https://www.google.com/maps/place/Fontanna+z+Uk%C5%82adem+S%C5%82onecznym/@50.0083818,20.9732298,17z/data=!3m1!4b1!4m5!3m4!1s0x473d84af1ae0a477:0x9641530a3f6cbc9e!8m2!3d50.0083784!4d20.9754184'),
(9, 'fun', 'Park Linowy Szara Sowa', 'Park linowy trzy rodzaje tras linowych, czyli zawieszonych między drzewami, na wysokości kilku metrów nad ziemią systemów przeszkód i zjazdów tyrolskich. Przed wejściem na trasę każdy zapoznaje się z regulaminem, otrzymuje specjalistyczny sprzęt i przechodzi szkolenie na zawieszonym nisko nad ziemią odcinku treningowym. Poznaje wówczas zasady posługiwania się sprzętem asekuracyjnym oraz ma możliwość przekonania się o własnym bezpieczeństwie i nabrania pewności siebie. ', 'img/atrakcje/at9.jpg', 'https://www.google.com/maps?q=park+linowy+szara+sowa+zawada&um=1&ie=UTF-8&sa=X&ved=0ahUKEwiaurSR4NDhAhVkoYsKHa3BC70Q_AUIDigB'),
(10, 'fun', 'Akuku Kawa i Zabawa', 'Akuku Kawa i Zabawa to sala zabaw oraz klubokawiarnia gdzie dzieci mogą oddać się szalonej zabawie, a rodzice wypić ciepłą kawę.', 'img/atrakcje/at10.jpg', 'https://www.google.com/maps/place/Akuku+Kawa+i+Zabawa/@50.0003887,20.9095684,13z/data=!4m8!1m2!2m1!1splac+zabaw+tarnow!3m4!1s0x0:0x74734b61cf3792e8!8m2!3d50.000995!4d20.9573758'),
(11, 'youth', 'Tarnowskie Centrum Kultury', 'Instytucja kulturalna miasta Tarnowa, powstała w 1992 roku w wyniku przekształcenia, przez Radę Miejską, dotychczasowego Tarnowskiego Ośrodka Kultury. Obecna siedziba TCK mieści się w kamienicy Ratajewiczowskiej (Rynek 5).', 'img/atrakcje/at11.jpg', 'https://www.google.com/maps?q=tarnowskie+centrum+kultury+tarnow&um=1&ie=UTF-8&sa=X&ved=0ahUKEwiO-7bcz9HhAhUPpIsKHV3DA3IQ_AUIDigB'),
(12, 'kids', 'Miejska Biblioteka Publiczna', 'Znajdziecie tu wiele interesujących ksiązek. Jest to najtarsza biblioteka w Tarnowie i okolicach', 'img/atrakcje/at12.jpg', 'https://www.google.com/maps/place/Miejska+Biblioteka+Publiczna.+Oddzia%C5%82+dla+dzieci+i+m%C5%82odzie%C5%BCy/@50.011911,20.9666929,15z/data=!4m8!1m2!2m1!1sbiblioteka+tarnow+oddzial+dla+dzieci+i+mlodziezy!3m4!1s0x473d84aa28176a9f:0xbeb8d0d7fc01cc50!8m2!3d50.0120621!4d20.9832966'),
(13, 'kids', 'Warsztaty Robotico', 'Warsztaty podczas których tatusiowie z pociechami będą się bawić, uczyć i wspólnie spędzać czas. Uczestników przeniesiemy do świata z klocków LEGO, gdzie każdy będzie mógł pod czujnym okiem instruktorów zbudować i zaprogramować własnego robota!Warsztaty poprowadzą pracownicy firmy ROBOTICO z Tarnowa. \r\n\r\nDla młodszych dzieci przewidujemy wspólne, tematyczne budowanie z klocków LEGO np. miast czy statków kosmicznych.', 'img/atrakcje/at13.jpg', 'https://www.google.com/maps/place/Robotico.pl/@50.0121011,20.983652,17z/data=!3m1!4b1!4m5!3m4!1s0x473d84a7f62e660b:0xe17e27428addf194!8m2!3d50.0121011!4d20.9858407'),
(14, 'youth', 'Państwowa Wyższa Szkoła Zawodowa w Tarnowie', 'publiczna uczelnia typu zawodowego, utworzona na podstawie Rozporządzenia Rady Ministrów z dnia 19 maja 1998 roku, jako pierwsza w kraju uczelnia zawodowa nowego typu kształcąca na poziomie licencjackim i inżynierskim', 'img/atrakcje/at14.jpg', 'https://www.google.com/maps?q=pwsz+tarnow&um=1&ie=UTF-8&sa=X&ved=0ahUKEwj2yZ_n0dHhAhUBposKHZI_Bi8Q_AUIDigB'),
(17, 'history', 'Dom Mikołajowski w Tarnowie', 'Budynek przy placu Katedralnym 5. Zbudowany na murze miejskim w 1524 roku przez Jana Mikołajowskiego stanowi jeden z najstarszych budynków Tarnowa. Pierwotnie użytkowany przez duchowieństwo, później jako pomieszczenie dla szkoły i kolonia akademicka. Obecnie stanowi wraz z sąsiednimi kamieniczkami siedzibę Muzeum Diecezjalnego. Zachowały się w nim częściowo drewniane stropy i fragmenty polichromii, gotyckie obramowania okien, dwa kamienne późnogotyckie portale.', 'img/atrakcje/at1.JPG', 'https://www.google.com/maps/place/plac+Katedralny+5,+33-100+Tarn%C3%B3w/@50.0131449,20.9845323,17z/data=!3m1!4b1!4m5!3m4!1s0x473d84aa714c40ef:0x7505811a799fcc81!8m2!3d50.0131449!4d20.986721');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pogoda`
--

CREATE TABLE `pogoda` (
  `id` int(11) NOT NULL,
  `godzina` int(11) NOT NULL,
  `temperatura` int(11) NOT NULL,
  `wilgotnosc` int(11) NOT NULL,
  `wiatr` varchar(15) COLLATE utf8_polish_ci NOT NULL,
  `stanChmur` varchar(30) COLLATE utf8_polish_ci NOT NULL,
  `temperaturaB` int(11) NOT NULL,
  `wilgotnoscB` int(11) NOT NULL,
  `wiatrB` varchar(15) COLLATE utf8_polish_ci NOT NULL,
  `stanChmurB` varchar(30) COLLATE utf8_polish_ci NOT NULL,
  `temperaturaC` int(11) NOT NULL,
  `wiatrC` int(11) NOT NULL,
  `wilgotnoscC` varchar(15) COLLATE utf8_polish_ci NOT NULL,
  `stanChmurC` varchar(30) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `pogoda`
--

INSERT INTO `pogoda` (`id`, `godzina`, `temperatura`, `wilgotnosc`, `wiatr`, `stanChmur`, `temperaturaB`, `wilgotnoscB`, `wiatrB`, `stanChmurB`, `temperaturaC`, `wiatrC`, `wilgotnoscC`, `stanChmurC`) VALUES
(1, 18, 8, 58, '4.29', 'clear sky', 4, 65, '3.27', 'few clouds', 2, 69, '3.01', '0'),
(172, 19, 7, 58, '4.29', 'clear sky', 4, 65, '3.27', 'few clouds', 1, 69, '3.01', 'few clouds'),
(230, 22, 1, 65, '3.27', 'few clouds', -1, 69, '3.01', 'few clouds', -3, 77, '2.31', 'clear sky'),
(239, 23, 1, 69, '3.01', 'few clouds', -2, 77, '2.31', 'clear sky', 2, 63, '2.05', 'clear sky'),
(240, 0, 1, 69, '3.01', 'broken clouds', -2, 77, '2.31', 'clear sky', 2, 63, '2.05', 'clear sky'),
(241, 1, -1, 69, '3.01', 'few clouds', -3, 77, '2.31', 'clear sky', 1, 63, '2.05', 'clear sky'),
(242, 2, -4, 77, '2.31', 'clear sky', 1, 63, '2.05', 'clear sky', 6, 68, '3.5', 'clear sky'),
(243, 3, -3, 77, '2.31', 'clear sky', 1, 63, '2.05', 'clear sky', 6, 68, '3.5', 'clear sky'),
(248, 4, -3, 77, '2.31', 'clear sky', 1, 63, '2.05', 'clear sky', 6, 68, '3.5', 'clear sky'),
(258, 5, 1, 63, '2.05', 'clear sky', 6, 68, '3.5', 'clear sky', 7, 60, '4.57', 'few clouds'),
(259, 6, 2, 63, '2.05', 'clear sky', 7, 68, '3.5', 'clear sky', 8, 60, '4.57', 'few clouds'),
(260, 7, 5, 63, '2.05', 'clear sky', 9, 68, '3.5', 'clear sky', 9, 60, '4.57', 'few clouds'),
(262, 8, 9, 68, '3.5', 'clear sky', 10, 60, '4.57', 'few clouds', 9, 51, '4.46', 'clear sky'),
(263, 9, 12, 47, '3.16', 'clear sky', 12, 42, '4.66', 'clear sky', 11, 38, '4.36', 'clear sky'),
(264, 10, 14, 47, '3.16', 'clear sky', 14, 42, '4.66', 'clear sky', 12, 38, '4.36', 'clear sky'),
(265, 11, 15, 42, '4.66', 'clear sky', 13, 38, '4.36', 'clear sky', 7, 49, '3.02', 'clear sky'),
(266, 12, 11, 42, '4.66', 'clear sky', 11, 38, '4.36', 'clear sky', 6, 49, '3.02', 'clear sky'),
(267, 12, 11, 42, '4.66', 'clear sky', 11, 38, '4.36', 'clear sky', 6, 49, '3.02', 'clear sky'),
(268, 13, 12, 42, '4.66', 'clear sky', 11, 38, '4.36', 'clear sky', 6, 49, '3.02', 'clear sky'),
(269, 14, 11, 38, '4.36', 'clear sky', 6, 49, '3.02', 'clear sky', 1, 74, '2.11', 'clear sky'),
(270, 15, 11, 38, '4.36', 'clear sky', 6, 49, '3.02', 'clear sky', 1, 74, '2.11', 'clear sky'),
(271, 15, 11, 38, '4.36', 'clear sky', 6, 49, '3.02', 'clear sky', 1, 74, '2.11', 'clear sky'),
(272, 15, 11, 38, '4.36', 'clear sky', 6, 49, '3.02', 'clear sky', 1, 74, '2.11', 'clear sky'),
(273, 15, 11, 38, '4.36', 'clear sky', 6, 49, '3.02', 'clear sky', 1, 74, '2.11', 'clear sky'),
(274, 15, 11, 38, '4.36', 'clear sky', 6, 49, '3.02', 'clear sky', 1, 74, '2.11', 'clear sky'),
(275, 16, 11, 38, '4.36', 'clear sky', 6, 49, '3.02', 'clear sky', 1, 74, '2.11', 'clear sky'),
(276, 17, 6, 49, '3.02', 'clear sky', 1, 74, '2.11', 'clear sky', -2, 76, '1.16', 'clear sky'),
(277, 18, 7, 49, '3.02', 'clear sky', 1, 74, '2.11', 'clear sky', -2, 76, '1.16', 'clear sky'),
(278, 19, 5, 49, '3.02', 'clear sky', 0, 74, '2.11', 'clear sky', -3, 76, '1.16', 'clear sky'),
(279, 20, -1, 74, '2.11', 'clear sky', -4, 76, '1.16', 'clear sky', -5, 73, '1.11', 'clear sky');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(30) COLLATE utf8_polish_ci NOT NULL,
  `pass` varchar(100) COLLATE utf8_polish_ci NOT NULL,
  `typ` varchar(30) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`id`, `login`, `pass`, `typ`) VALUES
(1, 'admin', '$2y$10$hEefYfDN9H3dfBw3CBAzG.r2GFwXcEPG1AbI4TsIaw4/p/yDbA9PW', 'admin');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zdjencia`
--

CREATE TABLE `zdjencia` (
  `id` int(11) NOT NULL,
  `adres` varchar(150) COLLATE utf8_polish_ci NOT NULL,
  `tytul` varchar(50) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `zdjencia`
--

INSERT INTO `zdjencia` (`id`, `adres`, `tytul`) VALUES
(2, 'img/galeriaBaza/tarnow2.jpg', 'Tarnów z lotu ptaka'),
(5, 'img/galeriaBaza/tarnow3.jpg', 'Pięknie zdobione zabudowania na rynku'),
(6, 'img/galeriaBaza/tarnow4.jpg', 'Ulica Krakowska'),
(7, 'img/galeriaBaza/tarnow5.jpg', 'Projekt nowego stadionu'),
(8, 'img/galeriaBaza/tarnow6.jpg', 'Krakowska i kościół Św. Rodziny'),
(9, 'img/galeriaBaza/tarnow1.jpg', 'Tarnów z lotu ptaka');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zloszenia`
--

CREATE TABLE `zloszenia` (
  `id` int(11) NOT NULL,
  `data` date NOT NULL,
  `tresc` text COLLATE utf8_polish_ci NOT NULL,
  `miejsce` text COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `zloszenia`
--

INSERT INTO `zloszenia` (`id`, `data`, `tresc`, `miejsce`) VALUES
(1, '2019-04-15', 'cos', 'tam'),
(2, '2019-04-15', '', ''),
(3, '2019-04-15', '', ''),
(4, '2019-04-15', '', ''),
(5, '2019-04-15', '', ''),
(6, '2019-04-15', '', ''),
(7, '2019-04-15', '', ''),
(8, '2019-04-15', '', ''),
(9, '2019-04-15', '', ''),
(10, '2019-04-15', '', ''),
(11, '2019-04-15', '', ''),
(12, '2019-04-15', '', ''),
(13, '2019-04-15', '', ''),
(14, '2019-04-15', '', ''),
(15, '2019-04-15', '', ''),
(16, '2019-04-15', '', ''),
(17, '2019-04-15', '', ''),
(18, '2019-04-15', '', ''),
(19, '2019-04-15', 'textarea 1 :D', 'textarea 2 :D'),
(20, '2019-04-15', 'textarea 1 :D', 'textarea 2 :D'),
(21, '2019-04-15', '', ''),
(22, '2019-04-15', '', 'textarea 2 :Dsss'),
(23, '2019-04-15', '', 'textarea 2 :Dsss');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `atrakcje`
--
ALTER TABLE `atrakcje`
  ADD PRIMARY KEY (`id_atrakcji`);

--
-- Indeksy dla tabeli `pogoda`
--
ALTER TABLE `pogoda`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `zdjencia`
--
ALTER TABLE `zdjencia`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `zloszenia`
--
ALTER TABLE `zloszenia`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `atrakcje`
--
ALTER TABLE `atrakcje`
  MODIFY `id_atrakcji` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT dla tabeli `pogoda`
--
ALTER TABLE `pogoda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=280;

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT dla tabeli `zdjencia`
--
ALTER TABLE `zdjencia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT dla tabeli `zloszenia`
--
ALTER TABLE `zloszenia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
