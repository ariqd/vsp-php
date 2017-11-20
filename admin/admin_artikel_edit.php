<?php
include ("../session.php");
    $id = $_GET['id'];
    $edit = true;
    $query = "SELECT news.*, kategori.nama FROM news JOIN kategori ON news.id_kategori = kategori.id_kategori WHERE news.id_news = $id";
    $news = mysqli_query($db, $query);
    $data = mysqli_fetch_array($news);
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
                    <a href="../index.php" class="nav-link">Go To Front Page</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Log Out</a>
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
                <li class="nav-item">
                    <a class="nav-link" href="admin_texts.php">Teks</a>
                </li>
            </ul>
        </nav>
        <main role="main" class="col-sm-9 ml-sm-auto col-md-10 pt-3">
            <h1> <a href="admin_artikel.php"><img src="../assets/img/prev.png" width="35" alt="back" class="img-fluid"></a> Edit Artikel</h1>
            <form action="edit_artikel_execute.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id_news" value="<?php echo $id ?>">
                <div class="form-group">
                    <label for="judul">Judul</label>
                    <input type="text" class="form-control" id="judul" placeholder="Judul artikel anda..."
                           name="judul" value="<?php echo htmlentities($data['judul']);?>" required>
                </div>
                <div class="form-group">
                    <label for="kategori">Kategori</label>
                    <select name="kategori" id="kategori">
                        <?php
                        $queri="SELECT * FROM kategori";
                        $hasil = mysqli_query($db,$queri);
                        while($ambil = mysqli_fetch_assoc($hasil))
                        { ?>
                            <option value="<?php echo $ambil['id_kategori'];?>" <?php if($ambil['id_kategori'] == $data['id_kategori']) {  ?> selected <?php }; ?>>
                                <?php echo $ambil['nama'];?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="header">Header</label>
                    <input type="text" class="form-control" id="header" placeholder="Header artikel anda..."
                           name="header" value="<?php echo $data['header'];?>" required>
                </div>
                <div class="form-group">
                    <label for="file">Gambar (JPG / PNG 853x654)</label>
                    <input type="file" class="form-control-file" id="file" name="gambar">
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="kolom1">Kolom 1</label>
                            <textarea class="form-control" name="kolom1" id="kolom1" rows="10" placeholder="Isi kolom 1..." required><?php echo $data['kolom1']?></textarea>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="kolom2">Kolom 2</label>
                            <textarea class="form-control" name="kolom2" id="kolom2" rows="10" placeholder="Isi kolom 2..."><?php echo $data['kolom2'];?></textarea>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </form>
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
