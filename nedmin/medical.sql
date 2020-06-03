-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost
-- Üretim Zamanı: 03 Haz 2020, 23:07:03
-- Sunucu sürümü: 8.0.17
-- PHP Sürümü: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `medical`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `abouts`
--

CREATE TABLE `abouts` (
  `abouts_id` int(11) NOT NULL,
  `abouts_title` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `abouts_file` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `abouts_slug` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `abouts_content` text CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `abouts_must` int(3) NOT NULL,
  `abouts_key` varchar(50) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `abouts`
--

INSERT INTO `abouts` (`abouts_id`, `abouts_title`, `abouts_file`, `abouts_slug`, `abouts_content`, `abouts_must`, `abouts_key`) VALUES
(12, 'Hakkımızda', '', 'hakkimizda', '<p><strong>Founded in 2001 by John Doe, gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat.</strong></p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur hendrerit, leo vitae interdum pretium, tortor risus dapibus tortor, eu suscipit orci leo sed nisl. Integer et ipsum eu nulla auctor mattis sit amet in diam. Vestibulum non ornare arcu. Class aptent taciti sociosqu ad.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur hendrerit, leo vitae interdum pretium, tortor risus dapibus tortor, eu suscipit orci leo sed nisl. Integer et ipsum eu nulla auctor mattis sit amet in diam. Vestibulum non ornare arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer vitae nunc consequat, viverra nisl eget, dictum eros. Maecenas sit amet iaculis massa. Sed dui tellus, pellentesque non enim eget, cursus sollicitudin tellus. Cras eget varius enim. Aenean ac libero finibus, varius nisi a, cursus magna. Vestibulum vitae massa purus. Etiam vulputate ullamcorper diam, a iaculis nulla placerat a. Aenean ac libero finibus, varius nisi a, cursus magna. Vestibulum vitae massa purus. Etiam vulputate ullamcorper diam, a iaculis nulla placerat a.</p>\r\n', 0, 'hakkimizda'),
(13, 'Ödeme Seçenekleri', '', 'odeme-secenekleri', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc&nbsp;lacinia. Proin adipiscing porta tellus, ut feugiat nibh adipiscing sit amet. In eu justo a felis faucibus ornare vel id metus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In eu libero ligula. Fusce eget metus lorem, ac viverra leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc&nbsp;lacinia.</p>\r\n', 0, 'ödeme'),
(14, 'Randevular', '', 'randevular', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget leo at velit imperdiet varius. In eu ipsum vitae velit congue iaculis vitae at risus. Nullam tortor nunc, bibendum vitae semper a, volutpat eget massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer fringilla, orci sit amet posuere auctor, orci eros pellentesque odio, nec pellentesque erat ligula nec massa. Aenean consequat lorem ut felis ullamcorper posuere gravida tellus faucibus. Maecenas dolor elit, pulvinar eu vehicula eu, consequat et lacus. Duis et purus ipsum. In auctor mattis ipsum id molestie. Donec risus nulla, fringilla a rhoncus vitae, semper a massa. Vivamus ullamcorper, enim sit amet consequat laoreet, tortor tortor dictum urna, ut egestas urna ipsum nec libero. Nulla justo leo, molestie vel tempor nec, egestas at massa. Aenean pulvinar, felis porttitor iaculis pulvinar, odio orci sodales odio, ac pulvinar felis quam sit.</p>\r\n', 0, 'randevu'),
(15, 'Kabul Edilen Sigorta Planları', '', 'kabul-edilen-sigorta-planlari', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget leo at velit imperdiet varius. In eu ipsum vitae velit congue iaculis vitae at risus. Nullam tortor nunc, bibendum vitae semper a, volutpat eget massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer fringilla, orci sit amet posuere auctor, orci eros pellentesque odio, nec pellentesque erat ligula nec massa. Aenean consequat lorem ut felis ullamcorper posuere gravida tellus faucibus. Maecenas dolor elit, pulvinar eu vehicula eu, consequat et lacus. Duis et purus ipsum. In auctor mattis ipsum id molestie. Donec risus nulla, fringilla a rhoncus vitae, semper a massa. Vivamus ullamcorper, enim sit amet consequat laoreet, tortor tortor dictum urna, ut egestas urna ipsum nec libero. Nulla justo leo, molestie vel tempor nec, egestas at massa. Aenean pulvinar, felis porttitor iaculis pulvinar, odio orci sodales odio, ac pulvinar felis quam sit.</p>\r\n', 0, 'sigorta'),
(16, 'Politikalar', '', 'politikalar', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget leo at velit imperdiet varius. In eu ipsum vitae velit congue iaculis vitae at risus. Nullam tortor nunc, bibendum vitae semper a, volutpat eget massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer fringilla, orci sit amet posuere auctor, orci eros pellentesque odio, nec pellentesque erat ligula nec massa. Aenean consequat lorem ut felis ullamcorper posuere gravida tellus faucibus. Maecenas dolor elit, pulvinar eu vehicula eu, consequat et lacus. Duis et purus ipsum. In auctor mattis ipsum id molestie. Donec risus nulla, fringilla a rhoncus vitae, semper a massa. Vivamus ullamcorper, enim sit amet consequat laoreet, tortor tortor dictum urna, ut egestas urna ipsum nec libero. Nulla justo leo, molestie vel tempor nec, egestas at massa. Aenean pulvinar, felis porttitor iaculis pulvinar, odio orci sodales odio, ac pulvinar felis quam sit.</p>\r\n', 0, 'politika'),
(17, 'Resim1', '5ed275aa74b2e.jpg', 'resim1', '<p>Resim1</p>\r\n', 0, 'resim'),
(18, 'Resim2', '5ed275ca6339f.jpg', 'resim2', '<p>Resim2</p>\r\n', 0, 'resim'),
(19, 'Resim3', '5ed275db4eebf.jpg', 'resim3', '<p>Resim3</p>\r\n', 0, 'resim');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admins`
--

CREATE TABLE `admins` (
  `admins_id` int(11) NOT NULL,
  `admins_namesurname` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `admins_file` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `admins_username` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `admins_pass` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `admins_status` enum('0','1') CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `admins_must` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `admins`
--

INSERT INTO `admins` (`admins_id`, `admins_namesurname`, `admins_file`, `admins_username`, `admins_pass`, `admins_status`, `admins_must`) VALUES
(12, 'Furkan KUBAT', '5ece922072fc1.jpg', 'furkan', 'e10adc3949ba59abbe56e057f20f883e', '1', 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `doctors`
--

CREATE TABLE `doctors` (
  `doctors_id` int(11) NOT NULL,
  `doctors_namesurname` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `doctors_slug` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `doctors_file` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `doctors_mail` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `doctors_pass` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `doctors_episode` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `doctors_promise` text COLLATE utf8_turkish_ci NOT NULL,
  `doctors_status` enum('0','1') COLLATE utf8_turkish_ci NOT NULL,
  `doctors_must` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `doctors`
--

INSERT INTO `doctors` (`doctors_id`, `doctors_namesurname`, `doctors_slug`, `doctors_file`, `doctors_mail`, `doctors_pass`, `doctors_episode`, `doctors_promise`, `doctors_status`, `doctors_must`) VALUES
(1, 'Ali Veli', 'aliveli', '5ed12096e5ba8.jpg', 'ali_veli@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'Kardiyoloji', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent nec quam erat. Phasellus iaculis sem ut urna convallis sodales. Cras nec faucibus turpis. Sed malesuada augue quis nunc sodales feugiat. Pellentesque ornare lectus at vulputate consequat. Nam eu justo at ante bibendum facilisis a ut leo. Pellentesque a posuere nunc, sit amet laoreet quam. Suspendisse euismod elit est. In id libero finibus, tincidunt orci sed, lobortis nulla. Etiam interdum magna sed tellus congue mollis. Cras luctus dui mi, et eleifend diam suscipit vitae. Integer ex lectus, tincidunt id enim ut, varius feugiat augue.</p>\r\n\r\n<p>Mauris eleifend erat eu elit consectetur elementum. Proin vel suscipit mauris. Aliquam vitae massa laoreet sapien faucibus feugiat. Vestibulum vitae dolor non urna feugiat egestas eget vestibulum justo. Aenean vitae egestas orci. Curabitur et maximus leo. Aliquam finibus arcu dolor, eget fermentum turpis semper a.</p>\r\n\r\n<p>Fusce tristique elit sapien, at eleifend enim venenatis et. In hac habitasse platea dictumst. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse malesuada interdum nunc, at hendrerit ligula condimentum eget. Suspendisse justo quam, cursus eu libero vitae, cursus venenatis urna. Curabitur nisi justo, ultricies non nulla id, consectetur consequat mauris. Maecenas fringilla vehicula sem vel gravida. Integer quis congue nulla.</p>\r\n', '1', 0),
(2, 'Ayşe Aslan', 'ayseaslan', '5ed120cb980b8.jpg', 'ayse_aslan@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'Gastroenteroloji', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent nec quam erat. Phasellus iaculis sem ut urna convallis sodales. Cras nec faucibus turpis. Sed malesuada augue quis nunc sodales feugiat. Pellentesque ornare lectus at vulputate consequat. Nam eu justo at ante bibendum facilisis a ut leo. Pellentesque a posuere nunc, sit amet laoreet quam. Suspendisse euismod elit est. In id libero finibus, tincidunt orci sed, lobortis nulla. Etiam interdum magna sed tellus congue mollis. Cras luctus dui mi, et eleifend diam suscipit vitae. Integer ex lectus, tincidunt id enim ut, varius feugiat augue.</p>\r\n\r\n<p>Mauris eleifend erat eu elit consectetur elementum. Proin vel suscipit mauris. Aliquam vitae massa laoreet sapien faucibus feugiat. Vestibulum vitae dolor non urna feugiat egestas eget vestibulum justo. Aenean vitae egestas orci. Curabitur et maximus leo. Aliquam finibus arcu dolor, eget fermentum turpis semper a.</p>\r\n\r\n<p>Fusce tristique elit sapien, at eleifend enim venenatis et. In hac habitasse platea dictumst. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse malesuada interdum nunc, at hendrerit ligula condimentum eget. Suspendisse justo quam, cursus eu libero vitae, cursus venenatis urna. Curabitur nisi justo, ultricies non nulla id, consectetur consequat mauris. Maecenas fringilla vehicula sem vel gravida. Integer quis congue nulla.</p>\r\n', '1', 0),
(3, 'Tuğba Ağaç', 'tugbaagac', '5ed1210d3974f.png', 'tugba_agac@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'Dahiliye', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent nec quam erat. Phasellus iaculis sem ut urna convallis sodales. Cras nec faucibus turpis. Sed malesuada augue quis nunc sodales feugiat. Pellentesque ornare lectus at vulputate consequat. Nam eu justo at ante bibendum facilisis a ut leo. Pellentesque a posuere nunc, sit amet laoreet quam. Suspendisse euismod elit est. In id libero finibus, tincidunt orci sed, lobortis nulla. Etiam interdum magna sed tellus congue mollis. Cras luctus dui mi, et eleifend diam suscipit vitae. Integer ex lectus, tincidunt id enim ut, varius feugiat augue.</p>\r\n\r\n<p>Mauris eleifend erat eu elit consectetur elementum. Proin vel suscipit mauris. Aliquam vitae massa laoreet sapien faucibus feugiat. Vestibulum vitae dolor non urna feugiat egestas eget vestibulum justo. Aenean vitae egestas orci. Curabitur et maximus leo. Aliquam finibus arcu dolor, eget fermentum turpis semper a.</p>\r\n\r\n<p>Fusce tristique elit sapien, at eleifend enim venenatis et. In hac habitasse platea dictumst. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse malesuada interdum nunc, at hendrerit ligula condimentum eget. Suspendisse justo quam, cursus eu libero vitae, cursus venenatis urna. Curabitur nisi justo, ultricies non nulla id, consectetur consequat mauris. Maecenas fringilla vehicula sem vel gravida. Integer quis congue nulla.</p>\r\n', '1', 0),
(4, 'Fatih Güneş', 'fatihgunes', '5ed1215207fc3.jpg', 'fatih_gunes@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'Üroloji', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent nec quam erat. Phasellus iaculis sem ut urna convallis sodales. Cras nec faucibus turpis. Sed malesuada augue quis nunc sodales feugiat. Pellentesque ornare lectus at vulputate consequat. Nam eu justo at ante bibendum facilisis a ut leo. Pellentesque a posuere nunc, sit amet laoreet quam. Suspendisse euismod elit est. In id libero finibus, tincidunt orci sed, lobortis nulla. Etiam interdum magna sed tellus congue mollis. Cras luctus dui mi, et eleifend diam suscipit vitae. Integer ex lectus, tincidunt id enim ut, varius feugiat augue.</p>\r\n\r\n<p>Mauris eleifend erat eu elit consectetur elementum. Proin vel suscipit mauris. Aliquam vitae massa laoreet sapien faucibus feugiat. Vestibulum vitae dolor non urna feugiat egestas eget vestibulum justo. Aenean vitae egestas orci. Curabitur et maximus leo. Aliquam finibus arcu dolor, eget fermentum turpis semper a.</p>\r\n\r\n<p>Fusce tristique elit sapien, at eleifend enim venenatis et. In hac habitasse platea dictumst. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse malesuada interdum nunc, at hendrerit ligula condimentum eget. Suspendisse justo quam, cursus eu libero vitae, cursus venenatis urna. Curabitur nisi justo, ultricies non nulla id, consectetur consequat mauris. Maecenas fringilla vehicula sem vel gravida. Integer quis congue nulla.</p>\r\n', '1', 0),
(5, 'Ahmet Sakız', 'ahmetsakiz', '5ed12768d8b2a.jpg', 'ahmet_sakiz@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'Diş', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent nec quam erat. Phasellus iaculis sem ut urna convallis sodales. Cras nec faucibus turpis. Sed malesuada augue quis nunc sodales feugiat. Pellentesque ornare lectus at vulputate consequat. Nam eu justo at ante bibendum facilisis a ut leo. Pellentesque a posuere nunc, sit amet laoreet quam. Suspendisse euismod elit est. In id libero finibus, tincidunt orci sed, lobortis nulla. Etiam interdum magna sed tellus congue mollis. Cras luctus dui mi, et eleifend diam suscipit vitae. Integer ex lectus, tincidunt id enim ut, varius feugiat augue.</p>\r\n\r\n<p>Mauris eleifend erat eu elit consectetur elementum. Proin vel suscipit mauris. Aliquam vitae massa laoreet sapien faucibus feugiat. Vestibulum vitae dolor non urna feugiat egestas eget vestibulum justo. Aenean vitae egestas orci. Curabitur et maximus leo. Aliquam finibus arcu dolor, eget fermentum turpis semper a.</p>\r\n\r\n<p>Fusce tristique elit sapien, at eleifend enim venenatis et. In hac habitasse platea dictumst. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse malesuada interdum nunc, at hendrerit ligula condimentum eget. Suspendisse justo quam, cursus eu libero vitae, cursus venenatis urna. Curabitur nisi justo, ultricies non nulla id, consectetur consequat mauris. Maecenas fringilla vehicula sem vel gravida. Integer quis congue nulla.</p>\r\n', '1', 0),
(6, 'Tuğçe Bardak', 'tugcebardak', '5ed127b005c2e.png', 'tugce_bardak@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'Hepatoloji', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent nec quam erat. Phasellus iaculis sem ut urna convallis sodales. Cras nec faucibus turpis. Sed malesuada augue quis nunc sodales feugiat. Pellentesque ornare lectus at vulputate consequat. Nam eu justo at ante bibendum facilisis a ut leo. Pellentesque a posuere nunc, sit amet laoreet quam. Suspendisse euismod elit est. In id libero finibus, tincidunt orci sed, lobortis nulla. Etiam interdum magna sed tellus congue mollis. Cras luctus dui mi, et eleifend diam suscipit vitae. Integer ex lectus, tincidunt id enim ut, varius feugiat augue.</p>\r\n\r\n<p>Mauris eleifend erat eu elit consectetur elementum. Proin vel suscipit mauris. Aliquam vitae massa laoreet sapien faucibus feugiat. Vestibulum vitae dolor non urna feugiat egestas eget vestibulum justo. Aenean vitae egestas orci. Curabitur et maximus leo. Aliquam finibus arcu dolor, eget fermentum turpis semper a.</p>\r\n\r\n<p>Fusce tristique elit sapien, at eleifend enim venenatis et. In hac habitasse platea dictumst. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse malesuada interdum nunc, at hendrerit ligula condimentum eget. Suspendisse justo quam, cursus eu libero vitae, cursus venenatis urna. Curabitur nisi justo, ultricies non nulla id, consectetur consequat mauris. Maecenas fringilla vehicula sem vel gravida. Integer quis congue nulla.</p>\r\n', '1', 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `polyclinics`
--

CREATE TABLE `polyclinics` (
  `polyclinics_id` int(11) NOT NULL,
  `polyclinics_title` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `polyclinics_content` text COLLATE utf8_turkish_ci NOT NULL,
  `polyclinics_file` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `polyclinics_slugs` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `polyclinics`
--

INSERT INTO `polyclinics` (`polyclinics_id`, `polyclinics_title`, `polyclinics_content`, `polyclinics_file`, `polyclinics_slugs`) VALUES
(1, 'Kardiyoloji', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In eget sapien odio. Donec vehicula iaculis vulputate. In venenatis dolor et tempor iaculis. Ut tempus nisl non vulputate dapibus. Vestibulum tempus nunc augue, a vulputate ex lacinia at. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc mauris neque, convallis at mattis malesuada, finibus non risus.</p>\r\n\r\n<p>Donec hendrerit a diam id porttitor. Donec sit amet finibus sapien, quis ultrices nisl. Ut at lacus imperdiet enim molestie egestas ac eu turpis. Quisque nunc urna, ullamcorper non purus in, blandit dignissim eros. Cras facilisis felis quis lectus sollicitudin posuere. Ut porta velit eu interdum aliquam. Nullam sit amet sollicitudin lectus, ut finibus dui. Phasellus nisl nunc, dapibus at mollis in, rhoncus ut neque. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Donec viverra felis in cursus pretium.</p>\r\n\r\n<p>Proin varius mi justo, nec condimentum enim sodales at. Proin tempus in augue id malesuada. Morbi at purus massa. In vel leo non ante pharetra fermentum nec cursus erat. Suspendisse quis varius odio. Phasellus lacinia ut nunc id malesuada. Morbi vitae massa et mauris efficitur facilisis. Ut in condimentum nisl.</p>\r\n\r\n<p>Quisque ipsum dolor, molestie in lacinia sed, convallis quis arcu. Maecenas interdum est eu augue maximus, aliquet pulvinar lectus ullamcorper. Phasellus accumsan, sem sit amet fringilla sagittis, eros felis accumsan magna, eget vehicula arcu purus at nisi. Proin facilisis lacus et lacus volutpat, euismod ornare risus venenatis. Quisque feugiat, erat sed faucibus vestibulum, lectus eros sollicitudin justo, vitae interdum arcu neque eu mauris. Aliquam ut urna lectus. Pellentesque pellentesque nisi in luctus volutpat. Quisque viverra urna vel aliquam vulputate. Ut non varius tellus. Phasellus accumsan, leo eu lacinia imperdiet, nisl leo posuere est, sit amet aliquet ex mi in arcu. Fusce congue cursus ornare. Integer ornare dolor non nunc posuere, faucibus mollis odio tincidunt. Integer vel urna eleifend, vulputate odio ut, posuere enim. Vivamus vitae enim dui. Nunc ex diam, rhoncus ac erat a, vestibulum dictum dolor.</p>\r\n\r\n<p>Donec quis euismod mauris. Proin ut tincidunt orci, eu suscipit tortor. Aenean auctor at justo id faucibus. Morbi vel enim vehicula, feugiat augue quis, scelerisque nisl. Maecenas elementum, metus quis laoreet sagittis, augue elit fringilla risus, sit amet dignissim nulla purus vel metus. Suspendisse mollis varius lorem in feugiat. Aliquam facilisis posuere orci et tempor. Aenean pellentesque orci sit amet felis viverra tempor. In aliquam ex nisi, vel placerat odio tristique vel.</p>\r\n', '5ed06bc619f55.jpg', 'kardiyoloji'),
(2, 'Gastroenteroloji', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In eget sapien odio. Donec vehicula iaculis vulputate. In venenatis dolor et tempor iaculis. Ut tempus nisl non vulputate dapibus. Vestibulum tempus nunc augue, a vulputate ex lacinia at. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc mauris neque, convallis at mattis malesuada, finibus non risus.</p>\r\n\r\n<p>Donec hendrerit a diam id porttitor. Donec sit amet finibus sapien, quis ultrices nisl. Ut at lacus imperdiet enim molestie egestas ac eu turpis. Quisque nunc urna, ullamcorper non purus in, blandit dignissim eros. Cras facilisis felis quis lectus sollicitudin posuere. Ut porta velit eu interdum aliquam. Nullam sit amet sollicitudin lectus, ut finibus dui. Phasellus nisl nunc, dapibus at mollis in, rhoncus ut neque. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Donec viverra felis in cursus pretium.</p>\r\n\r\n<p>Proin varius mi justo, nec condimentum enim sodales at. Proin tempus in augue id malesuada. Morbi at purus massa. In vel leo non ante pharetra fermentum nec cursus erat. Suspendisse quis varius odio. Phasellus lacinia ut nunc id malesuada. Morbi vitae massa et mauris efficitur facilisis. Ut in condimentum nisl.</p>\r\n\r\n<p>Quisque ipsum dolor, molestie in lacinia sed, convallis quis arcu. Maecenas interdum est eu augue maximus, aliquet pulvinar lectus ullamcorper. Phasellus accumsan, sem sit amet fringilla sagittis, eros felis accumsan magna, eget vehicula arcu purus at nisi. Proin facilisis lacus et lacus volutpat, euismod ornare risus venenatis. Quisque feugiat, erat sed faucibus vestibulum, lectus eros sollicitudin justo, vitae interdum arcu neque eu mauris. Aliquam ut urna lectus. Pellentesque pellentesque nisi in luctus volutpat. Quisque viverra urna vel aliquam vulputate. Ut non varius tellus. Phasellus accumsan, leo eu lacinia imperdiet, nisl leo posuere est, sit amet aliquet ex mi in arcu. Fusce congue cursus ornare. Integer ornare dolor non nunc posuere, faucibus mollis odio tincidunt. Integer vel urna eleifend, vulputate odio ut, posuere enim. Vivamus vitae enim dui. Nunc ex diam, rhoncus ac erat a, vestibulum dictum dolor.</p>\r\n\r\n<p>Donec quis euismod mauris. Proin ut tincidunt orci, eu suscipit tortor. Aenean auctor at justo id faucibus. Morbi vel enim vehicula, feugiat augue quis, scelerisque nisl. Maecenas elementum, metus quis laoreet sagittis, augue elit fringilla risus, sit amet dignissim nulla purus vel metus. Suspendisse mollis varius lorem in feugiat. Aliquam facilisis posuere orci et tempor. Aenean pellentesque orci sit amet felis viverra tempor. In aliquam ex nisi, vel placerat odio tristique vel.</p>\r\n', '5ed112cbaf0d5.jpg', 'gastroenteroloji'),
(3, 'Üroloji ', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In eget sapien odio. Donec vehicula iaculis vulputate. In venenatis dolor et tempor iaculis. Ut tempus nisl non vulputate dapibus. Vestibulum tempus nunc augue, a vulputate ex lacinia at. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc mauris neque, convallis at mattis malesuada, finibus non risus.</p>\r\n\r\n<p>Donec hendrerit a diam id porttitor. Donec sit amet finibus sapien, quis ultrices nisl. Ut at lacus imperdiet enim molestie egestas ac eu turpis. Quisque nunc urna, ullamcorper non purus in, blandit dignissim eros. Cras facilisis felis quis lectus sollicitudin posuere. Ut porta velit eu interdum aliquam. Nullam sit amet sollicitudin lectus, ut finibus dui. Phasellus nisl nunc, dapibus at mollis in, rhoncus ut neque. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Donec viverra felis in cursus pretium.</p>\r\n\r\n<p>Proin varius mi justo, nec condimentum enim sodales at. Proin tempus in augue id malesuada. Morbi at purus massa. In vel leo non ante pharetra fermentum nec cursus erat. Suspendisse quis varius odio. Phasellus lacinia ut nunc id malesuada. Morbi vitae massa et mauris efficitur facilisis. Ut in condimentum nisl.</p>\r\n\r\n<p>Quisque ipsum dolor, molestie in lacinia sed, convallis quis arcu. Maecenas interdum est eu augue maximus, aliquet pulvinar lectus ullamcorper. Phasellus accumsan, sem sit amet fringilla sagittis, eros felis accumsan magna, eget vehicula arcu purus at nisi. Proin facilisis lacus et lacus volutpat, euismod ornare risus venenatis. Quisque feugiat, erat sed faucibus vestibulum, lectus eros sollicitudin justo, vitae interdum arcu neque eu mauris. Aliquam ut urna lectus. Pellentesque pellentesque nisi in luctus volutpat. Quisque viverra urna vel aliquam vulputate. Ut non varius tellus. Phasellus accumsan, leo eu lacinia imperdiet, nisl leo posuere est, sit amet aliquet ex mi in arcu. Fusce congue cursus ornare. Integer ornare dolor non nunc posuere, faucibus mollis odio tincidunt. Integer vel urna eleifend, vulputate odio ut, posuere enim. Vivamus vitae enim dui. Nunc ex diam, rhoncus ac erat a, vestibulum dictum dolor.</p>\r\n\r\n<p>Donec quis euismod mauris. Proin ut tincidunt orci, eu suscipit tortor. Aenean auctor at justo id faucibus. Morbi vel enim vehicula, feugiat augue quis, scelerisque nisl. Maecenas elementum, metus quis laoreet sagittis, augue elit fringilla risus, sit amet dignissim nulla purus vel metus. Suspendisse mollis varius lorem in feugiat. Aliquam facilisis posuere orci et tempor. Aenean pellentesque orci sit amet felis viverra tempor. In aliquam ex nisi, vel placerat odio tristique vel.</p>\r\n', '5ed114685ec57.jpg', 'uroloji '),
(4, 'Diş', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In eget sapien odio. Donec vehicula iaculis vulputate. In venenatis dolor et tempor iaculis. Ut tempus nisl non vulputate dapibus. Vestibulum tempus nunc augue, a vulputate ex lacinia at. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc mauris neque, convallis at mattis malesuada, finibus non risus.</p>\r\n\r\n<p>Donec hendrerit a diam id porttitor. Donec sit amet finibus sapien, quis ultrices nisl. Ut at lacus imperdiet enim molestie egestas ac eu turpis. Quisque nunc urna, ullamcorper non purus in, blandit dignissim eros. Cras facilisis felis quis lectus sollicitudin posuere. Ut porta velit eu interdum aliquam. Nullam sit amet sollicitudin lectus, ut finibus dui. Phasellus nisl nunc, dapibus at mollis in, rhoncus ut neque. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Donec viverra felis in cursus pretium.</p>\r\n\r\n<p>Proin varius mi justo, nec condimentum enim sodales at. Proin tempus in augue id malesuada. Morbi at purus massa. In vel leo non ante pharetra fermentum nec cursus erat. Suspendisse quis varius odio. Phasellus lacinia ut nunc id malesuada. Morbi vitae massa et mauris efficitur facilisis. Ut in condimentum nisl.</p>\r\n\r\n<p>Quisque ipsum dolor, molestie in lacinia sed, convallis quis arcu. Maecenas interdum est eu augue maximus, aliquet pulvinar lectus ullamcorper. Phasellus accumsan, sem sit amet fringilla sagittis, eros felis accumsan magna, eget vehicula arcu purus at nisi. Proin facilisis lacus et lacus volutpat, euismod ornare risus venenatis. Quisque feugiat, erat sed faucibus vestibulum, lectus eros sollicitudin justo, vitae interdum arcu neque eu mauris. Aliquam ut urna lectus. Pellentesque pellentesque nisi in luctus volutpat. Quisque viverra urna vel aliquam vulputate. Ut non varius tellus. Phasellus accumsan, leo eu lacinia imperdiet, nisl leo posuere est, sit amet aliquet ex mi in arcu. Fusce congue cursus ornare. Integer ornare dolor non nunc posuere, faucibus mollis odio tincidunt. Integer vel urna eleifend, vulputate odio ut, posuere enim. Vivamus vitae enim dui. Nunc ex diam, rhoncus ac erat a, vestibulum dictum dolor.</p>\r\n\r\n<p>Donec quis euismod mauris. Proin ut tincidunt orci, eu suscipit tortor. Aenean auctor at justo id faucibus. Morbi vel enim vehicula, feugiat augue quis, scelerisque nisl. Maecenas elementum, metus quis laoreet sagittis, augue elit fringilla risus, sit amet dignissim nulla purus vel metus. Suspendisse mollis varius lorem in feugiat. Aliquam facilisis posuere orci et tempor. Aenean pellentesque orci sit amet felis viverra tempor. In aliquam ex nisi, vel placerat odio tristique vel.</p>\r\n', '5ed114b49397c.jpg', 'dis'),
(5, 'Dahiliye', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In eget sapien odio. Donec vehicula iaculis vulputate. In venenatis dolor et tempor iaculis. Ut tempus nisl non vulputate dapibus. Vestibulum tempus nunc augue, a vulputate ex lacinia at. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc mauris neque, convallis at mattis malesuada, finibus non risus.</p>\r\n\r\n<p>Donec hendrerit a diam id porttitor. Donec sit amet finibus sapien, quis ultrices nisl. Ut at lacus imperdiet enim molestie egestas ac eu turpis. Quisque nunc urna, ullamcorper non purus in, blandit dignissim eros. Cras facilisis felis quis lectus sollicitudin posuere. Ut porta velit eu interdum aliquam. Nullam sit amet sollicitudin lectus, ut finibus dui. Phasellus nisl nunc, dapibus at mollis in, rhoncus ut neque. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Donec viverra felis in cursus pretium.</p>\r\n\r\n<p>Proin varius mi justo, nec condimentum enim sodales at. Proin tempus in augue id malesuada. Morbi at purus massa. In vel leo non ante pharetra fermentum nec cursus erat. Suspendisse quis varius odio. Phasellus lacinia ut nunc id malesuada. Morbi vitae massa et mauris efficitur facilisis. Ut in condimentum nisl.</p>\r\n\r\n<p>Quisque ipsum dolor, molestie in lacinia sed, convallis quis arcu. Maecenas interdum est eu augue maximus, aliquet pulvinar lectus ullamcorper. Phasellus accumsan, sem sit amet fringilla sagittis, eros felis accumsan magna, eget vehicula arcu purus at nisi. Proin facilisis lacus et lacus volutpat, euismod ornare risus venenatis. Quisque feugiat, erat sed faucibus vestibulum, lectus eros sollicitudin justo, vitae interdum arcu neque eu mauris. Aliquam ut urna lectus. Pellentesque pellentesque nisi in luctus volutpat. Quisque viverra urna vel aliquam vulputate. Ut non varius tellus. Phasellus accumsan, leo eu lacinia imperdiet, nisl leo posuere est, sit amet aliquet ex mi in arcu. Fusce congue cursus ornare. Integer ornare dolor non nunc posuere, faucibus mollis odio tincidunt. Integer vel urna eleifend, vulputate odio ut, posuere enim. Vivamus vitae enim dui. Nunc ex diam, rhoncus ac erat a, vestibulum dictum dolor.</p>\r\n\r\n<p>Donec quis euismod mauris. Proin ut tincidunt orci, eu suscipit tortor. Aenean auctor at justo id faucibus. Morbi vel enim vehicula, feugiat augue quis, scelerisque nisl. Maecenas elementum, metus quis laoreet sagittis, augue elit fringilla risus, sit amet dignissim nulla purus vel metus. Suspendisse mollis varius lorem in feugiat. Aliquam facilisis posuere orci et tempor. Aenean pellentesque orci sit amet felis viverra tempor. In aliquam ex nisi, vel placerat odio tristique vel.</p>\r\n', '5ed11520d6ff3.jpg', 'dahiliye'),
(6, 'Hepatoloji', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In eget sapien odio. Donec vehicula iaculis vulputate. In venenatis dolor et tempor iaculis. Ut tempus nisl non vulputate dapibus. Vestibulum tempus nunc augue, a vulputate ex lacinia at. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc mauris neque, convallis at mattis malesuada, finibus non risus.</p>\r\n\r\n<p>Donec hendrerit a diam id porttitor. Donec sit amet finibus sapien, quis ultrices nisl. Ut at lacus imperdiet enim molestie egestas ac eu turpis. Quisque nunc urna, ullamcorper non purus in, blandit dignissim eros. Cras facilisis felis quis lectus sollicitudin posuere. Ut porta velit eu interdum aliquam. Nullam sit amet sollicitudin lectus, ut finibus dui. Phasellus nisl nunc, dapibus at mollis in, rhoncus ut neque. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Donec viverra felis in cursus pretium.</p>\r\n\r\n<p>Proin varius mi justo, nec condimentum enim sodales at. Proin tempus in augue id malesuada. Morbi at purus massa. In vel leo non ante pharetra fermentum nec cursus erat. Suspendisse quis varius odio. Phasellus lacinia ut nunc id malesuada. Morbi vitae massa et mauris efficitur facilisis. Ut in condimentum nisl.</p>\r\n\r\n<p>Quisque ipsum dolor, molestie in lacinia sed, convallis quis arcu. Maecenas interdum est eu augue maximus, aliquet pulvinar lectus ullamcorper. Phasellus accumsan, sem sit amet fringilla sagittis, eros felis accumsan magna, eget vehicula arcu purus at nisi. Proin facilisis lacus et lacus volutpat, euismod ornare risus venenatis. Quisque feugiat, erat sed faucibus vestibulum, lectus eros sollicitudin justo, vitae interdum arcu neque eu mauris. Aliquam ut urna lectus. Pellentesque pellentesque nisi in luctus volutpat. Quisque viverra urna vel aliquam vulputate. Ut non varius tellus. Phasellus accumsan, leo eu lacinia imperdiet, nisl leo posuere est, sit amet aliquet ex mi in arcu. Fusce congue cursus ornare. Integer ornare dolor non nunc posuere, faucibus mollis odio tincidunt. Integer vel urna eleifend, vulputate odio ut, posuere enim. Vivamus vitae enim dui. Nunc ex diam, rhoncus ac erat a, vestibulum dictum dolor.</p>\r\n\r\n<p>Donec quis euismod mauris. Proin ut tincidunt orci, eu suscipit tortor. Aenean auctor at justo id faucibus. Morbi vel enim vehicula, feugiat augue quis, scelerisque nisl. Maecenas elementum, metus quis laoreet sagittis, augue elit fringilla risus, sit amet dignissim nulla purus vel metus. Suspendisse mollis varius lorem in feugiat. Aliquam facilisis posuere orci et tempor. Aenean pellentesque orci sit amet felis viverra tempor. In aliquam ex nisi, vel placerat odio tristique vel.</p>\r\n', '5ed11567656f1.jpg', 'hepatoloji');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `settings`
--

CREATE TABLE `settings` (
  `settings_id` int(11) NOT NULL,
  `settings_description` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `settings_key` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `settings_value` text CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `settings_type` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `settings_must` int(3) NOT NULL,
  `settings_delete` enum('0','1') CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `settings_status` enum('0','1') CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `settings`
--

INSERT INTO `settings` (`settings_id`, `settings_description`, `settings_key`, `settings_value`, `settings_type`, `settings_must`, `settings_delete`, `settings_status`) VALUES
(1, 'Site Başlığı', 'title', 'Furkan KUBAT CMS Yönetim Paneli', 'text', 0, '0', '1'),
(2, 'Site Açıklama', 'description', 'CMS Açıklama Güncelleme', 'text', 1, '0', '1'),
(3, 'Site Logo', 'logo', '5ecece15e3bee.png', 'file', 2, '0', '1'),
(4, 'Fav Icon', 'icon', '5cd14ad1392fa.jpg', 'file', 4, '0', '1'),
(5, 'Anahtar Kelimeler', 'keywords', 'furkan, kubat, cms, admin', 'text', 5, '0', '1'),
(6, 'Telefon Numarası', 'phone', '0534 340 36 66', 'text', 10, '0', '1'),
(7, 'Mail Adresi', 'email', 'furkankubat135@gmail.com', 'text', 11, '0', '1'),
(9, 'İl', 'il', 'Bursa', 'text', 12, '0', '1'),
(10, 'Açık Adres', 'adres', '<p><strong>Script Medical<br />\r\nYıldırım/Bursa<br />\r\nTelefon: 0534 340 36 66</strong></p>\r\n', 'ckeditor', 13, '0', '1'),
(11, 'Facebook Hesabı', 'facebook', 'https://www.facebook.com/furkan.kubat.7330', 'text', 14, '0', '1'),
(12, 'Çalışma Saatleri', 'work_hours', '<p><strong>Pazartesi-Cuma:</strong> 08:30 - 17:00<br />\r\n<strong>Cumartesi:</strong> 09:30 - 13:00<br />\r\n<strong>Pazar:</strong> Kapalı</p>\r\n', 'ckeditor', 15, '0', '1'),
(17, 'Twitter Hesabı', 'twitter', 'www.twitter.çom', 'text', 16, '0', '1'),
(18, 'Site Sahibi', 'author', 'Furkan KUBAT', 'text', 6, '0', '1'),
(19, 'Copyright', 'copyright', 'Copyright © Furkan KUBAT 2020', 'text', 7, '0', '1'),
(20, 'Slogan', 'slogan', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, expedita, saepe, vero rerum deleniti beatae veniam harum neque nemo praesentium cum alias asperiores commodi.', 'text', 8, '0', '1'),
(21, 'Slogan Linki', 'slogan_url', '', 'text', 9, '0', '1'),
(22, 'Site Logo Text', 'logo_text', 'Furkan KUBAT', 'text', 3, '0', '1'),
(23, 'Anasayfa Reklam Alanı İçerik', 'home_01_content', '<h2><strong>Modern Business Features</strong></h2>\r\n\r\n<p>The Modern Business template by Start Bootstrap includes:</p>\r\n\r\n<ul>\r\n	<li><strong>Bootstrap v4</strong></li>\r\n	<li>jQuery</li>\r\n	<li>Font Awesome</li>\r\n	<li>Working contact form with validation</li>\r\n	<li>Unstyled page elements for easy customization</li>\r\n</ul>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, omnis doloremque non cum id reprehenderit, quisquam totam aspernatur tempora minima unde aliquid ea culpa sunt. Reiciendis quia dolorum ducimus unde.</p>\r\n', 'ckeditor', 18, '0', '1'),
(24, 'Anasayfa Reklam Alanı Görsel', 'home_01_file', '5cd57210754dc.png', 'file', 17, '0', '1'),
(25, 'Acil Durumlar', 'acil', '<p>05XX XXX XX XX</p>\r\n', 'ckeditor', 15, '0', '1'),
(26, 'Twitter Hesabı', 'twitter', 'https://twitter.com/furkankubat1654', 'text', 14, '0', '1'),
(27, 'LinkedIn Hesabı', 'linkedin', 'https://www.linkedin.com/in/furkan-kubat-441900194/', 'text', 14, '0', '1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sliders`
--

CREATE TABLE `sliders` (
  `sliders_id` int(11) NOT NULL,
  `sliders_title` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `sliders_baslik_bir` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `sliders_baslik_iki` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `sliders_baslik_uc` varchar(250) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `sliders_file` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `sliders_must` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `sliders`
--

INSERT INTO `sliders` (`sliders_id`, `sliders_title`, `sliders_baslik_bir`, `sliders_baslik_iki`, `sliders_baslik_uc`, `sliders_file`, `sliders_must`) VALUES
(9, 'Medical', '20 Yıl Seninle İlgileniyor', 'Uzmanlar', 'Bursa\'dayız', '5eced64c9b505.jpg', 0),
(12, 'Medical 2', 'Tıbbi randevu almak için şimdi bizimle konuşun', 'Tıbbi Randevu', 'Çevrim İçi veya Telefon Üzerinden', '5ed05918267b5.jpg', 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `users_id` int(11) NOT NULL,
  `users_namesurname` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `users_file` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `users_mail` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `users_pass` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `users_status` enum('0','1') CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `users_must` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`users_id`, `users_namesurname`, `users_file`, `users_mail`, `users_pass`, `users_status`, `users_must`) VALUES
(12, 'kullanici 2', '5cd53d626b73f.jpg', 'kullanici 2@kullanici 2.com', '81dc9bdb52d04dc20036dbd8313ed055', '1', 1);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`abouts_id`);

--
-- Tablo için indeksler `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admins_id`);

--
-- Tablo için indeksler `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`doctors_id`);

--
-- Tablo için indeksler `polyclinics`
--
ALTER TABLE `polyclinics`
  ADD PRIMARY KEY (`polyclinics_id`);

--
-- Tablo için indeksler `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`settings_id`);

--
-- Tablo için indeksler `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`sliders_id`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`users_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `abouts`
--
ALTER TABLE `abouts`
  MODIFY `abouts_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Tablo için AUTO_INCREMENT değeri `admins`
--
ALTER TABLE `admins`
  MODIFY `admins_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Tablo için AUTO_INCREMENT değeri `doctors`
--
ALTER TABLE `doctors`
  MODIFY `doctors_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Tablo için AUTO_INCREMENT değeri `polyclinics`
--
ALTER TABLE `polyclinics`
  MODIFY `polyclinics_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Tablo için AUTO_INCREMENT değeri `settings`
--
ALTER TABLE `settings`
  MODIFY `settings_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Tablo için AUTO_INCREMENT değeri `sliders`
--
ALTER TABLE `sliders`
  MODIFY `sliders_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `users_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
