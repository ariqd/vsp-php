<?php
$statusMsg = '';
$msgClass = '';
if(isset($_POST['submit'])){
    // Get the submitted form data
    $email = $_POST['email'];
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Check whether submitted data is not empty
    if(!empty($email) && !empty($name) && !empty($subject) && !empty($message)){

        if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
            $statusMsg = 'Please enter your valid email.';
            $msgClass = 'errordiv';
        }else{
            // Recipient email
            $toEmail = 'user@example.com';
            $emailSubject = 'Contact Request Submitted by '.$name;
            $htmlContent = '<h2>Contact Request Submitted</h2>
                <h4>Name</h4><p>'.$name.'</p>
                <h4>Email</h4><p>'.$email.'</p>
                <h4>Subject</h4><p>'.$subject.'</p>
                <h4>Message</h4><p>'.$message.'</p>';

            // Set content-type header for sending HTML email
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

            // Additional headers
            $headers .= 'From: '.$name.'<'.$email.'>'. "\r\n";

            // Send email
            if(mail($toEmail,$emailSubject,$htmlContent,$headers)){
                $statusMsg = 'Your contact request has been submitted successfully !';
                $msgClass = 'succdiv';
            }else{
                $statusMsg = 'Your contact request submission failed, please try again.';
                $msgClass = 'errordiv';
            }
        }
    }else{
        $statusMsg = 'Please fill all the fields.';
        $msgClass = 'errordiv';
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>VSP - Contact Us</title>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" charset="utf-8"></script>
        <script src="assets/js/popper.min.js" charset="utf-8"></script>
        <script src="assets/js/bootstrap.min.js" charset="utf-8"></script>
        <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCPuOVcESQfbPsBNR6Y4AYxKxHtWGTkZS4"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                function initialize() {
                    var mapProp = {
                        center:new google.maps.LatLng(-6.189496,106.835558,20),
                        zoom:16,
                        mapTypeId:google.maps.MapTypeId.ROADMAP,
                        mapTypeControlOptions: {
                            style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR,
                            position: google.maps.ControlPosition.BOTTOM_CENTER
                        }
                    };
                    var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);

                    var marker = new google.maps.Marker({
                        position: mapProp.center,
                        title:"VSP"
                    });

                    marker.setMap(map);
                }
                google.maps.event.addDomListener(window, 'load', initialize);
            });
        </script>
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
                        <li class="nav-item border border-top-0 border-bottom-0 active">
                            <a class="nav-link" href="contact.php">CONTACT</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container-fluid">
            <div class="row">
              <div class="col-lg-12 p-0">
                  <img class="d-block w-100" src="assets/img/law1.png">
              </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-map">
                        <div class="row pb-5">
                            <div class="col-md-10 mx-auto">
                                <div class="text-center">
                                <h2>
                                    "THERE IS NO BETTER WAY OF EXERCISING THE IMAGINATION THAN <span class="red">THE STUDY OF LAW.</span>
                                    NO POET EVER INTERPRETED NATURE AS FREELY AS A <span class="red">LAWYER INTERPRETS THE TRUTH.</span>"
                                    -JEAN GIRAUDOUX
                                </h2>
                                </div>
                            </div>
                        </div>
                        <div class="row py-5">
                            <div class="col-md-4">
                              <img src="assets/img/logo-tax.png" alt="insolvency">
                              <h4 class="my-4"><span class="red">CONTACT US</span></h4>
                              <p>Gedung Kopi, 1st Floor <br>
                                Jl. R.P. Soeroso No. 20,<br>
                                Cikini - Menteng, Jakarta Pusat - 10330.<br>
                                P : + 62 21 3190 7457<br>
                                F : + 62 21 3190 7248<br>
                                E : law@vsp.co.id <br>
                              </p> <br>
                              <a href="https://www.instagram.com/lawfirmverrysitorus/">
                                  <img src="assets/img/ig.png" alt="instagram-logo">
                              </a>
                              <a href="https://www.facebook.com/vsplawfirm/">
                                  <img src="assets/img/fb.png" alt="facebook-logo">
                              </a>
                            </div>
                            <div class="col-md-8">
                                <?php if(!empty($statusMsg)){ ?>
                                    <p class="statusMsg <?php echo !empty($msgClass)?$msgClass:''; ?>"><?php echo $statusMsg; ?></p>
                                <?php } ?>
                                <form action="" method="post">
                                    <div class="form-group">
                                      <input type="email" required="required"/>
                                      <label class="control-label" for="input">Email Address</label><i class="bar"></i>
                                    </div>
                                    <div class="form-group">
                                      <input type="text" required="required"/>
                                      <label class="control-label" for="input">Full Name</label><i class="bar"></i>
                                    </div>
                                    <div class="form-group">
                                      <textarea required="required" rows="6"></textarea>
                                      <label class="control-label" for="textarea">Message</label><i class="bar"></i>
                                    </div>
                                    <div class="button-container">
                                      <button class="btn btn-vsp btn-lg w-75" type="submit" style="font-size:15px"><span>Send Email</span></button>
                                    </div>
                                  </form>
                            </div>
                          </div>
                    </div>
                 </div>
               </div>
            </div>

<div class="container">
<div id="googleMap"></div>
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

    </body>
</html>
