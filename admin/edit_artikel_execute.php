<?php
include ("../session.php");
    $edit = false;
    $id = $_POST['id_news'];
    $judul = $_POST['judul'];
    $kategori = $_POST['kategori'];
    $header = $_POST['header'];
    $kolom1 = $_POST['kolom1'];
    $kolom2 = $_POST['kolom2'];
    $tgl_buat = date("Y-m-d");

    if (isset($_POST['gambar'])) {
        $target_dir = "../assets/img/";
        $target_name = basename($_FILES["gambar"]["name"]);
        $target_file = $target_dir . $target_name;
        $uploadOk = 1;
        $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);

        // Check if image file is a actual image or fake image
        if (isset($_POST["gambar"])) {
            $check = getimagesize($_FILES["gambar"]["tmp_name"]);
            if ($check !== false) {
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
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif") {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file)) {
                echo "The file " . basename($_FILES["gambar"]["name"]) . " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
        $query = "UPDATE news SET judul='$judul', id_kategori=$kategori, header='$header', kolom1='$kolom1', kolom2='kolom2', gambar='$target_name',tgl_buat=$tgl_buat
                  WHERE id_news=$id";
    } else {
        $query = "UPDATE news SET judul='$judul', id_kategori=$kategori, header='$header', kolom1='$kolom1', kolom2='$kolom2', tgl_buat=$tgl_buat
                  WHERE id_news=$id";
    }
    mysqli_query($db, $query);
    header('location: admin_artikel.php');

