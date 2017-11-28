-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 28 Nov 2017 pada 02.56
-- Versi Server: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vsp_db_final`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `judul` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `header` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `kolom1` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `kolom2` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `gambar` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nomor` int(1) NOT NULL,
  `tgl_buat` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `news`
--

INSERT INTO `news` (`id_news`, `id_kategori`, `judul`, `header`, `kolom1`, `kolom2`, `gambar`, `nomor`, `tgl_buat`) VALUES
(1, 1, 'James Gunardjo Tidak Lama Lagi <span class="red">Disidangkan</span>', 'Komisi Pemberantasan Korupsi (KPK) menyatakan, berkas perkara kasus dugaan suap terkait restitusi pajak PT Bhakti Investama, dengan tersangka James Gunardjo telah lengkap (P21).', '[JAKARTA] Kasusnya  dilimpahkan ke penuntutan, sehingga tidak lama lagi perkara suap tersebut akan disidangkan. \r\n\r\n"Benar, KPK melimpahkan berkas perkara atas nama JG ke penuntutan pada Kamis (2/8)," kata Juru Bicara KPK, Johan Budi SP ketika dikonfirmasi, Kamis (2/8) malam.\r\n\r\nSebelumnya, kuasa hukum James, Verry Sitorus menyatakan bahwa berkas perkara milik kliennya sudah dinyatakan lengkap. Sehingga, tidak lama lagi perkara yang disangkakan kepada kliennya akan disidangkan.\r\n\r\nTetapi, Verry mengaku tetap akan melanjutkan upaya praperadilan yang digelar di Pengadilan Negeri Jakarta Selatan. Walaupun, dalam sidang sebelumnya, KPK tidak hadir.', '"Kemarin kan KPK tidak datang ke sidang Praperadilan yang kami daftarkan. Ada apa ini? Ini kan untuk membuktikan kebenaran. Ya kami harap, meski telah dilimpahkan kepada jaksa, KPK masih mau hadir mengikuti perkara Praperadilannya sebelum berkas James masuk ke Pengadilan," kata Verry usai mendampingi James diperiksa di Kantor KPK, Jakarta, Kamis (2/8).\r\n\r\nBahkan, Verry mengatakan pihaknya akan menempuh upaya hukum lain, jika pihak KPK tidak juga mengikuti proses sidang Praperadilan.\r\n\r\n "Ya kalau kesempatan berikutnya KPK masih tidak mau datang sidang, kami akan mengajukan upaya lain, seperti komisi III DPR yang notabene mitra KPK, kalau selama ini ada yanh salah dari kewenangan KPK," ujar Verry.\r\n\r\nPeristiwa berawal, pada tanggal 6 Juni lalu, KPK menangkap Kepala Seksi Pengawasan dan Konsultasi di Kantor Pelayanan Pajak (KPP) Sidoarjo Selatan Jawa Timur Tommy Hindratno bersama seorang pengusaha bernama James Gunardjo. Di mana, James disebut-sebut sebagai perwakilan perusahaan investasi, PT Bhakti Investama.\r\n\r\n Tommy diduga menerima uang Rp 280 juta yang diduga untuk memuluskan pemeriksaan lebih bayar pajak senilai Rp 3,4 miliar milik wajib pajak yang diduga adalah PT Bhakti Investama. [N-8]\r\n\r\nAKARTA, KOMPAS.com – Kuasa hukum 49 kreditur PT Modern Sevel Indonesia (MSI) David L Tobing menolak pengesahan perdamaian yang terjadi dalam proses penundaan kewajiban pembayaran utang ( PKPU).\r\n', 'news1.jpg', 1, '0000-00-00'),
(2, 2, 'PT Kembang 88 Multifinance <span class="red">Berusaha Ekstra Untuk Mengubah Keputusan </span>PT Bank Negara Indonesia', 'Perusahaan  pembiayaan PT Kembang 88 Multifinance berusaha ekstra untuk mengubah keputusan PT Bank Negara Indonesia (Persero) Tbk. agar menyetujui proposal perdamaian.', '[JAKARTA] Bank berkode saham BBNI ini akan menjadi penentu pailit atau tidaknya debitur. Pasalnya, debitur baru mengantongi persetujuan\r\ndari PT Bank J Trust Indonesia dari PT BRI Syariah. Namun tagihan mereka belum mewakili 2/3 kuroum seperi  yang diamanahkan dalam Pasal 281  ayat (1) b UU No. 37/2004. \r\n\r\nKuasa hukum Kembang 8 Verry Sitorus mengatakan  pihaknya telah berkoordinasi dengan BBNI. Intinya, PT Kembang 88 Multifinance meminta BBNI mengubah sikap terkait dengan suara mereka terhadap proposal perdamain.\r\n\r\n“Dari pihak BBNI hanya tinggal approval. Kami hanya menunggu surat dari BBNI saja,” kata Verry Sitorus, Minggu (11/6/2017).\r\n\r\nMenanggapi, kuasa hukum BBNI Anggia Sekartaji mengatakan kemungkinan perseroan bisa mengubah keputusannya. Namun dia belum dapat memastikan lantaran proses negosiasi masih berlangsung dengan alot. Dia berujar Kembang 88 sudah dua kali mendatangi BBNI.\r\n                              <br><br>', '“Hingga saat ini, putusan kami masih sama yakni menolak proposal perdamaian sebelum saya mendapat titah dari BBNI untuk mengubah keputusan. Namun perubahan mungkin saja ada,” ungkapnya.\r\n\r\nMenurut dia, BBNI dapat menyetujui proposal selama ada perbaikan proposal perdamaian. Verry Sitorus mencontohkan debitur seharusnya memberikan tawaran dan kepastain pembayaran utang yang lebih baik.\r\n\r\nAdapun BBNI memegang tagihan sebesar Rp168 miliar. Tagihan tersebut dijaminkan dengan fidusia berupa piutang debitur senilai Rp100 miliar—200 miliar.\r\n\r\nSuara BBNI dibutuhkan debitur untuk mencapai syarat 2/3 kuorum atau mewakili 70% tagihan. Apabila BBNI setuju, debitur dapat selamat dari kepailitan dan berakhir damai.\r\n\r\n “Kalau nanti prinsipal tidak setuju karena tidak ada tawaran menarik, ya debitur bisa langsung pailit,” sebutnya.', 'news2.png', 2, '0000-00-00'),
(3, 3, 'PT Kembang 88 Multifinance  <span class="red">Siap Meladeni Permohonan Kasasi</span> Yang Diajukan Oleh Dua Krediturnya PT Bank Mandiri (PERSERO) TBK dan PT BRI Syariah', 'Kuasa hukum PT Kembang 88 Multifinance (termohon kasasi) Verry Sitorus meminta kedua krediturnya membuktikan adanya persekongkolan antara debitur dan kreditur dalam mencapai proses perdamaian.', '[JAKARTA] Dia mengklaim, proses perdamaian telah diupayakan berdasarkan hukum yang berlaku. Menurutnya, negosiasi dengan kreditur di luar rapat kreditur sah dilakukan asal hasil negosiasi tertuang dalam proposal perdamaian.\r\n\r\n“Jika menuduh ada persekongkolan jahat silakan saja dibuktikan, kita ini negara hukum, simpel kan,” katanya, Minggu (13/8/2017).', 'Verry menambahkan, perubahan suara oleh para kreditur dalam pemungutan suara sudah sesuai dengah hukum. Lagipula, agenda voting juga terbuka untuk umum. Artinya, tidak ada hal yang disembunyikan.\r\n\r\n Adapun perubahan suara oleh kreditur merupakan murni dari mekanisme birokrasi perseroan. Dia juga tidak mengetahui kebijakan internal krediturnya atas dasar apa mengubah suara.\r\n\r\n“kalau ingin tahu alasan kreditur mengubah suara ya tanya ke direktur perseroan mereka. Kan direktur yang tanda tangan,” ungkapnya.\r\n\r\nVerry menuturkan pihaknya telah memberikan kontra memori kasasi ke Mahkamah Agung terkait kasus ini.', 'news3.png', 3, '0000-00-00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `teks`
--

CREATE TABLE `teks` (
  `id` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `teks` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `lokasi` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `teks`
--

INSERT INTO `teks` (`id`, `teks`, `lokasi`) VALUES
('about1', '“I’VE ALWAYS THOUGHT LEGAL ADDICTIONS ARE<br><span class="red">A GREAT WAY TO CREATE A BUSINESS</span>.”<br>–NOLAN BUSHNELL\r\n', 'about.html'),
('about2', 'Dear valued clients,\r\n\r\nWelcome to Law Firm Verry Sitorus & Partners (VSP), a grand haven for well-skilled lawyers and qualified defenders that are always marked with its long term excellence. VSP was established in August 28, 2015 with a structured vision for serving the best legal services in the name of justice and unity.\r\n\r\nOur best figure is also associated with the demands for numerous cases that are blatantly measured to guarantee our brightest potentials. This is exactly what people need to be able to comprehend a lot of legal matters that are always made to be resolved in a magnificent strategy that we promise to present.\r\n\r\nOur mission is to bring the orientation of justice that is quite far from the reach of people who have no abilities with regard to the act of law. We believe that every person possess a mutual equality in pursuing their rights before the Court or even in the corporation schemes.\r\n\r\nBy the gleam of this explanatory preface, our Firm thanks you deeply and we are looking forward to corresponding with you in all your legal needs.', 'about.html'),
('about3', 'We are a people business. Being massive in class in the eyes of our clients, means that our people must be excellent.\r\n\r\nAspire to become one of the most high-quality Law Firms; we started our journey in 2015 with Industrial Relations dispute between a labor and the company where she worked, which is one of the biggest companies in Jakarta. Furthermore, the dispute settled in amicable manner between the two parties.\r\n\r\nAnother case in 2015 was a breach of contract that had been successfully handled by us. Since then, so many parties with various cases coming to us, such as insolvency and bankruptcy cases, suspension of debt payment, criminal, contract review, and contract drafting, and some corporate law-related cases.', ''),
('about4', 'Clients'' businesses are our business. We bring a long-term perspective, embracing new ideas and proactively identifying future trends. WE LISTEN TO OUR CLIENTS TO ALLOW US TO UNDERSTAND THEIR CURRENT AND FUTURE NEEDS AND TO SHAPE OUR BUSINESS TO MEET THOSE NEEDS.\r\n\r\nClients share their experiences with us that they value our solidarity, culture, and we honor the spirit of teamwork and collaboration on which our firm was built – but we also provide the benefits of working with an ambitious, forward-looking, and exceptional business. It is also important to us that we are recognized as a responsible lawyer team, wherein we use our skills and resources to pose positive effects in the community.', ''),
('about5', '“AS A LAWYER AND A FORMER PROSECUTOR, I KNOW THE LIMITS OF THE POWER AND AUTHORITY OF THE PESIDENT. <br><span class="red">I KNOW WHAT IS LEGAL AND WHAT IS NOT.</span>” –RODRIGO DUTERTE\r\n', ''),
('client1', '“I FIRMLY BELIEVE IN THE <span class="red">RULE OF LAW</span> AS THE FOUNDATION FOR ALL OF OUR BASIC RIGHTS.” –SONIA SOTOMAYOR\r\n', ''),
('client2', 'PT Panghegar Kana Property\r\nPT Kembang Delapan Delapan Multi Finance\r\nPT Vania Karunia Teguh\r\nPT Danau Winata Indah\r\nPT Bali Melka', ''),
('client3', 'PT Citra Van Titipan Kilat (Corporate Law)\r\nPT Assab Steels Indonesia (Corporate Law)\r\nPT Sigma Indonesia Manufacturing (Corporate Law)\r\nPT HMS Bergbau Indonesia (Industrial Relations Law)\r\nPT West Terminal Point (Criminal Law)\r\nPT Bhakti Investama (Corruption Law)\r\nHercules Rozario Marshal (Criminal Law)', ''),
('contact1', '"THERE IS NO BETTER WAY OF EXERCISING THE IMAGINATION THAN <span class="red">THE STUDY OF LAW.</span> NO POET EVER INTERPRETED NATURE AS FREELY AS A <span class="red">LAWYER INTERPRETS THE TRUTH.</span>"-JEAN GIRAUDOUX', ''),
('expertise1', '“IN SEEKING A LAWYER, YOU ARE LOOKING FOR AN ADVOCATE, AN <span class="red">EXPERT ADVISOR</span> ON THE LAW AND ON YOUR RIGHTS AND RESPONSIBILITIES, A STRATEGIST, A NEGOTIATOR, AND A LITIGATOR.” –LAURA WASSER', ''),
('expertise2', 'We provide an expert business advice on company rescue, restructuring, and insolvency.\r\n\r\nTrading in difficult circumstances can result in a wealth of problems, impacting on both creditors and debtors. Often companies continue to trade in financial circumstances that could give rise to potential personal liability for the company’s officers as well as possibly exposing creditors and other stakeholders to greater losses.\r\n\r\nAt VSP, we believe in avoiding formal insolvency proceedings where possible and provide, where appropriate, clear advice on trading out of difficult circumstances by eliciting support from stakeholders in financial restructuring.\r\n\r\nSometimes formal insolvency processes cannot be avoided in these circumstances, but we will provide assistance in a full range of insolvency processes carried out under Indonesian laws and regulations.\r\n\r\nVSP has a very strong and experienced Insolvency & bankruptcy team made up of two receivers and four associates. We offer solutions to provide legal services in the field of Insolvency & bankruptcy including applying the Suspension of Debt Payment (PKPU) and Insolvency in the Commercial Court, assisting and representing the client as Bankrupt/Suspension of Debt Payment (PKPU) Respondent, as well as assisting clients in Debt Restructuring and Reorganization of the Company.', ''),
('expertise3', 'The Litigation Group draws upon VSP rich expertise in corporate, financial and transactional, criminal, family, and industrial relations law, forming seamlessly integrated teams that handle any related or follow-on matters that arise. VSP manages issues through every stage of the litigation life cycle.\r\n\r\nWe routinely act on complex and multi-jurisdictional litigation matters. Our global reach gives us expertise in local law in multiple jurisdictions and the offices throughout our network we closely work with. This is important because many cases could be cross-border and, because the different legal systems and cultures have different regulatory regimes, therefore, we do not treat issues such as privacy, data protection, employee protection and privilege in the same way.\r\n\r\nConsequently, our lawyers are able to provide clients with well-rounded and insightful advice that addresses local issues as well as the risks to a global business that arise from cross-border investigations. We can credibly present this analysis to regulators across jurisdictions to protect our clients’ positions.\r\n', ''),
('expertise4', 'We have experienced a consistent demand increase for litigation and also alternative dispute resolution services in the past few years and have experienced success.\r\n\r\nVSP could provide analysis issues and drafts mediation and arbitration clauses in international joint venture and other financial and commercial agreements. It provides advices on business decisions and plans that pose arbitration and litigation risks, and it represents clients in arbitration, mediation and other alternative dispute resolution proceedings.\r\n\r\n Also, we will develop strategies to resolve complex disputes that involve negotiation, conciliation, multiple claims, parties, jurisdictions and parallel or closely related arbitral and judicial proceedings.\r\n\r\nWe actively pursue all avenues of dispute resolution available and advise clients on choosing the method most appropriate to them and to a particular matter. Our main priority is to resolve disputes in a quick and effective manner with as little disruption to business as possible – recognition of this is central to how we approach any matter.', ''),
('expertise5', 'WE ACTIVELY PURSUE<span class="red"> ALL AVENUES OF DISPUTE RESOLUTION </span> AVAILABLE AND ADVISE CLIENTS ON CHOOSING THE METHOD MOST APPROPRIATE TO THEM AND TO A PARTICULAR MATTER\r\n', ''),
('index12', '“TWO THINGS AWE ME MOST, THE STARRY SKY ABOVE ME AND THE <span class="red">MORAL LAW</span> WITHIN ME.” –IMMANUEL KANT', 'index.html'),
('lawyers1', '"TEAMWORK IS THE ABILITY TO <span class="red">WORK TOGETHER</span> TOWARD A COMMON VISION. THE ABILITY TO DIRECT INDIVIDUAL ACCOMPLISHMENTS TOWARD ORGANIZATIONAL OBJECTIVES. IT IS THE FUEL THAT ALLOWS COMMON PEOPLE <br><span class="red">TO ATTAIN UNCOMMON RESULTS.</span>" - ANDREW CARNEGIE', ''),
('lawyers10', 'https://www.linkedin.com/in/syarifah-meutia-zahra-a80931150/', ''),
('lawyers11', 'Advocate', ''),
('lawyers12', 'Maria Veronika <br> Napitupulu, S.H.', ''),
('lawyers13', 'https://id.linkedin.com/in/maria-veronika-napitupulu-485303bb', ''),
('lawyers14', 'Advocate', ''),
('lawyers15', 'Grace Dina Mariana <br> Sitinjak, S.H.', ''),
('lawyers16', 'https://www.linkedin.com/in/grace-dina-mariana-sitinjak-s-h-a92630a8/', ''),
('lawyers17', 'Staff', ''),
('lawyers18', 'Hani Nisfika<br>Herma, A.Md.', ''),
('lawyers2', 'Managing Partner', ''),
('lawyers20', 'Daniel Nainggolan, S.H', 'lawyers.html'),
('lawyers21', 'Advocate', ''),
('lawyers22', 'Madyastha Pradhana, S.H.,M.H.', 'lawyers.php'),
('lawyers23', 'Advocate', ''),
('lawyers3', 'Verry Sitorus, S.H', ''),
('lawyers4', 'https://id.linkedin.com/in/verry-sitorus-b400a148', ''),
('lawyers5', 'Advocate & Curator', ''),
('lawyers6', 'Nofrizal, S.Kom,<br>S.H., M.H.', ''),
('lawyers7', 'https://id.linkedin.com/in/nofrizal-sihin-9a833796', ''),
('lawyers8', 'Advocate', ''),
('lawyers9', 'Syarifah Meutia<br>Zahra, S.H.', '');

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
