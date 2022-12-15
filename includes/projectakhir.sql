-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2022 at 03:28 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectakhir`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(15) NOT NULL,
  `status` varchar(5) NOT NULL,
  `email` varchar(20) NOT NULL,
  `nomor` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `nama`, `username`, `password`, `status`, `email`, `nomor`) VALUES
(1, 'Udin Kalaga Manusia', 'udin', 'udin', 'admin', 'udin123@gmail.com', '086765546375'),
(2, 'Tartaglia', 'tatang', 'tatang', 'admin', 'tatang123@gmail.com', '086576539826'),
(3, 'admin', 'admin', 'admin', 'admin', 'admin123@gmail.com', '089876946571'),
(4, 'opang', 'nopal', 'nopal123', 'admin', 'nopal123@gmail.com', '08563649274');

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` int(11) NOT NULL,
  `judul` text NOT NULL,
  `genre` varchar(20) NOT NULL,
  `gambar` text NOT NULL,
  `konten` text NOT NULL,
  `mini_konten` text NOT NULL,
  `waktu` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `judul`, `genre`, `gambar`, `konten`, `mini_konten`, `waktu`) VALUES
(3, 'Matahari Terbit Dari Timur', '4', 'bg.jpg', 'Seperti diketahui di Bumi, Matahari terbit dari timur dan tenggelam di barat. Namun NASA mengungkap ada satu planet yang mengalami hal sebaliknya.\r\nBadan Antariksa Amerika Serikat (AS) itu mengatakan di Venus, Matahari terbit dari barat. Penyebabnya planet kedua di tata surya itu berputar pada porosnya ke belakang.\r\n\r\nTerungkap juga Venus berotasi dalam waktu yang lama, yakni 243 hari Bumi dalam satu kali putaran. Sementara untuk mengitari Matahari, Venus menghabiskan waktu 225 hari Bumi. Ini membuat satu hari di planet tersebut sedikit lebih lama dari satu tahun.\r\n\r\nLamanya hari dan tahun yang hampir serupa ini membuat pergantian hari di Venus tak sama seperti di Bumi. Matahari akan terbit per 117 hari Bumi sekali yang berarti hanya muncul dua kali dalam satu tahun di Venus.\r\n', 'Diketahui seseorang melihat matahari terbit dari barat, yang menyebabkan banyak orang berputus asa. 2022', '2022-12-13 22:42:00'),
(4, 'Harga Beras Naik', '3', 'beras1.jpg', 'Kenaikan harga beras di Aceh dalam beberapa hari terakhir ini dipicu karena sejumlah daerah penghasil padi terancam gagal panen. Selain karena dampak banjir di sejumlah kabupaten, masa panen di tiap daerah juga tak serentak.\r\nJika sebelumnya harga beras perkarung dijual seharga 135 ribu hingga 170 ribu rupiah, kini bahkan sekarung beras atau setara 15 kilogram dijual sekitar 190 ribu rupiah\r\nKenaikan harga beras per karung bisa mencapai 10 hingga 15 ribu rupiah. Meski harga beras naik namun permintaan beras semakin meningkat, karena di Aceh sedang perayaan Maulid Nabi secara besar-besaran. Diperkirakan stok beras masih bertahan hingga dua pekan ke depan.', 'Mengutip Panel Harga Bapanas, hari ini Minggu (05/12/2022) dinyatakan harga beras naik.', '2022-12-05 16:41:00'),
(5, 'Argentina Kalah Dari Arab Saudi', '1', 'argentina.jpg', 'Timas Arab Saudi berhasil membuat kejutan di pertandingan pertama grup C Piala Dunia 2022. Berhadapan dengan salah satu unggulan juara, Argentina, wakil Asia itu berhasil menang dengan skor 2-1.\r\n\r\nTimnas Argentina unggul lebih dahulu lewat penalti Lionel Messi di awal babak pertama. Di awal babak kedua, Arab Saudi berhasil membalikkan kedudukan berkat gol Saleh Al-Shehri dan Salem Al-Dawsari.\r\n\r\nBerkat kemenangan ini, Arab Saudi memuncaki klasemen sementara grup C Piala Dunia 2022. Sementara Argentina harus menempati dasar klasemen grup C.', 'Arab saudi berhasil mengalahkan argentina 2-1', '2022-12-01 19:30:00'),
(6, 'Rekor Adu Penalti Tim 8 Besar Piala Dunia 2022', '1', 'qatar.jpg', 'Sudah ada dua yang bisa melewatinya, yakni Kroasia dan Maroko. Kroasia menaklukkan Jepang 3-1 (1-1) dengan Maroko menghajar Spanyol 3-0 (0-0).\r\n\r\nHasil tersebut jadi bekal bagi mereka jika harus melewati situasi serupa di perempat final. Terutama bagi Kroasia, yang tercatat selalu meraih kemenangan pada adu penalti di Piala Dunia.\r\n\r\nTentu, tidak semua merasa demikian. Belanda dan Inggris bakal berjuang keras menghindari adu penalti karena terlalu sering merasakan kekecewaan.', 'Kroasia menaklukkan Jepang 3-1 (1-1) dengan Maroko menghajar Spanyol 3-0 (0-0)', '2022-12-09 21:42:00'),
(8, 'Evaluasi PBSI: Fajar Mesti Lebih Sabar', '1', 'fajarrian.jpg', 'PBSI memberikan sejumlah catatan kepada atlet-atletnya usai nirgelar di BWF World Tour Finals 2022. Anthony Ginting dan Fajar Alfian/Muhammad Rian Ardianto mesti bermain lebih sabar.\r\nDari tujuh wakil yang berlaga di Bangkok, hanya Anthony Ginting dan ganda putra veteran Hendra Setiawan/Mohammad Ahsan yang menembus final. Indonesia dipaksa gigit jari setelah Ginting menyerah dari Viktor Axelsen, dan the Daddies ditekuk Liu Yuchen/Ou Xuanyi.\r\n\r\nSedangkan Fajar Alfian/Muhammad Rian Ardianto tersingkir di semifinal. Berstatus sebagai unggulan teratas, Fajar/Rian kandas usai takluk tiga gim dari Liu/Ou.\r\n\r\nMeski begitu, Gregoria Mariska Tunjung dan pasangan Rinov Rivaldy/Pitha Haningtyas Mentari menunjukkan performa menjanjikan. Gregoria sukses mengalahkan Chen Yufei, meski gagal lolos usai finis terbawah di grup. Sementara Rinov/Pitha secara mengejutkan mampu menembus semifinal.', 'PBSI memberikan sejumlah catatan kepada atlet-atletnya usai nirgelar di BWF World Tour Finals 2022.', '2022-12-14 14:03:00'),
(9, 'Hasil Piala Dunia 2022 Maroko vs Portugal', '1', 'maroko.jpg', 'Pertandingan yang digelar di Al Thumama Stadium ini dimulai dengan tempo sedang. Kedua tim sama-sama berhati-hati untuk membangun serangan mereka.\r\n\r\nPerlahan tapi pasti, Portugal mulai mendominasi penguasaan bola. Namun anak asuh Fernando Santos itu kesulitan untuk menembus pertahanan rapat Maroko.\r\n\r\nPeluang berbahaya pertama di laga ini baru tercipta di menit ke-30 berkat tembakan keras Joao Felix. Namun bola melenceng dari gawang Maroko karena bola mengenai barisan pertahanan Maroko.\r\n\r\nAsik menyerang, gawang Portugal justru jebol terlebih dahulu di menit ke-42. Adalah Youssef En-Nesyri mencatatkan namanya di papan skor setelah umpan silang Yahia Attiyat Allah disambar sang striker dengan tandukannya di depan gawang Portugal. Skor berubah menjadi 1-0 untuk keunggulan Maroko.\r\n\r\nTertinggal 1-0, Portugal langsung meningkatkan intensitas serangan mereka. Tiga menit berselang, Bruno Fernandes nyaris menyamakan kedudukan melalui tembakannya dari sisi kanan, namun sayang tembakannya itu membentur mistar gawang Maroko.\r\n\r\nHingga wasit meniupkan peluit tanda berakhirnya babak pertama, Maroko masih mempertahankan keunggulan mereka dengan skor 1-0.', 'Peluang berbahaya pertama di laga ini baru tercipta di menit ke-30 berkat tembakan keras Joao Felix.', '2022-12-14 14:26:00'),
(10, 'Jerman Vs Jepang di Piala Dunia 2022', '1', 'jepang.jpg', 'Pertandingan Jerman vs Jepang dijadwalkan berlangsung di Khalifa International Stadium malam ini pukul 20.00 WIB.  Dilansir dari FIFA, ini adalah pertemuan pertama antara Jerman dan Jepang di turnamen internasional. Sebelumnya, kedua tim berhadapan dalam laga persahabatan.  Der Panzer, julukan timnas Jerman, menang 3-0 pada 2004, sebelum bermain imbang 2-2 pada pertemuan terakhir dengan Jepang pada 2006. \r\n\r\n“Kami tahu bahwa Jepang adalah tim yang sangat disiplin, tetapi mereka juga memiliki pemain yang sangat terampil secara teknis,\" kata bek Jerman, Thilo Kehrer, dilansir dari FIFA. \"Mereka memiliki kualitas dan mereka adalah tim yang kompak dan dinamis. Namun, kami juga menyadari kekuatan kami sendiri,\" ucapnya.  Sementara itu, penyerang Jepang, Kaoru Mitoma, menilai Jerman tetap punya kelemahan meski menjadi salah satu tim terbaik di dunia.  \"Tentu saja Jerman adalah salah satu tim terbaik di dunia, tetapi mereka memiliki kelemahan, jadi kami harus siap menghadapi mereka. Jika kami bekerja sama, kami bisa menang,\" katanya.', 'Pertandingan Jerman vs Jepang dijadwalkan berlangsung di Khalifa International Stadium malam ini pukul 20.00 WIB. ', '2022-12-02 22:40:00'),
(11, 'AS Tuntaskan Rencana Pengiriman Rudal Patriot ke Ukraina', '4', 'ukraine.jpg', 'Amerika Serikat (AS) sedang menyelesaikan rencana untuk mengirim sistem pertahanan rudal Patriot ke Ukraina. Sebuah keputusan yang dapat diumumkan paling cepat pekan ini, kata tiga orang pejabat AS, Selasa (13/12/2022). Lenacir CNA, Ukraina telah meminta mitra Barat-nya untuk pertahanan udara, termasuk sistem Patriot buatan AS, untuk melindunginya dari pemboman berat rudal Rusia – serta infrastruktur energinya. Sistem pertahanan udara berbasis darat seperti Patriot Raytheon Technology Corp dibangun untuk mencegat rudal yang masuk.\r\nDua pejabat, yang berbicara tanpa menyebut nama, mengatakan pengumuman itu bisa dilakukan paling cepat Kamis (15/12/2022), tetapi menunggu persetujuan resmi dari Menteri Pertahanan AS Lloyd Austin dan Presiden Joe Biden. Mantan Presiden Rusia Dmitry Medvedev telah memperingatkan NATO agar tidak memberi Ukraina p rudal pertahanan Patriot, dan kemungkinan Moskow akan melihat dukungan pertahanan sebagai eskalasi.\r\n', 'Amerika sedang menyelesaikan rencana untuk mengirim sistem pertahanan rudal Patriot ke Ukraina.', '2022-12-09 18:40:00'),
(12, 'Covid-19 Mengganas di China, Rusia Invasi Ukraina', '4', 'kebakaran.jpg', 'Perang Rusia versus Ukraina, tragedi Itaewon di Korea Selatan, runtuhnya jembatan di Gujarat India, hingga kebijakan Nol-Covid-19 Xi Jinping di China adalah peristiwa global yang menyedot perhatian sepanjang 2022. Selain peristiwa kemanusiaan yang menelan korban tewas dalam jumlah besar, ada juga kejadian yang bersifat “prestasi” di antaranya Indonesia sukses menggelar Presidensi KTT G20 di Bali. Selain itu, Qatar menggelar Piala Dunia 2022. Ini pertama kali negara di kawasan Timur Tengah menjadi tuan rumah pertandingan sepak bola bertaraf internasional. Selain itu, dari Chin, kebijakan Nol-Covid Presiden Xi Jinping menuai protes dan demo di dalam negeri maupun di luar negeri. Demo dalam skala besar membuat kericuhan terjadi seperti di pabrik iPhone Foxconn.', 'Demo dalam skala besar membuat kericuhan terjadi seperti di pabrik iPhone Foxconn.', '2022-12-11 17:26:00'),
(13, 'Pasukan Rusia-Donbass Maju ke Garis Pertempuran', '4', 'rusia.jpg', 'Pada 21 Februari 2022, Presiden Vladimir Putin mengumumkan bahwa Moskow mengakui kedaulatan Republik Rakyat Donetsk dan Lugansk. Rusia menandatangani perjanjian tentang persahabatan, kerja sama, dan bantuan timbal balik dengan para pemimpin mereka. Moskow mengakui republik Donbass sesuai dengan konstitusi DPR dan LPR dalam batas-batas Wilayah Donetsk dan Lugansk pada awal 2014. Presiden Putin mengumumkan pada 24 Februari 2022, bahwa sebagai tanggapan atas permintaan bantuan dari Kepala Republik Donbass, dia telah memutuskan untuk melakukan operasi militer khusus di Ukraina. DPR dan LPR meluncurkan operasi untuk membebaskan wilayah mereka di bawah kendali Kiev.', 'Presiden Vladimir Putin mengumumkan bahwa Moskow mengakui kedaulatan Republik Rakyat Donetsk dan Lugansk.', '2022-02-21 14:50:00'),
(14, 'Volodymyr Zelensky Minta Warga Ukraina Tabah Lalui Musim Dingin dalam Gelap', '4', 'zelen.jpg', 'Presiden Ukraina Volodymyr Zelensky meminta warga Ukraina supaya bersabar dan kuat dalam menghadapi kerasnya musim dingin. Pemerintah Ukraina terus berupaya untuk memulihkan listrik dan layanan lainnya yang hancur dalam serangan udara Rusia.\r\n\r\n\"Untuk melewati musim dingin ini, kita harus lebih tangguh dan lebih bersatu dari sebelumnya. Kita tidak dapat membiarkan konflik dan pemogokan internal apa pun yang dapat melemahkan kita semua, bahkan jika seseorang di luar sana berpikir bahwa itu akan memperkuat dirinya secara pribadi,\" kata Zelensky dalam pidato rutin pada Minggu malam, 4 Desember 2022.', 'Presiden Ukraina Volodymyr Zelensky meminta warga Ukraina supaya bersabar dan kuat dalam menghadapi kerasnya musim dingin', '2022-12-04 20:50:00'),
(15, 'Tekno Mahasiswa UGM Petakan Area Gempa Cianjur', '3', 'gempa2.jpg', 'Tim dari Departemen Teknik Geodesi Fakultas Teknik Universitas Gadjah Mada (UGM) berhasil melakukan pemetaan area terdampak gempa bumi di Cianjur, Jawa Barat, menggunakan GNSS tipe Geodetic dan pesawat nirawak/UAV VTOL P330.\r\n\r\nBekerja sama dengan Tim Reaksi Cepat (TRC) Fakultas Teknik UGM, tim melakukan pemetaan di wilayah yang paling terdampak gempa. Tim yang dipimpin oleh Ruli Andaru melakukan pemetaan sejak 7-9 Desember 2022  dengan GNSS tipe Geodetic dan pesawat nirawak/UAV VTOL P330 yang membawa sensor kamera dengan resolusi 40 Mp dan sensor portable Lidar.\r\n\r\n“Kegiatan ini kita lakukan untuk memetakan dampak kerusakan bangunan dan fasilitas umum akibat gempa, menganalisis pergerakan tanah, penentuan area relokasi hunian warga,”  jelasnya dilansir dari laman resmi UGM pada Selasa, 13 Desember 2022.', 'Bekerja sama dengan Tim Reaksi Cepat (TRC) Fakultas Teknik UGM', '2022-12-13 07:00:00'),
(16, 'Krisis Air Besih', '3', 'air.jpg', 'Ratusan pengungsi korban gempa Cianjur di Kampung Sukawarna RT 01 RW 09, Desa Sarampad, Kecamatan Cugenang Kabupaten Cianjur, Jawa Barat, mengalami krisis air bersih dan sanitasi.\r\n\r\nSudah lebih dua pekan sejak terjadinya gempa Cianjur, ratusan warga pengungsi itu melakukan aktivitas buang air besar dan kecil di sebuah lahan kosong tanpa fasilitas WC umum dan MCK.\r\n\r\nSeorang pengungsi, Endo, 50 tahun, menyebutkan, terdapat 146 kepala keluarga terdampak gempa yang menempati tenda pengungsian tersebut. Menurut Endo, saat ini pengungsi hanya menggunakan fasilitas toilet seadanya tanpa dilengkapi sarana air bersih.\r\n\r\n\"WC seadanya hanya berdinding material seng bekas reruntuhan, tanpa ada air bersih. Kondisi ini sudah terjadi sejak hari pertama gempa,\" kata Endo kepada wartawan, Senin 12 Desember 2022.\r\n\r\nAkibat tidak ada fasilitas sanitasi dan air bersih, kata Endo, ratusan pengungsi mulai mengeluhkan gatal-gatal dan sakit lainnya seperti batuk, flu dan diare.\r\n\r\n\"Terdapat sekitar 20 tenda yang ditempati pengungsi. Mereka sudah keluhkan gatal-gatal, karena tidak adanya pasokan air bersih dan sarana toilet yang layak,\" jelasnya.', 'Kecamatan Cugenang Kabupaten Cianjur, Jawa Barat, mengalami krisis air bersih dan sanitasi.', '2022-12-13 08:56:00'),
(17, 'BMKG Rekomendasikan Rekonstruksi Bangunan Tahan Gempa Usai Gempa Cianjur', '3', 'bmkg.jpg', 'Badan Meteorologi Klimatologi dan Geofisika (BMKG) mencatat hingga 2 Desember ada sebanyak 374 kali gempa susulan yang terjadi usai gempa Cianjur, Jawa Barat. Terkait hal ini, Kepala BMKG Dwikorita Karnawati, Jumat (2 /12) menyatakan telah memberikan sejumlah masukan, salah satunya merekomendasikan rekonstruksi bangunan tahan gempa.', 'ada sebanyak 374 kali gempa susulan yang terjadi usai gempa Cianjur', '2022-12-01 15:00:00'),
(18, 'Jokowi Tinjau Kesiapan Relokasi Warga Korban Gempa Cianjur', '3', 'joko.jpg', 'Presiden Joko Widodo, Senin (5/12), kembali menjenguk para pengungsi korban gempa Cianjur yang berada di Posko Bantuan Paspampres Peduli Cianjur, Desa Cijedil, Kecamatan Cugenang, Kabupaten Cianjur, Jawa Barat. Selain memastikan kondisi para pengungsi dalam keadaan baik, Jokowi juga memastikan bahwa bantuan bagi rumah warga terdampak yang bukan relokasi akan diberikan mulai 8 Desember 2022. (Afra Augesti/Egan Suryahartaji/Rizky Bagus Dhermawan/Farah Khadija)', 'Presiden Joko Widodo, Senin (5/12), kembali menjenguk para pengungsi korban gempa Cianjur', '2022-12-05 15:00:00'),
(19, 'Rilisnya Game Cursed Mansion Garapan Dragon Emperor', '2', 'waifu.jpg', 'UPoint Games mengumumkan bahwa mereka akan merilis game baru pada tahun 2023, dengan judul Cursed Mansion garapan developer games asal Bandung, Dragon Emperor. Game dengan tema Horror Pixel Art 2D ini akan dirilis secara global serentak pada 13 Januari 2023 mendatang untuk platform PC melalui Steam. Game ini menggunakan bahasa Inggris, dan nantinya akan tersedia dalam 3 bahasa tambahan, yakni Jepang, Korea, dan Mandarin.', 'UPoint Games mengumumkan bahwa mereka akan merilis game baru pada tahun 2023', '2022-12-15 15:09:00'),
(20, 'Crossover Fortnite x Boku no Hero Academia akan Mulai', '2', 'bnh.jpg', 'Fortnite telah melakukan kolaborasi dengan beberapa anime seperti Naruto dan Dragon Ball. Namun tampaknya Epic Games masih ingin lebih dimana mereka mengumumkan melalui trailer Fortnite Chapter 4 Season 1 kalau game ini akan mendapatkan kolaborasi terbarunya dengan anime populer, yaitu My Hero Academia (Boku no Hero Academia).\r\n\r\nMelalui trailer di atas, terlihat salah satu karakter dan tokoh utama dari Boku no Hero Academia, Izuku Midoriya alias Deku muncul sambil menggunakan kekuatannya \"One For All\". Akun Twitter resmi Fortnite pun mengumumkan bahwa kolaborasi ini akan mulai pada 16 Desember 2022.', 'Fortnite telah melakukan kolaborasi dengan beberapa anime seperti Naruto dan Dragon Ball', '2022-12-04 20:11:00'),
(21, 'Pokemon Festival Jakarta', '2', 'pika.jpg', 'Pada Community Day yang merupakan bagian dari rangkaian Pokemon Festival: Jakarta tersebut, para Pelatih akan dimanjakan dengan berbagai keuntungan, termasuk berbagai bonus dan peluang menemukan berbagai karakter Pokemon yang langka.\r\n\r\nSelama Community Day di Pokemon Festival: Jakarta berlangsung, tingkat kemunculan Pokemon di alam liar akan menjadi lebih lebih sering. Demikian pula dengan kesempatan untuk mengikuti Penelitian Berwaktu. Pada Community Day, para Pelatih juga dapat menantikan momen berharga seperti; Pokemon yang ditampilkan pada Community Day sepanjang tahun 2021 akan menetas dari Telur dan muncul dalam raid dan Penelitian Berwaktu.\r\n\r\nDiadakannya Community Day pada Pokemon Festival: Jakarta membuat para Pelatih memiliki kesempatan untuk mengakhiri tahun dengan menyenangkan. Menyenangkan karena mereka dapat menikmati waktu bersama teman-teman dan keluarga sambil menangkap Pokemon.', 'Pokemon Festival: Jakarta, Desember 2022, para Trainer dapat menikmati kembalinya karakter-karakter Pokemon pilihan dari Hari Komunitas (Community Day) 2021 dan 2022 yang telah lalu', '2022-06-16 15:14:00'),
(22, 'Xiaomi 13 dan 13 Pro Resmi Dirilis di Tiongkok', '2', 'sio.jpg', 'Setelah mengalami penundaan, akhirnya Xiaomi mengumumkan seri andalan terbarunya, yaitu seri Xiaomi 13 dan 13 Pro. Kedua smartphone ini berjalan dengan chipset terbaru dan terkencang dari Qualcomm, yaitu Snapdragon 8 Gen 2 yang dibuat berdasarkan proses manufaktur 4nm TSMC. Tidak berhenti disitu, kedua perangkat ini menawarkan desain baru untuk modul kameranya yang dikerjakan bersama dengan brand besar Leica. Meski ini masih peluncuran untuk China saja, tapi tampaknya akan segera dirilis secara global untuk waktu yang belum diketahui.\r\n\r\nSeri Xiaomi 13 mengusung layar AMOLED 6,36 inci yang memiliki resolusi Full HD Plus, refresh rate 120 Hz, dan tingkat kecerahan maksimal 1.900 nits. Layar ini juga mendukung fitur Dolby Vision hingga HDR10+ untuk meningkatkan pengalaman menonton. Pada bagian tengah atas layar, terdapat kamera selfie yang dimuat dalam lubang kamera (punch hole) dengan resolusi 32 MP (f/2.0). Pada bagian belakang Xiaomi 13, diisi dengan tiga buah kamera yang ditampung dalam modul persegi yang terlihat cukup fresh. Ketiga kamera ini terdiri dari kamera utama 50 MP (f/1.8, OIS), kamera telephoto 10 MP (f/2.0, 3,2x optical zoom), dan kamera ultrawide 12 MP (f/2.2, bidang pandang 120 derajat)', 'Xiaomi mengumumkan seri andalan terbarunya, yaitu seri Xiaomi 13 dan 13 Pro', '2022-12-09 18:20:00'),
(23, 'Game PC Elden Ring', '2', 'elder.jpg', 'Elden Ring bisa dikategorikan sebagai game dengan gameplay yang cukup sulit. Meski begitu game ini sangat populer dikalangan gamer. Gameplay yang sulit itu justru menjadi daya tarik bagi gamer untuk memainkan game ini. Banyak sekali player yang berusaha menyelesaikan game ini dengan cepat, atau dikenal dengan istilah Speed Run.\r\nKarena kepopulerannya itu, game open-world dark-fantasy RPG dari FromSoftware ini layak mendapatkan titel Game of the Year 2022. Dengan konsep game open-world dan memiliki grafis yang indah tentu saja ada spesifikasi pc tertentu yang harus disiapkan jika ingin memainkan Elden Ring.', 'Elden Ring bisa dikategorikan sebagai game dengan gameplay yang cukup sulit', '2022-02-02 18:18:00');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_k` int(11) NOT NULL,
  `kategoriF` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_k`, `kategoriF`) VALUES
(1, 'Olahraga'),
(2, 'Hiburan'),
(3, 'Nasional'),
(4, 'Internasional');

-- --------------------------------------------------------

--
-- Table structure for table `sortir`
--

CREATE TABLE `sortir` (
  `id` int(11) NOT NULL,
  `sortirF` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sortir`
--

INSERT INTO `sortir` (`id`, `sortirF`) VALUES
(1, 'Terbaru'),
(2, 'Terlama');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_k`);

--
-- Indexes for table `sortir`
--
ALTER TABLE `sortir`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_k` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `sortir`
--
ALTER TABLE `sortir`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
