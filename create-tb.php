<?php
    require "koneksi.php";

    $sql = "CREATE TABLE menu (
            id int(4) NOT NULL AUTO_INCREMENT,
            nama VARCHAR(50) NOT NULL,
            jenis VARCHAR(50) NOT NULL,
            harga int(11) NOT NULL,
            link_img varchar(100) NOT NULL,
            PRIMARY KEY (id)
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci";
            
    if (mysqli_query($conn,$sql)) {
        echo "tabel menu berhasil dibuat";
    }
?>