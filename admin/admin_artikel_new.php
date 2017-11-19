<?php
include ("../session.php");
if(array_key_exists('judul', $_POST)) {
    $judul = $_POST['judul'];
    $kolom1 = $_POST['kolom1'];
    $kolom2 = $_POST['kolom2'];

    $target_dir = "../assets/img/";
    $target_name = basename($_FILES["gambar"]["name"]);
    $target_file = $target_dir . $target_name;
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["gambar"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }
    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }
    // Check file size
    if ($_FILES["gambar"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file)) {
            echo "The file ". basename( $_FILES["gambar"]["name"]). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }

    $query = "insert into news ()";
}
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
                    <a class="nav-link" href="#">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="admin_artikel.php">Artikel</a>
                </li>
            </ul>
        </nav>
        <main role="main" class="col-sm-9 ml-sm-auto col-md-10 pt-3">
            <h1> <a href="admin_artikel.php"><img src="../assets/img/prev.png" width="35" alt="back" class="img-fluid"></a> Edit Artikel</h1>
            <form action="admin_artikel.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="judul">Judul</label>
                    <input type="text" class="form-control" id="judul" placeholder="Judul artikel anda..." name="judul" required>
                </div>
                <div class="form-group">
                    <label for="nis">Kategori</label>
                    <select name="nis" id="nis">
                        <?php
                        $queri="SELECT * FROM kategori";
                        $hasil = mysqli_query($db,$queri);
                        while($ambil = mysqli_fetch_assoc($hasil))
                        {
                            echo "<option value='".$ambil['id_kategori']."'>".$ambil['nama']."</option>\n";
                        }
                        ?>
                    </select>
                </div>
                <form>
                    <div class="form-group">
                        <label for="file">Gambar (JPG / PNG 853x654)</label>
                        <input type="file" class="form-control-file" id="file" name="gambar">
                    </div>
                </form>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="kolom1">Kolom 1</label>
                            <textarea class="form-control" id="kolom1" rows="10" placeholder="Isi kolom 1..." required></textarea>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="kolom2">Kolom 2</label>
                            <textarea class="form-control" id="kolom2" rows="10" placeholder="Isi kolom 2..."></textarea>
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
