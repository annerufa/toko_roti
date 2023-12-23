<?php

require "koneksi.php";

$sql = "SELECT * FROM menu";
$hasil = mysqli_query($conn, $sql);
$no=1;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>
    <link rel="stylesheet" href="style.css">
</head>
<body align="center">
    <table width="100%" cellspacing="0">
        <!-- baris pertama -->
        <tr class="navbar">
            <td width="250" bgcolor="#b31117">
                <img width="75px" src="img/logo deak.png">
            </td>
            <td colspan="2" bgcolor="#b31117" text="#FFFFFF">
                <p>
                    <a href="profil.html"><img src="img/woman.png" width="50px" align="right" alt=""></a>
                    <font size="5pt" color="#FFFFFF"><b>--- DEA BAKERY ---<br></b></font>
                    <font size="2pt" color="#FFFFFF"><i>Bakery Halal yang Berpengalaman Sejak 2009</i></font>
                </p>
            </td>
        </tr>

        <!-- baris kedua -->
        <tr height="500px" >
            <!-- Menu Website -->
            <td bgcolor="#FFA086" align="center">
                <ul id="menu">
                    <li><a href="beranda.html"><b>Beranda</b></a></li><br>
                    <li><a href="menu.php" class="active"><b>Menu</b></a></li><br>
                    <li><a href="order.html"><b>Pemesanan</b></a></li><br>
                    <li><a href="outlet.html"><b>Outlet</b></a></li><br>
                    <li><a href="penghargaan.html"><b>Penghargaan</b></a></li><br>
                    <li><a href="tentangKami.html"><b>Tentang Kami</b></a></li><br>
                    <li><a href="blog-1.html"><b>Blog</b></a></li><br>
                </ul>
            </td>
            <!-- Content Website -->
            <td colspan="2">   
                <div class="content">
                    <h2><font color="#80494a">MENU</font></h2><br>
                    <div>
                        <a href='tambah-menu.php' class='btn tambah'>Tambah</a>
                        <br><br>
                    </div>
                    <table width="100%" class="table-menu">
                        <tr>
                            <td>No</td>
                            <td>Nama</td>
                            <td>Jenis</td>
                            <td>Harga</td>
                            <td>Gambar</td>
                            <td>Aksi</td>
                        </tr>
                        <?php
                            while($menu = mysqli_fetch_array($hasil)){
                        ?>
                            <tr>
                                <td><?php echo $no++;?></td>
                                <td><?php echo $menu["nama"];?></td>
                                <td><?php echo $menu["jenis"];?></td>
                                <td><?php echo $menu["harga"];?></td>
                                <td>
                                    <img src="img/<?php echo $menu["link_img"];?>" width="60px" alt="">
                                </td>
                                <td width="200px">
                                    <a href="ubahMenu.php?id=<?php echo $menu["id"];?>" class="btn ubah">Ubah</a>
                                    <a href="hapus-menu.php?id=<?php echo $menu["id"];?>" class='btn hapus' onclick='return confirm("Yakin Hapus data ini?")'>Hapus</a>
                                </td>
                            </tr>
                        <?php
                            }
                        ?>
                    </table>
                </div>
            </td>
        </tr>

        <!-- baris ketiga -->
        <tr  bgcolor="#b31117" height="82px">
            <td colspan="2">
                <table class="">
                    <tr>
                        <td rowspan="2" width="300px"><font size=3px color="#FFFFFF"><b><u>Hubungi Kami: </u></b></font></td>
                        <td>
                            <font size=2px color="#FFFFFF">
                                Jl. Ranugrati Gg II No.54A, RT.03/RW06, Sawojajar, Kec. Kedungkandang, Kota Malang, Jawa Timur 65139
                            </font>
                        </td>
                    </tr>
                    <tr>
                        <td><font size=2px color="#FFFFFF">+628121698798</font></td>
                    </tr>
                </table>
            </td>
            <td width="20%">
                <p align="center">
                    <font size=3px color="#FFFFFF"><b><u>Sosial Media: </u></b><br></font>
                </p>
                <p>
                    <img src="img/instagram.png" alt="">
                    <img src="img/facebook.png" alt="">
                </p>
            </td>
        </tr>
    </table>
</body>
</html>