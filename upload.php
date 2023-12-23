    <?php
    require "koneksi.php";
    ob_start();
    if(isset($_POST['update-menu'])){
        $nama= $_POST['nama'];
        $jenis = $_POST['jenis'];
        $harga = $_POST['harga'];
        // jika mengubah gambar
        if(isset($_FILES['files']) ){  
            $file_name=$_FILES['file']['name'];
            $tmp_name=$_FILES['file']['tmp_name'];
            $query = "UPDATE menu SET nama='$nama',jenis='$jenis', harga='$harga', link_img='$file_name' WHERE id='$_POST[id]'";
            if (mysqli_query($conn, $query)) {
                header("Location: menu.php"); 
            }
            move_uploaded_file($tmp_name,"img/".$file_name);
        }else{
            $query = "UPDATE menu SET nama='$nama',jenis='$jenis', harga='$harga' WHERE id='$_POST[id]'";
            if (mysqli_query($conn, $query)) {
                header("Location: menu.php"); 
            }
        }
    }
    ?>