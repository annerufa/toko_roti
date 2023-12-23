<?php
    include "koneksi.php";

    if(isset($_POST['tambah-menu'])){
        $nama= $_POST['nama'];
        $jenis = $_POST['jenis'];
        $harga = $_POST['harga'];
        $file_name=$_FILES['file']['name'];
        $tmp_name=$_FILES['file']['tmp_name'];
        //upload file in folder
        move_uploaded_file($tmp_name,"img/".$file_name);
        
        //upload in db
        $insert="INSERT INTO menu(nama,jenis,harga,link_img)VALUES('$nama','$jenis','$harga','$file_name')";
        if(mysqli_query($conn,$insert)){
            header("location:menu.php"); 
        }

    }
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
        <tr height="500px">
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
                <div class="content-addmenu">
                    <h2><font color="#80494a">TAMBAH MENU</font></h2>
                    <!-- form data budaya  -->
                <form action="" method="POST"  enctype="multipart/form-data">
                <table class="add-menu">
                    <tr>
                        <td>Nama Produk</td>
                        <td>
                            : <input type="text" name="nama" id="nama">
                        </td>
                    </tr>
                    <tr>
                        <td>Jenis Produk</td>
                        <td>
                            : <select name="jenis" id="jenis">
                                <option value="Bakery">Bakery</option>
                                <option value="Cake">Cake</option>
                                <option value="Donut">Donut</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Harga</td>
                        <td>
                            : <input type="number" name="harga" id="harga">
                        </td>
                    </tr>
                    <tr>
                        <td>Gambar Produk</td>
                        <td>
                            : <input type="file" name="file" id="file" value="upload"/><br />
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="submit" class="btn tambah" id="btn-simpan" name="tambah-menu" value="Simpan">
                        </td>
                    </tr>
                </table>
                </form>
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