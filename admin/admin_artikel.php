<?php
include ("../session.php");
$query = "SELECT news.*, kategori.nama FROM news JOIN kategori ON news.id_kategori = kategori.id_kategori ORDER BY news.nomor ASC";
$news = mysqli_query($db, $query);

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
    <link rel="stylesheet" href="../assets/css/admin.css">
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
                  <a href="../index.php" class="nav-link">Go To Front Page</a>
              </li>
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
              <a class="nav-link active" href="admin_artikel.php">Artikel</a>
            </li>
<!--            <li class="nav-item">-->
<!--              <a class="nav-link" href="admin_texts.php">Teks</a>-->
<!--            </li>-->
          </ul>
        </nav>

        <main role="main" class="col-sm-9 ml-sm-auto col-md-10 pt-3">
          <h1>
              Artikel
<!--              <div class="float-right">-->
<!--                  <a href="#" class="btn btn-secondary btn-lg">+ Kategori Baru</a>-->
<!--                  <a href="admin_artikel_new.php" class="btn btn-primary btn-lg">+ Artikel Baru</a>-->
<!--              </div>-->
          </h1>
          <div class="card-deck">
              <?php
              while ($row = mysqli_fetch_assoc($news)) {
                  ?>
                  <div class="card">
                      <div class="card-header">Artikel <?php echo $row['id_kategori']; ?></div>
                      <div class="crop">
                          <img class="card-img-top" src="../assets/img/<?php echo $row['gambar'];?>" alt="Card image cap" style="bottom:-30px">
                      </div>
                      <div class="card-body">
                          <p class="card-text"><?php echo $row['nama']; ?></p>
                          <h4 class="card-title"><?php echo $row['judul']; ?></h4>
                          <p class="card-text"><small class="text-muted"><?php echo $row['tgl_buat'];?></small></p>
                      </div>
                      <div class="card-footer">
                          <a href="../news.php?id=<?php echo $row['id_news'];?>" class="card-link text-secondary">Lihat Artikel</a>
                          <a href="admin_artikel_edit.php?id=<?php echo $row['id_news'];?>" class="card-link">Edit</a>
                      </div>
                  </div>
              <?php
              }
              ?>
            </div>
        </main>
      </div>
    </div>
    <script
      src="https://code.jquery.com/jquery-3.2.1.min.js"
      integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
      crossorigin="anonymous"></script>
    <script
      src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
      integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
      crossorigin="anonymous"></script>
      <script src="../assets/js/popper.min.js" charset="utf-8"></script>
    <script src="../assets/js/bootstrap.min.js" charset="utf-8"></script>
</body>
</html>
