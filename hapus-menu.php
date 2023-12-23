<?php
    //tempel code dari file koneksi.php
    include "koneksi.php";

    $id = $_GET['id'];
    $query = mysqli_query($conn,"DELETE FROM menu WHERE id='$id'");

    if($query){
        header('Location:menu.php');
    }
?>