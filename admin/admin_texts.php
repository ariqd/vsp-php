<?php
include ("../session.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>VSP Admin</title>
    <link rel="icon" type="image/png" href="../assets/img/favicon-16x16.png" sizes="16x16" />
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <style>
    /*
    * Base structure
    */

    /* Move down content because we have a fixed navbar that is 3.5rem tall */
    body {
    padding-top: 3.5rem;
    }

    /*
    * Typography
    */

    h1 {
    padding-bottom: 9px;
    margin-bottom: 20px;
    border-bottom: 1px solid #eee;
    }

    /*
    * Sidebar
    */

    .sidebar {
    position: fixed;
    top: 51px;
    bottom: 0;
    left: 0;
    z-index: 1000;
    padding: 20px 0;
    overflow-x: hidden;
    overflow-y: auto; /* Scrollable contents if viewport is shorter than content. */
    border-right: 1px solid #eee;
    }

    .sidebar .nav {
    margin-bottom: 20px;
    }

    .sidebar .nav-item {
    width: 100%;
    }

    .sidebar .nav-item + .nav-item {
    margin-left: 0;
    }

    .sidebar .nav-link {
    border-radius: 0;
    color: #95989A;
    }

    .sidebar .nav-link.active {
    background-color: #C0202F;
    }
    /*
    * Dashboard
    */

    /* Placeholders */
    .placeholders {
    padding-bottom: 3rem;
    }

    .placeholder img {
    padding-top: 1.5rem;
    padding-bottom: 1.5rem;
    }

    .crop {
        min-height: 120px;
        overflow: hidden;
        position: relative;
    }

    .crop img {
        position: absolute;
    }

        .nav-item {
            color: #C0202F;
        }

    </style>
</head>
<body>
    <header>
      <nav class="navbar navbar-expand-md navbar-light fixed-top bg-light">
        <a class="navbar-brand" href="#">VSP Admin</a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="logout.php">Log Out</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-sm-3 col-md-2 d-none d-sm-block bg-light sidebar">
          <ul class="nav nav-pills flex-column">
            <li class="nav-item">
              <a class="nav-link" href="admin_artikel.php">Artikel</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="admin_texts.php">Teks</a>
            </li>
          </ul>
        </nav>

        <main role="main" class="col-sm-9 ml-sm-auto col-md-10 pt-3">
          <h1>Teks</h1>
            <nav class="nav nav-tabs nav-fill" id="myTab" role="tablist">
                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab"
                   aria-controls="nav-home" aria-selected="true">Home</a>
                <a class="nav-item nav-link" id="nav-about-tab" data-toggle="tab" href="#nav-about" role="tab"
                   aria-controls="nav-about" aria-selected="false">About VSP</a>
                <a class="nav-item nav-link" id="nav-expertise-tab" data-toggle="tab" href="#nav-expertise" role="tab"
                   aria-controls="nav-expertise" aria-selected="false">Expertise</a>
                <a class="nav-item nav-link" id="nav-client-tab" data-toggle="tab" href="#nav-client" role="tab"
                   aria-controls="nav-client" aria-selected="false">Client</a>
                <a class="nav-item nav-link" id="nav-lawyers-tab" data-toggle="tab" href="#nav-lawyers" role="tab"
                   aria-controls="nav-lawyers" aria-selected="false">Lawyers</a>
                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab"
                   aria-controls="nav-contact" aria-selected="false">Contact</a>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    
                </div>
                <div class="tab-pane fade" id="nav-about" role="tabpanel" aria-labelledby="nav-about-tab">

                </div>
                <div class="tab-pane fade" id="nav-expertise" role="tabpanel" aria-labelledby="nav-expertise-tab">...</div>
                <div class="tab-pane fade" id="nav-client" role="tabpanel" aria-labelledby="nav-client-tab">...</div>
                <div class="tab-pane fade" id="nav-lawyers" role="tabpanel" aria-labelledby="nav-lawyers-tab">...</div>
                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">...</div>
            </div>
        </main>
      </div>
    </div>
    <script
      src="https://code.jquery.com/jquery-3.2.1.min.js"
      integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
      crossorigin="anonymous"></script>
      <script src="../assets/js/popper.min.js" charset="utf-8"></script>
    <script src="../assets/js/bootstrap.min.js" charset="utf-8"></script>
</body>
</html>
