<?php
include ("config.php");
header("Content-Type: text/html; charset=ISO-8859-1");
$id = $_GET['id'];
$query = "SELECT news.*, kategori.nama FROM news JOIN kategori ON news.id_kategori = kategori.id_kategori WHERE news.id_news = $id";
$news = mysqli_query($db, $query);
$data = mysqli_fetch_array($news);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <title>VSP - News</title>
    <link rel="icon" type="image/png" href="assets/img/favicon-16x16.png" sizes="16x16" />
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<table class="accent-color">
    <tr>
        <td class="black"></td>
        <td class="red"></td>
    </tr>
</table>

<nav class="navbar navbar-expand-lg navbar-light navbar-vsp my-4">
    <div class="container">
        <a class="navbar-brand" href="index.php">
            <img src="assets/img/logo.png" alt="logo" width="350">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item border border-top-0 border-bottom-0 border-right-0">
                    <a class="nav-link" href="index.php">HOME <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item border border-top-0 border-bottom-0 border-right-0">
                    <a class="nav-link" href="aboutus.php">ABOUT VSP</a>
                </li>
                <li class="nav-item border border-top-0 border-bottom-0 border-right-0 active">
                    <a class="nav-link" href="expertise.php">EXPERTISE</a>
                </li>
                <li class="nav-item border border-top-0 border-bottom-0 border-right-0">
                    <a class="nav-link" href="client.php">CLIENT</a>
                </li>
                <li class="nav-item border border-top-0 border-bottom-0 border-right-0">
                    <a class="nav-link" href="lawyers.php">LAWYERS</a>
                </li>
                <li class="nav-item border border-top-0 border-bottom-0">
                    <a class="nav-link" href="contact.php">CONTACT</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12" style="padding:0">
            <img class="d-block w-100" src="assets/img/aboutus-1.png">
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="section">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="d-flex">
                            <div class="mr-auto">
                                <p><b><?php echo $data['nama']?>  | <?php echo $data['tgl_buat'];?></b></p>
                            </div>
                            <a href="https://www.instagram.com/lawfirmverrysitorus/">
                                <img src="assets/img/ig.png" alt="instagram-logo" width="30">
                            </a>
                            <a href="https://www.facebook.com/vsplawfirm/">
                                <img src="assets/img/fb.png" alt="facebook-logo" width="30">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="mt-4">
                            <h2 style="width:90%"><?php echo $data['judul']; ?></h2>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-lg-6 pr-5">
                        <p style="font-size:18px"><?php echo $data['header']; ?></p>
                        <?php if ($data['gambar']) { ?>
                            <img src="assets/img/<?php echo $data['gambar']?>" class="img-article py-4">
                        <?php } ?>
                        <p class="text-small">
<?php echo $data['kolom1']; ?></p>
                    </div>
                    <div class="col-lg-6 pl-5">
                        <p class="text-small"><?php echo $data['kolom2'];?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<footer class="mt-5">
    <div class="container">
        <div class="row py-5">
            <div class="col-sm-7">
              <h5>LAW FIRM VERRY SITORUS &amp; PARTNERS</h5>
              <p>Since 2015, Law Firm Verry Sitorus & Partners have been one of the best law office in Indonesia with a structured vision for serving the best legal services in the name of justice and unity. We have wide client and partner network especially in Insolvency and Bankruptcy Law.</p>
          </div>
          <div class="col-md-3">
              <h5>Contact VSP</h5>
              <p>Gedung Kopi, 1st Floor
Jl. R.P. Soeroso No. 20,
Cikini - Menteng, Jakarta Pusat - 10330.
P : + 62 21 3190 7457
F : + 62 21 3190 7248
E : law@vsp.co.id</p>
            </div>
            <div class="col-sm-2">
                <h5>Find VSP</h5>
                <a href="https://www.instagram.com/lawfirmverrysitorus/">
                    <img src="assets/img/ig.png" alt="instagram-logo">
                </a>
                <a href="https://www.facebook.com/vsplawfirm/">
                    <img src="assets/img/fb.png" alt="facebook-logo">
                </a>
            </div>
        </div>
    </div>
</footer>

<table class="accent-color">
    <tr>
        <td class="black"></td>
        <td class="red"></td>
    </tr>
</table>

<script
    src="https://code.jquery.com/jquery-3.2.1.min.js"
    integrity="sha256-hwg4gsxgFZhOsEEalgOYGBf13FyQuiTwlAQgxVSNgt4="
    crossorigin="anonymous"></script>
<script src="assets/js/bootstrap.min.js" charset="utf-8"></script>
</body>
</html>
