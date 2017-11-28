<?php
include ("config.php");
include ("tanggal.php");

$index = "select * from teks where id like 'index%'";
$result_index = mysqli_query($db, $index);
$baris = array();
while($idx = mysqli_fetch_assoc($result_index))
    $baris[] = $idx;

$query = "select * from teks where id like 'lawyers%' order by id + 0";
$result = mysqli_query($db, $query);
$output = array();
while ($lawyers = mysqli_fetch_assoc($result))
    $output[] = $lawyers;

$query_news = "SELECT news.*, kategori.nama FROM news JOIN kategori ON news.id_kategori = kategori.id_kategori ORDER BY news.nomor ASC";
$result_news = mysqli_query($db, $query_news);
$news = array();
while ($row = mysqli_fetch_assoc($result_news))
    $news[] = $row;
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Verry Sitorus & Partners</title>
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
                <a class="navbar-brand" href="#">
                    <img src="assets/img/logo.png" alt="logo" width="350">
                </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item border border-top-0 border-bottom-0 border-right-0 active">
                      <a class="nav-link" href="index.php">HOME <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item border border-top-0 border-bottom-0 border-right-0">
                      <a class="nav-link" href="aboutus.php">ABOUT VSP</a>
                    </li>
                    <li class="nav-item border border-top-0 border-bottom-0 border-right-0">
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

        <div class="container pt-5">
            <div class="row">
                <div class="col-md-8">
                    <h2 style="width:95%">WE LISTEN TO OUR CLIENTS TO ALLOW US TO  <span class="red">UNDERSTAND THEIR CURRENT AND FUTURE NEEDS</span> AND TO SHAPE OUR BUSINESS TO MEET THOSE NEEDS.</h2>
                </div>
                <div class="col-md-4">
                    <p class="ml-lg-5 ml-sm-1" style="width:85%">We are a people business. Being massive in class in the eyes of our clients, means that our people must be excellent. </p>
                    <a href="aboutus.php" class="btn btn-vsp btn-sm ml-lg-5 ml-sm-1" style="width:200px;">READ MORE</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div id="carouselIndicator" class="carousel slide my-5" data-ride="carousel">
                      <ol class="carousel-indicators d-flex justify-content-end pl-5">
                        <li data-target="#carouselIndicator" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselIndicator" data-slide-to="1"></li>
                        <li data-target="#carouselIndicator" data-slide-to="2"></li>
                      </ol>
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img class="d-block w-100" src="assets/img/01.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                          <img class="d-block w-100" src="assets/img/02.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                          <img class="d-block w-100" src="assets/img/03.jpg" alt="First slide">
                        </div>
                      </div>
                      <a class="carousel-control-prev d-none d-md-flex" href="#carouselIndicator" role="button" data-slide="prev">
                        <img src="assets/img/prev.png" alt="prev">
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="carousel-control-next d-none d-md-flex" href="#carouselIndicator" role="button" data-slide="next">
                        <img src="assets/img/next.png" alt="next">
                        <span class="sr-only">Next</span>
                      </a>
                    </div>
                </div>
            </div>
            <div class="row my-5">
                <div class="col-md-12 mx-auto">
                    <div class="text-center">
                        <h2>OUR LAWYERS HARNESS THEIR KNOWLEDGE ACROSS<div class="red">MULTIPLE LEGAL DISCIPLINES TO PROVIDE A HOLISTIC PERSPECTIVE</div>FOR SOPHISTICATED MATTERS.</h2>
                    </div>
                </div>
            </div>
            <div class="row py-5">
                <div class="col-md-4 text-center mx-auto">
                    <img src="assets/img/logo-paper.png" alt="insolvency">
                    <h5 class="red pt-3">INSOLVENCY &amp; BANKRUPTCY LAW</h5>
                    <p class="pt-2">We provide an expert business advice on company rescue, restructuring, and insolvency.</p>
                </div>
                <div class="col-md-4 text-center mx-auto pt-5 pt-md-0">
                    <img src="assets/img/logo-pillar.png" alt="dispute">
                    <h5 class="red pt-3">ALTERNATIVE DISPUTE</h5>
                    <p class="pt-2">We actively pursue all avenues of dispute resolution available and advise clients on choosing the method most appropriate to them and to a particular matter.</p>
                </div>
            </div>
            <div class="row py-lg-5">
                <div class="col-md-4 text-center mx-auto py-lg-2">
                    <img src="assets/img/logo-pantheon.png" alt="insolvency">
                    <h5 class="red pt-3">LITIGATIONS</h5>
                    <p class="pt-2">We have experienced a consistent demand increase for litigation and also alternative dispute resolution services in the past few years and have experienced success.</p>
                    <a href="expertise.php" class="btn btn-vsp btn w-50 mt-5">READ MORE</a>
                </div>
            </div>
            <div class="row py-5 no-gutters mt-5">
                <div class="col-lg-6 col-md-12">
                    <a href="news.php?id=<?php echo $news[0]['id_news'];?>" class="card bg-dark text-white card-news">
                        <img class="card-img img-fluid" src="assets/img/<?php echo $news[0]['gambar'] ?>" alt="Card image" style="height:450px;">
                        <div class="card-img-overlay">
                            <p class="card-text"><?php echo strip_tags($news[0]['nama']) ?></p>
                            <h3 class="card-title"><?php echo strip_tags($news[0]['judul']) ?></h3>
                            <p class="card-text date"><?php echo tanggal_indo($news[0]['tgl_buat'])?></p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="row">
                        <div class="col-12">
                            <a href="news.php?id=<?php echo $news[1]['id_news'];?>" class="card bg-dark text-white card-news">
                                <img class="card-img img-fluid" src="assets/img/<?php echo $news[1]['gambar'] ?>" alt="Card image" style="height:225px;">
                                <div class="card-img-overlay">
                                    <p class="card-text"><?php echo strip_tags($news[1]['nama']) ?></p>
                                    <h4 class="card-title"><?php echo strip_tags($news[1]['judul']) ?></h4>
                                    <p class="card-text date"><?php echo tanggal_indo($news[1]['tgl_buat'])?></p>
                                </div>
                            </a>
                        </div>
                        <div class="w-100"></div>
                        <div class="col-12">
                            <a href="news.php?id=<?php echo $news[2]['id_news'];?>" class="card bg-dark text-white card-news">
                                <img class="card-img img-fluid" src="assets/img/<?php echo $news[2]['gambar'] ?>" alt="Card image" style="height:225px;">
                                <div class="card-img-overlay">
                                    <p class="card-text"><?php echo strip_tags($news[2]['nama']) ?></p>
                                    <h4 class="card-title"><?php echo strip_tags($news[2]['judul']) ?></h4>
                                    <p class="card-text date"><?php echo tanggal_indo($news[2]['tgl_buat'])?></p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row my-5">
                <div class="col-md-9 mx-auto">
                    <div class="text-center">
                        <h2>WE KNOW HOW THING WORK IN INDONESIA, <span class="red">AND HAVE EXCELLENT RELATIONS</span>
                            WITH ALL THE RELEVANT GOVERMENT AND REGULATORY AGENCIES</h2>
                        <p class="w-75 mx-auto pt-2">We have wide client network especially in Insolvency and Bankruptcy law, and also National and International Companies and Individuals.</p>
                    </div>
                </div>
            </div>

            <div class="row no-gutters my-5">

                <!-- Blok 1 -->
                <div class="col-lg-3">
                    <div class="card card-profile" id="profile-1" style="cursor: pointer;">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $output[1]['teks']; ?></h5> <br>
                            <div class="social">
                                <a href="<?php echo $output[3]['teks']; ?>" target="_blank">
                                    <img src="assets/img/in.png" alt="instagram-logo">
                                </a>
                            </div>
                            <p class="card-text"><?php echo $output[2]['teks']; ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="card card-image" style="cursor: pointer;">
                        <img src="assets/img/01.jpg" id="image-1" style="height: 280px">
                    </div>
                </div>
