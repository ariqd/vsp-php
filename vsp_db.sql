-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 19 Nov 2017 pada 09.17
-- Versi Server: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vsp_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama`) VALUES
(1, 'CASES NEWS'),
(2, 'POINT OF VIEW NEWS'),
(3, 'OPINION');

-- --------------------------------------------------------

--
-- Struktur dari tabel `news`
--

CREATE TABLE `news` (
  `id_news` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `header` text NOT NULL,
  `kolom1` text NOT NULL,
  `kolom2` text NOT NULL,
  `gambar` varchar(30) NOT NULL,
  `nomor` int(1) NOT NULL,
  `tgl_buat` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `news`
--

INSERT INTO `news` (`id_news`, `id_kategori`, `judul`, `header`, `kolom1`, `kolom2`, `gambar`, `nomor`, `tgl_buat`) VALUES
(1, 1, 'JAMES GUNARDJO TIDAK LAMA LAGI <span class="red">DISIDANGKAN</span>', 'Komisi Pemberantasan Korupsi (KPK) menyatakan, berkas perkara kasus dugaan suap terkait restitusi pajak PT Bhakti Investama, dengan tersangka James Gunardjo telah lengkap (P21).', '                              [JAKARTA] Kasusnya  dilimpahkan ke penuntutan, sehingga tidak lama lagi perkara\r\n                              suap tersebut akan disidangkan. <br><br>\r\n\r\n                              "Benar, KPK melimpahkan berkas perkara atas nama JG ke penuntutan pada Kamis (2/8),"\r\n                              kata Juru Bicara KPK, Johan Budi SP ketika dikonfirmasi, Kamis (2/8) malam.\r\n                              <br><br>\r\n                              Sebelumnya, kuasa hukum James, Verry Sitorus menyatakan bahwa berkas perkara\r\n                              milik kliennya sudah dinyatakan lengkap. Sehingga, tidak lama lagi perkara yang\r\n                              disangkakan kepada kliennya akan disidangkan.\r\n                              <br><br>\r\n                              Tetapi, Verry mengaku tetap akan melanjutkan upaya praperadilan yang digelar di\r\n                              Pengadilan Negeri Jakarta Selatan. Walaupun, dalam sidang sebelumnya, KPK tidak hadir.', '                            "Kemarin kan KPK tidak datang ke sidang Praperadilan yang kami daftarkan. Ada apa ini? Ini kan untuk membuktikan kebenaran. Ya kami harap, meski telah dilimpahkan kepada jaksa, KPK masih mau hadir mengikuti perkara Praperadilannya sebelum berkas James masuk ke Pengadilan," kata Verry usai mendampingi James diperiksa di Kantor KPK, Jakarta, Kamis (2/8).\r\n                            <br><br>\r\n                            Bahkan, Verry mengatakan pihaknya akan menempuh upaya hukum lain, jika pihak KPK tidak juga mengikuti proses sidang Praperadilan.\r\n                            <br><br>\r\n                            "Ya kalau kesempatan berikutnya KPK masih tidak mau datang sidang, kami akan mengajukan upaya lain, seperti komisi III DPR yang notabene mitra KPK, kalau selama ini ada yanh salah dari kewenangan KPK," ujar Verry.\r\n                            <br><br>\r\n                            Peristiwa berawal, pada tanggal 6 Juni lalu, KPK menangkap Kepala Seksi Pengawasan dan Konsultasi di Kantor Pelayanan Pajak (KPP) Sidoarjo Selatan Jawa Timur Tommy Hindratno bersama seorang pengusaha bernama James Gunardjo. Di mana, James disebut-sebut sebagai perwakilan perusahaan investasi, PT Bhakti Investama.\r\n                            <br><br>\r\n                            Tommy diduga menerima uang Rp 280 juta yang diduga untuk memuluskan pemeriksaan lebih bayar pajak senilai Rp 3,4 miliar milik wajib pajak yang diduga adalah PT Bhakti Investama. [N-8]\r\n                            <br><br>\r\n                            JAKARTA, KOMPAS.com – Kuasa hukum 49 kreditur PT Modern Sevel Indonesia (MSI) David L Tobing menolak pengesahan perdamaian yang terjadi dalam proses penundaan kewajiban pembayaran utang ( PKPU).\r\n                            <br><br>', 'news1.jpg', 1, '0000-00-00'),
(2, 2, 'PT KEMBANG 88 MULTIFINANCE <span class="red">BERUSAHA EKSTRA UNTUK MENGUBAH KEPUTUSAN </span>PT BANK NEGARA INDONESIA', 'Perusahaan  pembiayaan PT Kembang 88 Multifinance berusaha ekstra\r\n                              untuk mengubah keputusan PT Bank Negara Indonesia (Persero) Tbk.\r\n                              agar menyetujui proposal perdamaian.', '[JAKARTA] Bank berkode saham BBNI ini akan menjadi penentu pailit\r\n                              atau tidaknya debitur. Pasalnya, debitur baru mengantongi persetujuan\r\n                              dari PT Bank J Trust Indonesia dari PT BRI Syariah. Namun tagihan mereka\r\n                              belum mewakili 2/3 kuroum seperi  yang diamanahkan dalam Pasal 281\r\n                              ayat (1) b UU No. 37/2004. <br><br>\r\n\r\n                              Kuasa hukum Kembang 8 Verry Sitorus mengatakan  pihaknya telah berkoordinasi dengan BBNI. Intinya, PT Kembang 88 Multifinance meminta BBNI mengubah sikap terkait dengan suara mereka terhadap proposal perdamain.\r\n                              <br><br>\r\n                              “Dari pihak BBNI hanya tinggal approval. Kami hanya menunggu surat dari BBNI saja,” kata Verry Sitorus, Minggu (11/6/2017).\r\n                              <br><br>\r\n                              Menanggapi, kuasa hukum BBNI Anggia Sekartaji mengatakan kemungkinan perseroan bisa mengubah keputusannya. Namun dia belum dapat memastikan lantaran proses negosiasi masih berlangsung dengan alot. Dia berujar Kembang 88 sudah dua kali mendatangi BBNI.\r\n                              <br><br>', '“Hingga saat ini, putusan kami masih sama yakni menolak proposal perdamaian sebelum saya mendapat titah dari BBNI untuk mengubah keputusan. Namun perubahan mungkin saja ada,” ungkapnya.\r\n                            <br><br>\r\n                            Menurut dia, BBNI dapat menyetujui proposal selama ada perbaikan proposal perdamaian. Verry Sitorus mencontohkan debitur seharusnya memberikan tawaran dan kepastain pembayaran utang yang lebih baik.\r\n                            <br><br>\r\n                            Adapun BBNI memegang tagihan sebesar Rp168 miliar. Tagihan tersebut dijaminkan dengan fidusia berupa piutang debitur senilai Rp100 miliar—200 miliar.\r\n                            <br><br>\r\n                            Suara BBNI dibutuhkan debitur untuk mencapai syarat 2/3 kuorum atau mewakili 70% tagihan. Apabila BBNI setuju, debitur dapat selamat dari kepailitan dan berakhir damai.\r\n                            <br><br>\r\n                            “Kalau nanti prinsipal tidak setuju karena tidak ada tawaran menarik, ya debitur bisa langsung pailit,” sebutnya.', '', 2, '2017-11-19'),
(3, 3, 'PT KEMBANG 88 MULTIFINANCE <span class="red">SIAP MELADENI PERMOHONAN KASASI</span> YANG DIAJUKAN OLEH DUA KREDITURNYA PT BANK MANDIRI (PERSERO) TBK DAN PT BRI SYARIAH.', 'Kuasa hukum PT Kembang 88 Multifinance (termohon kasasi) Verry Sitorus meminta kedua krediturnya membuktikan adanya persekongkolan antara debitur dan kreditur dalam mencapai proses perdamaian.', '[JAKARTA] Dia mengklaim, proses perdamaian telah diupayakan berdasarkan hukum yang berlaku. Menurutnya, negosiasi dengan kreditur di luar rapat kreditur sah dilakukan asal hasil negosiasi tertuang dalam proposal perdamaian.\r\n                              <br><br>\r\n                              “Jika menuduh ada persekongkolan jahat silakan saja dibuktikan, kita ini negara hukum, simpel kan,” katanya, Minggu (13/8/2017).', 'Verry menambahkan, perubahan suara oleh para kreditur dalam pemungutan suara sudah sesuai dengah hukum. Lagipula, agenda voting juga terbuka untuk umum. Artinya, tidak ada hal yang disembunyikan.\r\n                            <br><br>\r\n                            Adapun perubahan suara oleh kreditur merupakan murni dari mekanisme birokrasi perseroan. Dia juga tidak mengetahui kebijakan internal krediturnya atas dasar apa mengubah suara.\r\n                            <br><br>\r\n                            “kalau ingin tahu alasan kreditur mengubah suara ya tanya ke direktur perseroan mereka. Kan direktur yang tanda tangan,” ungkapnya.\r\n                            <br><br>\r\n                            Verry menuturkan pihaknya telah memberikan kontra memori kasasi ke Mahkamah Agung terkait kasus ini.', '', 3, '2017-11-19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `teks`
--

CREATE TABLE `teks` (
  `id` varchar(11) NOT NULL,
  `teks` text NOT NULL,
  `lokasi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `teks`
