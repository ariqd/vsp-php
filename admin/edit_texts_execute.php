<?php
include ("../session.php");

if (array_key_exists('index', $_POST)) {
    $id = $_POST['id'];
    $text = $_POST['text'];
    $query = "update teks set teks = '$text' where id = '$id'";
    mysqli_query($db, $query);
} else {
    $i = 0;
    foreach ($_POST['id'] as $id) {
        $text = $_POST['text'][$i];
        $query = "update teks set teks = '$text' where id = '$id'";
        mysqli_query($db, $query);
        $i++;
    }
}
header('location: admin_texts.php');

