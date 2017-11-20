<?php
include ("config.php");
$index = "select * from teks where id like 'index%'";
$result_index = mysqli_query($db, $index);
$row = mysqli_fetch_array($result_index);
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
                    <img src="assets/img/logo.png" alt="logo" width="180">
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
                    <p class="pt-2">
                        We provide an expert business advice on company rescue, restructuring, and insolvency.
                    </p>
                </div>
                <div class="col-md-4 text-center mx-auto pt-5 pt-md-0">
                    <img src="assets/img/logo-pillar.png" alt="dispute">
                    <h5 class="red pt-3">ALTERNATIVE DISPUTE</h5>
                    <p class="pt-2">
                        We actively pursue all avenues of dispute resolution available and advise clients on choosing the method most appropriate to them and to a particular matter.
                    </p>
                </div>
            </div>
            <div class="row py-lg-5">
                <div class="col-md-4 text-center mx-auto py-lg-2">
                    <img src="assets/img/logo-pantheon.png" alt="insolvency">
                    <h5 class="red pt-3">LITIGATIONS</h5>
                    <p class="pt-2">
                        We have experienced a consistent demand increase for litigation and also alternative dispute resolution services in the past few years and have experienced success.
                    </p>
                    <a href="expertise.php" class="btn btn-vsp btn w-50 mt-5">READ MORE</a>
                </div>
            </div>
            <div class="row py-5 no-gutters mt-5">
                <div class="col-lg-6 col-md-12">
                    <a href="news3.php" class="card bg-dark text-white card-news">
                        <img class="card-img img-fluid" src="assets/img/news1.jpg" alt="Card image" style="height:450px;">
                        <div class="card-img-overlay">
                        <p class="card-text">CASES NEWS</p>
                        <h3 class="card-title">James Gunardjo Tidak Lama Lagi Disidangkan</h3>
                        <p class="card-text date">3 Agustus 2012 | DKI Jakarta</p>
                      </div>
                    </a>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="row">
                        <div class="col-12">
                            <a href="news1.php" class="card bg-dark text-white card-news">
                              <img class="card-img img-fluid" src="assets/img/news2.png" alt="Card image" style="height:225px;">
                              <div class="card-img-overlay">
                                <p class="card-text">POINT OF VIEW NEWS</p>
                                <h4 class="card-title">PT Kembang 88 Multifinance Berusaha Ekstra Untuk Mengubah Keputusan PT Bank Negara Indonesia.</h4>
                                <p class="card-text date">DKI Jakarta</p>
                              </div>
                            </a>
                        </div>
                        <div class="w-100"></div>
                        <div class="col-12">
                            <a href="news2.php" class="card bg-dark text-white card-news">
                              <img class="card-img img-fluid" src="assets/img/news3.png" alt="Card image" style="height:225px;">
                              <div class="card-img-overlay">
                                <p class="card-text">OPINION</p>
                                <h4 class="card-title">PT Kembang 88 Multifinance Siap Meladeni Permohonan Kasasi yang Diajukan oleh Dua Krediturnya.</h4>
                                <p class="card-text date">DKI Jakarta</p>
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
            <div class="row my-5">
                <div class="card-group my-4 w-100">
                <div class="card card-profile" id="profile-1" style="cursor:pointer">
                  <div class="card-body">
                    <h5 class="card-title">Managing Partner</h5> <br>
                    <div class="social d-none d-md-flex">
                        <a href="https://id.linkedin.com/in/verry-sitorus-b400a148" target="_blank">
                          <img src="assets/img/in.png" alt="instagram-logo">
                        </a>
                    </div>
                    <p class="card-text">Verry Sitorus, S.H</p>
                  </div>
                </div>
                <div class="card" style="cursor:pointer">
                  <img class="card-img-top" src="assets/img/1.png" id="image-1" style="max-height: 500px;">
                </div>
                  <div class="card card-profile" id="profile-2" style="cursor:pointer">
                    <div class="card-body">
                      <h5 class="card-title">Advocate &amp; Curator</h5> <br><br>
                      <div class="social d-none d-md-flex">
                          <a href="https://id.linkedin.com/in/nofrizal-sihin-9a833796" target="_blank">
                            <img src="assets/img/in.png" alt="instagram-logo">
                          </a>
                      </div>
                      <p class="card-text">Nofrizal, S.Kom,<br>S.H., M.H.</p>
                    </div>
                  </div>
                  <div class="card">
                    <img class="card-img-top" src="assets/img/2.png" id="image-2" style="cursor:pointer;max-height: 500px;">
                  </div>
                  <div class="w-100"></div>
                  <div class="card card-image">
                    <img class="card-img-top" src="assets/img/6.png" class="card-image" style="cursor:pointer;max-height: 500px;">
                  </div>
                  <div class="card card-profile" id="profile-3" style="cursor:pointer">
                    <div class="card-body">
                      <h5 class="card-title">Advocate</h5> <br><br>
                      <div class="social d-none d-md-flex">
                          <a href="https://www.linkedin.com/in/syarifah-meutia-zahra-a80931150/" target="_blank">
                            <img src="assets/img/in.png" alt="instagram-logo">
                          </a>
                      </div>
                      <p class="card-text">Syarifah Meutia<br>Zahra, S.H.</p>
                    </div>
                  </div>
                  <div class="card card-image">
                    <img class="card-img-top" src="assets/img/4.png" class="card-image" style="cursor:pointer;max-height: 500px;">
                  </div>
                  <div class="card card-profile" id="profile-4" style="cursor:pointer">
                    <div class="card-body">
                      <h5 class="card-title">Advocate</h5> <br><br>
                      <div class="social d-none d-md-flex">
                          <a href="https://id.linkedin.com/in/maria-veronika-napitupulu-485303bb" target="_blank">
                            <img src="assets/img/in.png" alt="instagram-logo">
                          </a>
                      </div>
                      <p class="card-text">Maria Veronika <br> Napitupulu, S.H.</p>
                    </div>
                  </div>
                  <div class="w-100"></div>
                  <div class="card card-profile" id="profile-5" style="cursor:pointer">
                    <div class="card-body">
                      <h5 class="card-title">Advocate</h5> <br><br>
                      <div class="social d-none d-md-flex">
                          <a href="https://www.linkedin.com/in/grace-dina-mariana-sitinjak-s-h-a92630a8/" target="_blank">
                            <img src="assets/img/in.png" alt="instagram-logo">
                          </a>
                      </div>
                      <p class="card-text">Grace Dina Mariana <br> Sitinjak, S.H.</p>
                    </div>
                  </div>
                  <div class="card">
                    <img class="card-img-top" src="assets/img/5.png" id="image-5" style="cursor:pointer;max-height: 500px;">
                  </div>
                  <div class="card card-profile" id="profile-6" style="cursor:pointer">
                    <div class="card-body">
                      <h5 class="card-title">Staff</h5> <br><br>
                      <div class="social d-none d-md-flex">
                          <a href="#">
                            <img src="assets/img/in.png" alt="instagram-logo">
                          </a>
                      </div>
                      <p class="card-text">Hani Nisfika<br>Herma, A.Md.</p>
                    </div>
                  </div>
                  <div class="card">
                      <div class="bg-secondary w-100 h-100" id="image-6" style="cursor:pointer"></div>
                  </div>
                </div>
            </div>
            <div class="row pt-5">
                <div class="col-md-9 mx-auto">
                    <div class="text-center">
                        <h2><?php echo $row[1]; ?></h2>
                        <h2>“TWO THINGS AWE ME MOST, THE STARRY SKY ABOVE ME AND THE <span class="red">MORAL LAW</span> WITHIN ME.” –IMMANUEL KANT</h2>
                    </div>
                </div>
            </div>
        </div>
        <footer class="mt-5">
            <div class="container">
                <div class="row py-5">
                    <div class="col-md-7">
                        <h5>LAW FIRM VERRY SITORUS &amp; PARTNERS</h5>
                        <p>
                            Since 2015, Law Firm Verry Sitorus & Partners have been one of the best law office in Indonesia with a structured vision for serving the best legal services in the name of justice and unity. We have wide client and partner network especially in Insolvency and Bankruptcy Law.
                        </p>
                    </div>
                    <div class="col-md-3">
                        <h5>Contact VSP</h5>
                        <p>
                            Gedung Kopi, 1st Floor <br>
                            Jl. R.P. Soeroso No. 20,<br>
                            Cikini - Menteng, Jakarta Pusat - 10330.<br>
                            P : + 62 21 3190 7457<br>
                            F : + 62 21 3190 7248<br>
                            E : law@vsp.co.id <br>
                        </p>
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
                }, function () {
                    $('#profile-1').removeClass('main', '100');
                })
                $('#image-2').hover(function () {
                    $('#profile-2').addClass('main', '100');
                }, function () {
                    $('#profile-2').removeClass('main', '100');
                })
                $('#image-5').hover(function () {
                    $('#profile-5').addClass('main', '100');
                }, function () {
                    $('#profile-5').removeClass('main', '100');
                })
                $('#image-6').hover(function () {
                    $('#profile-6').addClass('main', '100');
                }, function () {
                    $('#profile-6').removeClass('main', '100');
                })
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
                 window.location = 'lawyers/lawyers-hani.php';
            });
            $('#image-6').on('click', function(event) {
                 window.location = 'lawyers/lawyers-hani.php';
            });
        </script>
    </body>
</html>
