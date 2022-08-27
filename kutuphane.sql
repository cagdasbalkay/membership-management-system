-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 28 Ara 2021, 20:29:43
-- Sunucu sürümü: 10.4.21-MariaDB
-- PHP Sürümü: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `kutuphane`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yuzme`
--

CREATE TABLE `yuzme` (
  `uyeno` int(11) NOT NULL,
  `uyead` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `uyesoyad` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `cinsiyet` char(1) COLLATE utf8mb4_turkish_ci NOT NULL,
  `uyeoldtar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `yuzme`
--

INSERT INTO `yuzme` (`uyeno`, `uyead`, `uyesoyad`, `cinsiyet`, `uyeoldtar`) VALUES
(1, 'Kaan', 'Gök', 'E', '2021-12-28'),
(2, 'Alper', 'Kılıç', 'E', '2021-12-29'),
(7, 'Selin', 'Tunalı', 'K', '2021-12-27'),
(8, 'Yunus  Emre', 'Doğan', 'E', '2021-12-28'),
(10, 'Emre', 'İşsever', 'E', '2021-12-28'),
(11, 'Kadir', 'Çakır', 'E', '2021-12-29'),
(12, 'Enes', 'Melez', 'E', '2021-12-29'),
(13, 'Ali İmran', 'Belli', 'E', '2021-12-29');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `yuzme`
--
ALTER TABLE `yuzme`
  ADD PRIMARY KEY (`uyeno`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `yuzme`
--
ALTER TABLE `yuzme`
  MODIFY `uyeno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