--

INSERT INTO `teks` (`id`, `teks`, `lokasi`) VALUES
('index01', 'WE LISTEN TO OUR CLIENTS TO ALLOW US TO  <span class="red">UNDERSTAND THEIR CURRENT AND FUTURE NEEDS</span> AND TO SHAPE OUR BUSINESS TO MEET THOSE NEEDS.', 'index.html'),
('index02', 'We are a people business. Being massive in class in the eyes of our clients, means that our people must be excellent.', 'index.html'),
('index03', 'OUR LAWYERS HARNESS THEIR KNOWLEDGE ACROSS<div class="red">MULTIPLE LEGAL DISCIPLINES TO PROVIDE A HOLISTIC PERSPECTIVE</div>FOR SOPHISTICATED MATTERS.', 'index.html'),
('index04', 'INSOLVENCY & BANKRUPTCY LAW', 'index.html'),
('index05', 'We provide an expert business advice on company rescue, restructuring, and insolvency.', 'index.html'),
('index06', 'ALTERNATIVE DISPUTE', 'index.html'),
('index07', 'We provide an expert business advice on company rescue, restructuring, and insolvency.', 'index.html'),
('index08', 'LITIGATIONS', 'index.html'),
('index09', 'We have experienced a consistent demand increase for litigation and also alternative dispute resolution services in the past few years and have experienced success.', 'index.html'),
('index10', 'WE KNOW HOW THINGS WORK IN INDONESIA, <span class="red">AND HAVE EXCELLENT RELATIONS</span> WITH ALL THE RELEVANT GOVERMENT AND REGULATORY AGENCIES', 'index.html'),
('index11', 'We have wide client network especially in Insolvency and Bankruptcy law, and also National and International Companies and Individuals.', 'index.html'),
('index12', '“TWO THINGS AWE ME MOST, THE STARRY SKY ABOVE ME AND THE <span class="red">MORAL LAW</span> WITHIN ME.” –IMMANUEL KANT', 'index.html');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id_news`);

--
-- Indexes for table `teks`
--
ALTER TABLE `teks`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id_news` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
