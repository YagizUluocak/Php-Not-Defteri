-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 25 Ara 2023, 23:56:12
-- Sunucu sürümü: 10.4.32-MariaDB
-- PHP Sürümü: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `notdefteri`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `notlar`
--

CREATE TABLE `notlar` (
  `not_id` int(11) NOT NULL,
  `not_baslik` varchar(300) NOT NULL,
  `not_icerik` text NOT NULL,
  `oncelik_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `notlar`
--

INSERT INTO `notlar` (`not_id`, `not_baslik`, `not_icerik`, `oncelik_id`) VALUES
(1, 'Fonksiyonel Navbar', 'Sol tarafta bulunan form elemanlarını içeren div alanı Bir hamburger menü aracılığı ile açılır kapanır hale getirilecek. Kapalı olduğu zaman notlar kısmı tüm ekranı kaplayacak (col-12) form alanı açıldığı zaman ise notlar alanı küçülerek col-8 boyutuna geri getirilecek.', 1),
(2, 'Bitiş Tarihi', 'Eklenen not\'a bitiş tarihi de eklenilecek ve kullanıcı bu notun ne zaman biteceğini de görmüş olacak', 2),
(3, 'Tamamlanmış Notlar', 'Yeni bir alan oluşturulacak. Kullanıcı Notlar tablosundan tamamladığı notu (Tamamlanan-Notlar) tablosuna taşıyacak  ve ekranda tamamlanmış notlar ve tamamlanma zamanı (Tamamlanan Notlar tablosuna taşınma zamanı) gösterilecek ve buradaki notlardan tekrar Notlar tablosuna taşınabilecek veya silinebilecek.', 3),
(10, 'YENİ', 'YENİ', 1),
(11, 'asd', 'asd', 2),
(12, 'asdddddd', 'asdd', 2);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `oncelik`
--

CREATE TABLE `oncelik` (
  `oncelik_id` int(11) NOT NULL,
  `alert_type` varchar(100) NOT NULL,
  `oncelik_durum` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `oncelik`
--

INSERT INTO `oncelik` (`oncelik_id`, `alert_type`, `oncelik_durum`) VALUES
(1, 'success', 'Düşük Öncelikli'),
(2, 'warning', 'Orta Öncelikli'),
(3, 'danger', 'Yüksek Öncelikli');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `notlar`
--
ALTER TABLE `notlar`
  ADD PRIMARY KEY (`not_id`),
  ADD KEY `oncelik_id` (`oncelik_id`);

--
-- Tablo için indeksler `oncelik`
--
ALTER TABLE `oncelik`
  ADD PRIMARY KEY (`oncelik_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `notlar`
--
ALTER TABLE `notlar`
  MODIFY `not_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Tablo için AUTO_INCREMENT değeri `oncelik`
--
ALTER TABLE `oncelik`
  MODIFY `oncelik_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `notlar`
--
ALTER TABLE `notlar`
  ADD CONSTRAINT `notlar_ibfk_1` FOREIGN KEY (`oncelik_id`) REFERENCES `oncelik` (`oncelik_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