<!--                <div class="col-lg-3">-->
<!--                    <div class="card card-profile" id="profile-1-2" style="cursor: pointer;">-->
<!--                        <div class="card-body">-->
<!--                            <p>&nbsp;</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->

                <!-- Blok 2 -->
                <div class="col-lg-3">
                    <div class="card card-image" style="cursor: pointer;">
                        <img src="assets/img/2.png" id="image-2">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card card-profile" id="profile-2" style="cursor: pointer;">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $output[4]['teks']; ?></h5> <br><br>
                            <div class="social d-none d-md-flex">
                                <a href="<?php echo $output[6]['teks']; ?>" target="_blank">
                                    <img src="assets/img/in.png" alt="instagram-logo">
                                </a>
                            </div>
                            <p class="card-text"><?php echo $output[5]['teks']; ?></p>
                        </div>
                    </div>
                </div>

                <!-- Blok 3 -->
                <div class="col-lg-3">
                    <div class="card card-image">
                        <img id="image-4" src="assets/img/4.png" style="cursor:pointer">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card card-profile" id="profile-4" style="cursor:pointer">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $output[10]['teks']; ?></h5> <br><br>
                            <div class="social d-none d-md-flex">
                                <a href="<?php echo $output[12]['teks']; ?>" target="_blank">
                                    <img src="assets/img/in.png" alt="instagram-logo">
                                </a>
                            </div>
                            <p class="card-text"><?php echo $output[11]['teks']; ?></p>
                        </div>
                    </div>
                </div>

                <!-- Blok 4 -->
                <div class="col-lg-3">
                    <div class="card card-profile" id="profile-3" style="cursor:pointer">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $output[7]['teks']; ?></h5> <br><br>
                            <div class="social">
                                <a href="<?php echo $output[9]['teks']; ?>" target="_blank">
                                    <img src="assets/img/in.png" alt="instagram-logo">
                                </a>
                            </div>
                            <p class="card-text"><?php echo $output[8]['teks']; ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card card-image">
                        <img id="image-3" src="assets/img/6.png" style="cursor:pointer">
                    </div>
                </div>

                <!-- Blok 5 -->
                <div class="col-lg-3">
                    <div class="card card-profile" id="profile-6" style="cursor: pointer;">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $output[19]['teks']; ?></h5> <br><br>
                            <div class="social d-none d-md-flex">
                                <a href="#">
                                    <img src="assets/img/in.png" alt="instagram-logo">
                                </a>
                            </div>
                            <p class="card-text"><?php echo $output[18]['teks']; ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card card-image" style="cursor: pointer;">
                        <img src="assets/img/daniel.jpg" id="image-6">
                    </div>
                </div>

                <!-- Blok 6 -->
                <div class="col-lg-3">
                    <div class="card card-image">
                        <img id="image-7" src="assets/img/Madyastha.jpg" style="cursor:pointer">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card card-profile" id="profile-7" style="cursor:pointer">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $output[21]['teks']; ?></h5> <br><br>
                            <div class="social d-none d-md-flex">
                                <a href="#" target="_blank">
                                    <img src="assets/img/in.png" alt="instagram-logo">
                                </a>
                            </div>
                            <p class="card-text"><?php echo $output[20]['teks']; ?></p>
                        </div>
                    </div>
                </div>

                <!-- Blok 7 -->
                <div class="col-lg-3">
                    <div class="card card-image">
                        <img id="image-8" src="assets/img/hani.jpg" style="cursor:pointer">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card card-profile" id="profile-8" style="cursor:pointer">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $output[16]['teks']; ?></h5> <br><br>
                            <div class="social d-none d-md-flex">
                                <a href="#" target="_blank">
                                    <img src="assets/img/in.png" alt="instagram-logo">
                                </a>
                            </div>
                            <p class="card-text"><?php echo $output[17]['teks']; ?></p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row pt-3">
                <div class="col-lg-9 mx-auto">
                    <div class="text-center">
                        <h2><?php echo $baris[0]['teks'] ?></h2>
                    </div>
                </div>
            </div>

        </div>
        <footer class="mt-5">
            <div class="container">
                <div class="row py-5">
                    <div class="col-md-7">
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
                    <div class="col-md-2">
                        <h5>Find VSP</h5>
                        <a href="https://www.instagram.com/lawfirmverrysitorus/">
                            <img src="assets/img/ig.png" alt="instagram-logo">
                        </a>
                        <a href="https://www.facebook.com/vsplawfirm/">
                            <img src="assets/img/fb.png" alt="facebook-logo" style="margin-top:-1px">
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
		  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
		  crossorigin="anonymous"></script>
        <script
		  src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
		  integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
		  crossorigin="anonymous"></script>
        <script src="assets/js/popper.min.js" charset="utf-8"></script>
        <script src="assets/js/bootstrap.min.js" charset="utf-8"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $('#image-1').hover(function () {
                    $('#profile-1').addClass('main', '100');
                    $('#profile-1-2').addClass('main', '100');
                }, function () {
                    $('#profile-1').removeClass('main', '100');
                    $('#profile-1-2').removeClass('main', '100');
                });

                $('#profile-1').hover(function () {
                    $('#profile-1-2').addClass('main', '100');
                }, function () {
                    $('#profile-1-2').removeClass('main', '100');
                });

                $('#profile-1-2').hover(function () {
                    $('#profile-1').addClass('main', '100');
                }, function () {
                    $('#profile-1').removeClass('main', '100');
                });

                $('#image-2').hover(function () {
                    $('#profile-2').addClass('main', '100');
                }, function () {
                    $('#profile-2').removeClass('main', '100');
                });

                $('#image-3').hover(function () {
                    $('#profile-3').addClass('main', '100');
                }, function () {
                    $('#profile-3').removeClass('main', '100');
                });

                $('#image-4').hover(function () {
                    $('#profile-4').addClass('main', '100');
                }, function () {
                    $('#profile-4').removeClass('main', '100');
                });

                $('#image-5').hover(function () {
                    $('#profile-5').addClass('main', '100');
                }, function () {
                    $('#profile-5').removeClass('main', '100');
                });

                $('#image-6').hover(function () {
                    $('#profile-6').addClass('main', '100');
                }, function () {
                    $('#profile-6').removeClass('main', '100');
                });

                $('#image-7').hover(function () {
                    $('#profile-7').addClass('main', '100');
                }, function () {
                    $('#profile-7').removeClass('main', '100');
                });

                $('#image-8').hover(function () {
                    $('#profile-8').addClass('main', '100');
                }, function () {
                    $('#profile-8').removeClass('main', '100');
                });

            $('#profile-1').on('click', function(event) {
                 window.location = 'lawyers/lawyers-verry.php';
            });
            $('#image-1').on('click', function(event) {
                 window.location = 'lawyers/lawyers-verry.php';
            });

            $('#profile-2').on('click', function(event) {
                 window.location = 'lawyers/lawyers-nofrizal.php';
            });
            $('#image-2').on('click', function(event) {
                 window.location = 'lawyers/lawyers-nofrizal.php';
            });

            $('#profile-3').on('click', function(event) {
                 window.location = 'lawyers/lawyers-syarifah.php';
            });
            $('#image-3').on('click', function(event) {
                 window.location = 'lawyers/lawyers-syarifah.php';
            });

            $('#profile-4').on('click', function(event) {
                 window.location = 'lawyers/lawyers-maria.php';
            });
            $('#image-4').on('click', function(event) {
                 window.location = 'lawyers/lawyers-maria.php';
            });

            $('#profile-5').on('click', function(event) {
                 window.location = 'lawyers/lawyers-grace.php';
            });
            $('#image-5').on('click', function(event) {
                 window.location = 'lawyers/lawyers-grace.php';
            });

            $('#profile-6').on('click', function(event) {
                window.location = 'lawyers/lawyers-daniel.php';
            });
            $('#image-6').on('click', function(event) {
                window.location = 'lawyers/lawyers-daniel.php';
            });

            $('#profile-8').on('click', function(event) {
                 window.location = 'lawyers/lawyers-hani.php';
            });
            $('#image-8').on('click', function(event) {
                 window.location = 'lawyers/lawyers-hani.php';
            });

            $('#profile-7').on('click', function(event) {
                window.location = 'lawyers/lawyers-madyastha.php';
            });
            $('#image-7').on('click', function(event) {
                window.location = 'lawyers/lawyers-madyastha.php';
            });
            });

        </script>
    </body>
</html>
