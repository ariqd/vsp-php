<?php
include ("config.php");
$about = "select * from teks where id like 'about%'";
$result_about = mysqli_query($db, $about);
$about = array();

while ($row = mysqli_fetch_assoc($result_about))
    $about[] = $row;
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>VSP - About Us</title>
        <link rel="icon" type="image/png" href="assets/img/favicon-16x16.png" sizes="16x16" />
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <style>
            /* jssor slider loading skin spin css */
            .jssorl-009-spin img {
                animation-name: jssorl-009-spin;
                animation-duration: 1.6s;
                animation-iteration-count: infinite;
                animation-timing-function: linear;
            }

            @keyframes jssorl-009-spin {
                from {
                    transform: rotate(0deg);
                }

                to {
                    transform: rotate(360deg);
                }
            }


            .jssorb051 .i {position:absolute;cursor:pointer;}
            .jssorb051 .i .b {fill:#fff;fill-opacity:0.5;}
            .jssorb051 .i:hover .b {fill-opacity:.7;}
            .jssorb051 .iav .b {fill-opacity: 1;}
            .jssorb051 .i.idn {opacity:.3;}

            .jssora051 {display:block;position:absolute;cursor:pointer;}
            .jssora051 .a {fill:none;stroke:#fff;stroke-width:360;stroke-miterlimit:10;}
            .jssora051:hover {opacity:.8;}
            .jssora051.jssora051dn {opacity:.5;}
            .jssora051.jssora051ds {opacity:.3;pointer-events:none;}
        </style>
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
                      <li class="nav-item border border-top-0 border-bottom-0 border-right-0">
                        <a class="nav-link" href="index.php">HOME <span class="sr-only">(current)</span></a>
                      </li>
                      <li class="nav-item border border-top-0 border-bottom-0 border-right-0 active">
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
                        <div class="row pb-3">
                            <div class="col-lg-10 mx-auto">
                                <div class="text-center">
                                    <h2>
                                        <?php echo $about[0]['teks']; ?>
<!--                                        “I’VE ALWAYS THOUGHT LEGAL ADDICTIONS ARE<br><span class="red">A GREAT WAY TO CREATE A BUSINESS</span>.”<br>–NOLAN BUSHNELL-->
                                    </h2>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-lg-6 pr-5">
                                <p class="din">
                                    <b>
                                        The Prologue From VSP Managing Partner<br>
                                        <span class="red" style="font-size:20px;font-weight:normal;">Verry Sitorus, S.H.</span><br>
                                        Managing Partner
                                    </b>
                                    <br><br>
                                </p>
                                <a href="#" class="btn btn-vsp btn-vsp-extended w-75" style="outline:none;border:0">Download Compro</a>
                            </div>
                            <div class="col-lg-6 pl-5">
                                <p class="text-small">
                                    <?php echo $about[1]['teks']; ?>
<!--                                    Dear valued clients,<br><br>-->
<!--                                    Welcome to Law Firm Verry Sitorus & Partners (VSP), a grand haven for well-skilled lawyers and qualified defenders that are always marked with its long term excellence. VSP was established in August 28, 2015 with a structured vision for serving the best legal services in the name of justice and unity.<br><br>-->
<!--                                    Our best figure is also associated with the demands for numerous cases that are blatantly measured to guarantee our brightest potentials. This is exactly what people need to be able to comprehend a lot of legal matters that are always made to be resolved in a magnificent strategy that we promise to present.<br><br>-->
<!--                                    Our mission is to bring the orientation of justice that is quite far from the reach of people who have no abilities with regard to the act of law. We believe that every person possess a mutual equality in pursuing their rights before the Court or even in the corporation schemes. <br><br>-->
<!--                                    By the gleam of this explanatory preface, our Firm thanks you deeply and we are looking forward to corresponding with you in all your legal needs.-->

                              </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>

            <div id="jssor_1" style="position:relative;margin:0 auto;top:0;left:0;width:1020px;height:380px;overflow:hidden;visibility:hidden;">
                <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
                    <img style="margin-top:-25px;position:relative;top:50%;width:45px;height:45px;" src="assets/img/spin.svg" />
                </div>
                <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1020px;height:380px;overflow:hidden;">
                    <div>
                        <img data-u="image" src="assets/img/a.jpg"/>
                    </div>
                    <div>
                        <img data-u="image" src="assets/img/B.jpg"/>
                    </div>
                    <div>
                        <img data-u="image" src="assets/img/C.jpg"/>
                    </div>
                    <div>
                        <img data-u="image" src="assets/img/D.jpg"/>
                    </div>
                    <div>
                        <img data-u="image" src="assets/img/E.jpg"/>
                    </div>
                </div>
                <div data-u="arrowleft" class="jssora051" style="width:65px;height:65px;top:0px;left:325px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
                    <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                      <img src="assets/img/prev.png" alt="prev" style="width:50%;height:50%;">
                        <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
                    </svg>
                </div>
                <div data-u="arrowright" class="jssora051" style="width:65px;height:65px;top:0px;right:320px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
                    <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                      <img src="assets/img/next.png" alt="prev" style="width:50%;height:50%;">
                        <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
                    </svg>
                </div>
            </div>

            <div class="container pt-5">
              <div class="row">
                  <div class="col-lg-12">
                      <div class="section mt-0 pt-0">
                          <div class="row">
                              <div class="col-lg-6 pr-5">
                                  <p class="text-small">
                                      <?php echo $about[2]['teks']; ?>
<!--                                      We are a people business. Being massive in class in the eyes of our clients, means that our people must be excellent. <br><br>-->
<!--Aspire to become one of the most high-quality Law Firms; we started our journey in 2015 with Industrial Relations dispute between a labor and the company where she worked, which is one of the biggest companies in Jakarta. Furthermore, the dispute settled in amicable manner between the two parties. <br><br>-->
<!--Another case in 2015 was a breach of contract that had been successfully handled by us. Since then, so many parties with various cases coming to us, such as insolvency and bankruptcy cases, suspension of debt payment, criminal, contract review, and contract drafting, and some corporate law-related cases.-->
                                </p>
                              </div>
                              <div class="col-lg-6 pl-5">
                                  <p class="text-small">
                                      <?php echo $about[3]['teks']; ?>
<!--                                      Clients' businesses are our business. We bring a long-term perspective, embracing new ideas and proactively identifying future trends. WE LISTEN TO OUR CLIENTS TO ALLOW US TO UNDERSTAND THEIR CURRENT AND FUTURE NEEDS AND TO SHAPE OUR BUSINESS TO MEET THOSE NEEDS. <br><br>-->
<!--Clients share their experiences with us that they value our solidarity, culture, and we honor the spirit of teamwork and collaboration on which our firm was built – but we also provide the benefits of working with an ambitious, forward-looking, and exceptional business. It is also important to us that we are recognized as a responsible lawyer team, wherein we use our skills and resources to pose positive effects in the community.-->
                                  </p>
                              </div>
                          </div>
                          <div class="row mt-5">
                              <div class="col-lg-12">
                                  <div class="text-center">
                                      <h2>
                                          <?php echo $about[4]['teks']; ?>
<!--                                         “AS A LAWYER AND A FORMER PROSECUTOR, I KNOW THE LIMITS OF THE POWER AND AUTHORITY OF THE PESIDENT. <br><span class="red">I KNOW WHAT IS LEGAL AND WHAT IS NOT.</span>” –RODRIGO DUTERTE-->
                                      </h2>
                                  </div>
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
                            <p>
                                Since 2015, Law Firm Verry Sitorus & Partners have been one of the best law office in Indonesia with a structured vision for serving the best legal services in the name of justice and unity. We have wide client and partner network especially in Insolvency and Bankruptcy Law.
                            </p>
                        </div>
                        <div class="col-sm-3">
                            <h5>CONTACT VSP</h5>
                            <p>
                                Gedung Kopi, 1st Floor <br>
Jl. R.P. Soeroso No. 20,<br>
Cikini - Menteng, Jakarta Pusat - 10330.<br>
P : + 62 21 3190 7457<br>
F : + 62 21 3190 7248<br>
E : law@vsp.co.id <br>
                            </p>
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
    		  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
    		  crossorigin="anonymous"></script>
            <script src="assets/js/bootstrap.min.js" charset="utf-8"></script>
            <script src="assets/js/jssor.slider-26.5.0.min.js" type="text/javascript"></script>
            <script type="text/javascript">
                jssor_1_slider_init = function() {

                    var jssor_1_options = {
                      $AutoPlay: 1,
                      $SlideWidth: 360,
                      $Cols: 2,
                      $Align: 320 ,
                      $ArrowNavigatorOptions: {
                        $Class: $JssorArrowNavigator$
                      },
                      $BulletNavigatorOptions: {
                        $Class: $JssorBulletNavigator$
                      }
                    };

                    var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

                    /*#region responsive code begin*/

                    var MAX_WIDTH = 1380;

                    function ScaleSlider() {
                        var containerElement = jssor_1_slider.$Elmt.parentNode;
                        var containerWidth = containerElement.clientWidth;

                        if (containerWidth) {

                            var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                            jssor_1_slider.$ScaleWidth(expectedWidth);
                        }
                        else {
                            window.setTimeout(ScaleSlider, 30);
                        }
                    }

                    ScaleSlider();

                    $Jssor$.$AddEvent(window, "load", ScaleSlider);
                    $Jssor$.$AddEvent(window, "resize", ScaleSlider);
                    $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
                    /*#endregion responsive code end*/
                };
                jssor_1_slider_init();
            </script>
        </body>
    </html>
