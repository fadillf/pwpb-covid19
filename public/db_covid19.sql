-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2020 at 02:21 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_covid19`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_05_17_233034_create_table_kategori', 2),
(5, '2020_05_17_233342_create_table_artikel', 2),
(6, '2020_05_20_202844_update_table_artikel', 3),
(7, '2020_05_21_220723_update_table_users', 3),
(8, '2020_05_30_170704_create_table_rs', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `table_artikel`
--

CREATE TABLE `table_artikel` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `table_artikel`
--

INSERT INTO `table_artikel` (`id`, `judul`, `slug`, `isi`, `gambar`, `kategori_id`, `created_at`, `updated_at`) VALUES
(9, 'Virus Corona (COVID-19)', 'virus-corona-covid-19', '<h2>Virus Corona (COVID-19)</h2><p>&nbsp;</p><p>Infeksi virus&nbsp;Corona disebut COVID-19 (<i>Corona Virus Disease 2019</i>) dan pertama kali ditemukan di kota Wuhan, China pada akhir Desember 2019. Virus ini menular dengan sangat cepat dan telah menyebar ke&nbsp;hampir semua&nbsp;negara, termasuk Indonesia, hanya dalam waktu beberapa bulan.</p><p>Hal&nbsp;tersebut membuat beberapa negara menerapkan kebijakan untuk memberlakukan <a href=\"https://www.alodokter.com/memahami-istilah-lockdown-yang-mencuat-di-tengah-pandemi-virus-corona\"><i>lockdown</i></a><i> </i>dalam rangka mencegah penyebaran virus Corona. Di Indonesia sendiri, diberlakukan&nbsp;kebijakan Pembatasan Sosial Berskala Besar (PSBB) untuk menekan penyebaran virus ini.</p><p>Coronavirus adalah kumpulan virus yang bisa menginfeksi sistem pernapasan. Pada banyak kasus, virus ini hanya menyebabkan infeksi pernapasan ringan, <a href=\"https://www.alodokter.com/tampak-mirip-ketahui-beda-gejala-virus-corona-dengan-flu-biasa\">seperti flu</a>. Namun, virus ini juga bisa menyebabkan infeksi pernapasan berat, seperti infeksi paru-paru (pneumonia).</p><p>Selain virus SARS-CoV-2 atau virus Corona,<strong>&nbsp;</strong>virus yang juga termasuk dalam kelompok ini adalah&nbsp;virus penyebab&nbsp;<i>Severe Acute Respiratory Syndrome</i>&nbsp;(<a href=\"https://www.alodokter.com/sars\">SARS</a>) dan virus penyebab&nbsp;<i>Middle-East Respiratory Syndrome</i>&nbsp;(<a href=\"https://www.alodokter.com/mers\">MERS</a>).&nbsp;Meski disebabkan oleh virus dari kelompok yang sama, yaitu coronavirus, COVID-19 memiliki beberapa&nbsp;<a href=\"https://www.alodokter.com/ketahui-perbedaan-covid-19-dengan-sars-dan-mers\">perbedaan dengan SARS dan MERS</a>,&nbsp;antara lain&nbsp;dalam hal kecepatan penyebaran dan keparahan gejala.</p><h3><strong>Tingkat Kematian Akibat Virus Corona (COVID-19)</strong></h3><p>Menurut data yang dirilis Gugus Tugas Percepatan Penanganan COVID-19 Republik Indonesia, jumlah kasus terkonfirmasi positif hingga 26 Mei 2020 adalah 22.750 orang dengan jumlah kematian 1.391 orang.</p><p>Dari kedua angka ini dapat disimpulkan bahwa <i>case fatality rate</i> atau tingkat kematian yang disebabkan oleh COVID-19 di Indonesia adalah sekitar 6,1%. <i>Case fatality rate</i> adalah presentase jumlah kematian dari seluruh jumlah kasus positif COVID-19 yang sudah terkonfirmasi dan dilaporkan.</p><p>Merujuk pada data tersebut, tingkat kematian (<i>case fatality rate</i>) berdasarkan kelompok usia adalah sebagai berikut:</p><ul><li>0–5 tahun: 2,3%</li><li>6-17 tahun: 0,65%</li><li>18–30 tahun: 0.9%</li><li>31–45 tahun: 2,52%</li><li>46-59 tahun: 8,83%</li><li>&gt;60 tahun: 17,32%</li></ul><p>Dari seluruh penderita COVID-19 yang meninggal dunia, 0,8% berusia 0–5 tahun, 0,6% berusia 6–17 tahun, 3,2% berusia 18–30 tahun, 12,1% berusia 31–45 tahun, 40,2% berusia 46–59 tahun, dan 43,1% berusia 60 tahun ke atas. Dari data tersebut bisa disimpulkan bahwa risiko kematian pada pasien COVID-19 yang berusia di bawah 50 tahun <a href=\"https://www.alodokter.com/covid-19-tidak-mematikan-bagi-sebagian-besar-orang-berusia-di-bawah-50-tahun\">lebih rendah</a> jika dibandingkan pasien yang sudah berusia lanjut.</p><p>Sedangkan berdasarkan jenis kelamin, 63,4% penderita yang meninggal akibat COVID-19 adalah laki-laki dan 36,6% sisanya adalah perempuan.</p><h3><strong>Gejala Virus Corona (COVID-19)</strong></h3><p><a href=\"https://www.alodokter.com/kenali-gejala-orang-terinfeksi-virus-corona-di-minggu-pertama\">Gejala awal</a> infeksi virus Corona atau COVID-19 bisa&nbsp;menyerupai&nbsp;gejala flu,&nbsp;yaitu demam, pilek, batuk kering,&nbsp;<a href=\"https://www.alodokter.com/usir-radang-tenggorokan-akut-lebih-cepat-dengan-cara-berikut\">sakit tenggorokan</a>, dan sakit kepala. Setelah itu, gejala dapat hilang dan sembuh atau malah memberat.&nbsp;Penderita dengan gejala yang berat bisa mengalami demam tinggi, batuk berdahak bahkan berdarah, sesak napas, dan nyeri dada. Gejala-gejala tersebut muncul ketika <a href=\"https://www.alodokter.com/ini-reaksi-tubuh-saat-terinfeksi-virus-corona\">tubuh bereaksi melawan virus Corona</a>.</p><p>Secara umum, ada 3 gejala umum yang bisa menandakan seseorang terinfeksi virus Corona, yaitu:</p><ul><li><a href=\"https://www.alodokter.com/demam\">Demam</a>&nbsp;(suhu tubuh di atas 38 derajat Celsius)</li><li>Batuk kering</li><li><a href=\"https://www.alodokter.com/kenali-penyebab-nafas-pendek\">Sesak napas</a></li></ul><p>Ada beberapa gejala lain yang juga bisa muncul pada infeksi virus Corona&nbsp;meskipun lebih jarang, yaitu:</p><ul><li>Diare</li><li>Sakit kepala</li><li><a href=\"https://www.alodokter.com/konjungtivitis\">Konjungtivitis</a></li><li>Hilangnya kemampuan mengecap rasa atau mencium bau</li><li>Ruam di kulit</li></ul><p>Gejala-gejala COVID-19 ini umumnya muncul dalam waktu 2 hari sampai 2 minggu setelah penderita terpapar virus Corona.</p><h4><strong>Kapan harus ke dokter</strong></h4><p>Segera lakukan <a href=\"https://www.alodokter.com/bantu-cegah-penyebaran-covid-19-inilah-protokol-isolasi-mandiri-yang-perlu-diterapkan\">isolasi mandiri</a> bila Anda mengalami gejala infeksi virus Corona (COVID-19) seperti yang telah disebutkan di atas, terutama jika dalam 2 minggu terakhir Anda berada di daerah yang memiliki kasus COVID-19 atau kontak dengan penderita COVID-19. Setelah itu, hubungi&nbsp;<i>hotline </i>COVID-19 di 119 Ext. 9 untuk mendapatkan pengarahan lebih lanjut.</p><p>Bila Anda mungkin terpapar virus Corona&nbsp;tapi tidak mengalami gejala apa pun, Anda tidak perlu <a href=\"https://www.alodokter.com/antisipasi-corona-kapan-harus-memeriksakan-diri-ke-rumah-sakit\">memeriksakan diri ke rumah sakit</a>, cukup tinggal di rumah selama 14 hari dan membatasi kontak dengan orang lain. Bila muncul gejala, baru lakukan isolasi mandiri dan tanyakan kepada dokter melalui telepon atau aplikasi mengenai tindakan apa yang perlu Anda lakukan dan obat apa yang perlu Anda konsumsi.</p><p>&nbsp;</p><p>&nbsp;</p>', 'covid1.JPG', 4, '2020-05-31 11:46:54', '2020-05-31 11:46:54'),
(10, 'Tips terlindung dari Covid-19', 'tips-terlindung-dari-covid-19', '<p><strong>Tips terlindung dari Covid-19</strong></p><p>&nbsp;</p><p>Virus corona menyebar saat orang terinfeksi batuk dan menyebarkan percikan atau cipratan yang mengandung virus ke udara.</p><p>Ini bisa terhirup masuk atau menyebabkan infeksi jika anda menyentuh mata, hidung atau mulut dengan tangan yang menyentuh permukaan tempat virus jatuh.</p><p>Menurut Organisasi Kesehatan Dunia, WHO, hal yang paling penting mencegah penularan adalah menjaga kebersihan.</p><ul><li>Sering cuci tangan dengan sabun dan air atau dengan gel pembersih. Langkah ini dapat membunuh virus di tangan.</li><li>Jangan menyentuh mata, hidung, mulut. Tangan yang menyentuh banyak permukaan dapat membawa virus. Dari situ, virus masuk ke tubuh bila Anda menyentuh wajah.</li><li>Tutup mulut bila batuk dan bersin.</li><li>Tidak menyentuh muka dengan tangan dan hindari kotak langsung dengan orang yang terinfeksi.</li><li>Buang tisu bekas bersin segera. Ini untuk menghindari air liur yang mengandung virus menyebar ke orang lain</li><li>Orang diminta menjaga jarak paling tidak dua meter, kira-kira dua kali bentangan tangan satu sama lain.</li><li>Bila kita di luar, WHO mengatakan penting untuk menghindari berjabat tangan dan \"menyapa dengan aman\" seperti melambaikan tangan atau mengangguk.</li></ul><p>Saat penularan tinggi ketika orang menunjukkan gejala.</p><p>Virus corona menginfeksi paru-paru. Gejala dimulai dengan demam diikuti batuk kering yang kemudian mengganggu pernapasan.</p><p>Batuk berlangsung terus menerus, lebih dari satu jam, atau ada tiga atau lebih serangan batuk dalam 24 jam – terutama kalau batuknya lebih parah daripada biasanya.</p><p>Rata-rata memakan waktu lima hari untuk mulai memperlihatkan gejala, kata para ilmuwan. Namun pada beberapa orang gejala bisa terlihat lebih lama lagi.</p><p>WHO malah mengatakan masa inkubasi penyakit bisa berlangsung 14 hari.</p><p>Spesialis THT di Inggris juga memperhatikan ada peningkatan gejala anosmia – istilah untuk kehilangan indera penciuman.</p><p>Sejumlah orang di media sosial melaporkan kehilangan indera penciuman dan perasa. Beberapa di antara yang melaporkan ini telah dites positif terinfeksi virus corona.</p><p>Namun, bukti menunjukkan ini hanya terjadi sesekali. Lagipula flu biasa juga menyebabkan kehilangan indera penciuman dan perasa.</p><p>Saat paling menular adalah ketika orang terinfeksi memperlihatkan gejala.</p><p>Namun ada pandangan bahwa penyebaran juga terjadi bahkan sebelum tampak gejala sakit.</p><p>Gejala awal sangat mudah tertukar dengan gejala pilek dan flu biasa.</p>', '3e9fa6f5-dcf4-4a3b-8800-dd37c54d4de6.jpeg', 6, '2020-05-31 11:50:05', '2020-05-31 11:50:05'),
(11, 'Berita Harian Covid-19 Indonesia', 'berita-harian-covid-19-indonesia', '<p>Jumlah pasien positif Covid-19 akibat infeksi virus <a href=\"https://www.liputan6.com/news/read/4252432/kisah-pilu-amin-tercekik-wabah-corona-tanpa-uang-dan-obat-untuk-bertahan-hidup\">Corona</a> yang sembuh terus bertambah. Juru Bicara Pemerintah untuk Penanganan Covid-19, Achmad Yurianto mengatakan, 239 orang dinyatakan sembuh pada Minggu (31/5/2020) saja.</p><p>\"Kita lihat bahwa penyakit ini bisa disembuhkan. Kita lihat bahwa 293 orang yang sembuh adalah kelompok usia 29-45 tahun artinya pada kelompok ini kita bisa berharap optimistis,\" kata Yuri saat konferensi pers di kantor BNPB, Minggu (31/5/2020).</p><p>Sementara itu, jumlah akumulatif pasien Covid-19&nbsp;yang sembuh hingga hari ini sebanyak 7.308 orang.</p><p>Namun, ada 40 orang pasien <a href=\"https://www.liputan6.com/news/read/4252432/kisah-pilu-amin-tercekik-wabah-corona-tanpa-uang-dan-obat-untuk-bertahan-hidup\">Corona</a> meninggal pada hari ini, sehingga total menjadi 1.613 orang.</p><p>Kasus ODP ada 49.936 dan sebagian besar sudah selesai dilakukan pemantauan. Kemudian kasus PDP ada 12.913 orang.&nbsp;Untuk pasien positif Covid-19 yang meninggal bertambah 40 orang pada hari ini, sehingga total menjadi 1.613 kasus meninggal.</p><p>&nbsp;</p><h4>4 Provinsi Nihil Kasus Baru</h4><p>Gugus tugas juga mencatat kasus ODP terkait Covid-19 mencapai 49.936 dan sebagian besar sudah selesai dilakukan pemantauan. Kemudian kasus PDP ada 12.913 orang.</p><p>Yuri juga mengatakan, berdasarkan laporan yang diterima, terdapat provinsi yang tak melaporkan adanya penambahan kasus positif Corona. Keempat provinsi itu yakni, Aceh, Jambi, Kalimantan Utara, dan Riau.</p>', '047107300_1590919904-WhatsApp_Image_2020-05-31_at_16.41.38.jpeg', 5, '2020-05-31 11:54:06', '2020-05-31 11:54:06'),
(12, 'Dunia Menanti VAKSIN Corona', 'dunia-menanti-vaksin-corona', '<p><strong>Jakarta</strong> -Menteri BUMN <a href=\"https://www.detik.com/tag/erick-thohir\">Erick Thohir</a> mengungkapkan, BUMN PT Bio Farma (Persero) bekerja sama dengan sejumlah pihak untuk membuat <a href=\"https://www.detik.com/tag/vaksin-corona\">vaksin Corona</a>. Mereka, antara lain, Sinovac Biotech Ltd, The Coalition for Epidemic Preparedness Innovations (CEPI), dan lain-lain.</p><p>\"Bio Farma dari 2 bulan yang lalu kita coba mencari solusi, kita bicara dengan pihak Sinovac China, CEPI organisasi internasional di eropa. Kita juga bekerja sama pihak Menteri Kesehatan, BPPT untuk bersama lembaga Eijkman untuk melihat vaksin ini,\" ujarnya dalam sebuah webinar, Selasa lalu (26/5/2020).</p><p>Erick mengatakan, kemungkinan vaksin itu ditemukan tahun depan.</p><p>&nbsp;</p><p>\"Ini yang jangan jadi <i>pressure</i>, tetapi kemungkinan kalau kita juga menemukan vaksin itu nanti, itu baru kuartal I sampai kuartal IV 2021,\" ujarnya.</p><p>Dengan begitu, ada rentang waktu untuk menuju penemuan vaksin itu. Maka, new normal disiapkan sebelum vaksin itu ketemu.</p><p>\"Ini yang kenapa, tadi, sembari kita harus bicara new normal juga ada stepnya, new normal yang mana, justru yang kita tantang new normal sebelum ada vaksin ini. Karena jangan dulu kita bicara \'O nanti kalau ada vaksin\'. New normal yang belum ada vaksin yang harus kita siaga,\" terangnya.</p><p><strong>RI Bareng Korea Siap Uji Vaksin</strong></p><p>Sementara itu, PT Kalbe Farma Tbk (Kalbe) bakal memulai uji klinik vaksin COVID-19 per Juni 2020 mendatang. Demikian dikutip dari keterbukaan informasi Kalbe, Jumat (29/5/2020).</p><p>\"Uji klinik vaksin COVID-19 rencananya akan dilakukan di bulan Juni 2020,\" bunyi keterangan tersebut.</p><p>&nbsp;</p><p>Riset vaksin ini sendiri telah dilakukan kepada Primata dan telah terbukti menghasilkan antibodi yang mampu menetralisir virus Corona Baru, sehingga tahap berikutnya akan diuji kepada manusia. Kalbe akan menggandeng lembaga pemerintah terkait untuk berkolaborasi mengembangkan vaksin COVID-19 ini sehingga proses penelitiannya berjalan lancar dan hasilnya dapat dimanfaatkan untuk kepentingan kesehatan masyarakat Indonesia.</p><p>Untuk diketahui, Kalbe baru saja melakukan penandatanganan nota kesepahaman dengan perusahaan asal Korea Selatan yakni Genexine, Inc terkait rencana tersebut. Genexine Inc merupakan perusahaan obat biologi dan bioteknologi yang terdaftar dalam bursa Korea Selatan berkode saham KOSDAQ.</p><p>\"Kalbe dan Genexine sepakat untuk melakukan uji klinik GX-19 di Indonesia, yakni pengembangan vaksin DNA terhadap virus corona baru oleh konsorsium dengan Genexine, Binex, the International Vaccine Institute(IVI), GenNBio, the Korea Advanced Institute of Science &amp; Technology (KAIST), and Pohang University of Science &amp; Technology (POSTECH),\" ujar Corporate Secretary Kalbe Lukita Kurniawan Gozali dalam keterangan tertulis.</p>', '63682-pandemi-virus-corona-covid-19.jpg', 4, '2020-05-31 11:58:15', '2020-05-31 11:58:15'),
(13, 'Kapan Sekolah Di buka Kembali?', 'kapan-sekolah-di-buka-kembali', '<p>Pandemi <a href=\"https://www.detik.com/tag/virus-corona\">virus corona</a> mengakibatkan perubahan pada pola aktivitas masyarakat termasuk anak sekolah. Para siswa terpaksa belajar dari rumah dan sekolah tutup untuk menghindari kerumunan dan menekan risiko penularan COVID-19.</p><p>Seiring waktu, jumlah pasien yang berhasil sembuh dari <a href=\"https://www.detik.com/tag/covid_19\">COVID-19</a> meningkat dan beberapa daerah mulai melonggarkan PSBB. Dengan kondisi tersebut, kapan sekolah di Indonesia dibuka kembali lagi dan siswa kembali belajar seperti biasa?</p><p>Dalam rilis yang diterima detikcom dari Kemendikbud atau Kementerian Pendidikan dan Kebudayaan, pembukaan sekolah kembali tidak dengan pertimbangan sepihak. Selain pendidikan, faktor kesehatan ikut dipertimbangkan dalam penentuan kapan sekolah di Indonesia dibuka kembali lagi</p><p>Nadiem mengatakan, Gugus Tugas Percepatan Penanganan <a href=\"https://www.detik.com/tag/covid_19\">COVID-19</a> juga akan ikut mempertimbangkan metode yang digunakan untuk pembukaan sekolah kembali. Dengan pertimbangan tersebut diharapkan siswa bisa terus belajar sambil menjaga kesehatannya.</p><p>Dalam rilis tersebut, Nadiem juga menjawab rumor terkait kabar awal tahun ajaran baru pada Juli 2020 mendatang. Kabar tersebut tidak benar karena keputusannya melibatkan pertimbangan dari Gugus Tugas Percepatan Penanganan <a href=\"https://www.detik.com/tag/covid_19\">COVID-19</a>.</p><p>\"Kami tidak pernah mengeluarkan pernyataan kepastian, karena memang keputusannya bukan di kami. Jadi mohon stakeholders atau media yang menyebut itu, itu tidak benar,\" kata Nadiem.</p><p>Hingga saat ini tidak diperlukan perubahan tahun ajaran atau tahun akademik terkait kapan sekolah di Indonesia dibuka kembali lagi. Namun perlu penyesuaian metode belajar sesuai kondisi dan status kesehatan masyarakat di tiap wilayah.</p><p>Keputusan kapan sekolah di Indonesia dibuka kembali lagi tentunya berbeda dengan negara lain. Filipina memutuskan tidak mengizinkan para siswa kembali ke sekolah hingga vaksin <a href=\"https://www.detik.com/tag/covid_19\">COVID-19</a> ditemukan.</p><p>\"Kecuali saya yakin bahwa mereka benar-benar aman, percuma saja membahas soal pembukaan kembali sekolah. Bagi saya, vaksin yang terutama. Kalau vaksinnya sudah ada, maka tidak apa-apa (sekolah dibuka lagi). Jika tidak ada yang lulus, ya biarlah,\" kata Presiden Filipina Rodrigo Duterte.</p><p>Sementara Korea Selatan memutuskan membuka kembali sekolah usai wabah <a href=\"https://www.detik.com/tag/covid_19\">COVID-19</a> mulai mereda. Namun, para siswa harus mengikuti protokol kesehatan yang berlaku untuk mencegah munculnya kasus baru.</p><p>\"Sangat menyenangkan bisa bertemu dengan teman dan guru saya secara langsung, tetapi kita harus benar-benar mengikuti pedoman protokol kesehatan.Saya sangat khawatir tetapi menyenangkan melihat mereka lagi,\" kata Kepala Sekolah Menengah Kyungbock di Seoul Oh Chang-hwa.</p><p>Dalam protokol kesehatan tersebut, para siswa berbaris untuk pemeriksaan suhu dan diberi hand sanitizer. Mereka wajib mencuci tangan sebelum para siswa memasuki gedung sekolah. Sementara para guru menyapa mereka dengan senyum dan sesekali salam siku.</p>', '083091800_1589895975-Banner_IInfografis_Rencana_Sekolah_Dibuka_Lagi_Juli_2020.jpg', 4, '2020-05-31 12:01:35', '2020-05-31 12:01:35');

-- --------------------------------------------------------

--
-- Table structure for table `table_kategori`
--

CREATE TABLE `table_kategori` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `table_kategori`
--

INSERT INTO `table_kategori` (`id`, `nama_kategori`, `slug`, `created_at`, `updated_at`) VALUES
(4, 'Informasi', 'informasi', '2020-05-31 11:40:29', '2020-05-31 11:40:29'),
(5, 'Berita', 'berita', '2020-05-31 11:40:45', '2020-05-31 11:40:45'),
(6, 'Kesehatan', 'kesehatan', '2020-05-31 11:41:05', '2020-05-31 11:41:05');

-- --------------------------------------------------------

--
-- Table structure for table `table_rs`
--

CREATE TABLE `table_rs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_rs` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `gambar`) VALUES
(1, 'alvan', 'alvanhan200902@gmail.com', NULL, '$2y$10$CpXVmYJ5P2aQrwIKeOn/QeSuEiY1qyz3zohBtXjbjm9wlSiOuQmJ.', NULL, '2020-05-17 00:05:19', '2020-05-17 00:05:19', ''),
(2, 'alvan', 'han200902@gmail.com', NULL, '$2y$10$EmfVhpQ77arRd3tX86RPCeKud8hMZ3g/AaI0SJwjtMeqjLZt6/JQi', NULL, '2020-05-17 01:37:26', '2020-05-17 01:37:26', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `table_artikel`
--
ALTER TABLE `table_artikel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `table_artikel_kategori_id_foreign` (`kategori_id`);

--
-- Indexes for table `table_kategori`
--
ALTER TABLE `table_kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_rs`
--
ALTER TABLE `table_rs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `table_artikel`
--
ALTER TABLE `table_artikel`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `table_kategori`
--
ALTER TABLE `table_kategori`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `table_rs`
--
ALTER TABLE `table_rs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `table_artikel`
--
ALTER TABLE `table_artikel`
  ADD CONSTRAINT `table_artikel_kategori_id_foreign` FOREIGN KEY (`kategori_id`) REFERENCES `table_kategori` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
