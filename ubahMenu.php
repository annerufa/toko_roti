<?php
    include "koneksi.php";

    //membuat variabel $id
    $id = $_GET['id'];
    $tampil = mysqli_query($conn,"SELECT * FROM menu WHERE id='$id'");

    $data = mysqli_fetch_array($tampil);
    $fileImg= $data['link_img'];
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
                    <h2><font color="#80494a">UBAH MENU</font></h2><br>
                    <form action="upload.php" method="POST"  enctype="multipart/form-data">
                <input name="id" type="hidden" value="<?php echo $data['id'];?>">
                <table class="add-menu">
                    <tr>
                        <td>Nama Produk</td>
                        <td>
                            : <input type="text" name="nama" id="nama" value="<?php echo $data['nama'];?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Jenis Produk</td>
                        <td>
                            : <input type="text" name="jenis" id="jenis" value="<?php echo $data['jenis'];?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Harga</td>
                        <td>
                            : <input type="number" name="harga" id="harga" value="<?php echo $data['harga']; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Gambar Produk</td>
                        <td>
                            : <input type="file" name="file" id="file" value=""><br />
                        </td>
                    </tr>
                    <tr>
                        <td>Gambar Produk</td>
                        <td>
                            <img src="img/<?php echo $fileImg; ?>"  width="100px" alt="">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="submit" class="btn update" id="btn-simpan" name="update-menu" value="Simpan">
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