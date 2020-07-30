<?php
include '../../config/koneksi.php';

if(isset($_POST['Barang'])) {
    $kategori = $_POST['kategori'];
    $size = $_POST['size'];
    $warna = $_POST['warna'];
    $bahan = $_POST['bahan'];
    $stock = $_POST['stock'];
    $harga = $_POST['harga'];

    $sql = "INSERT INTO baju (kategori, size, warna, bahan, stock, harga) VALUES ('$kategori','$size','$warna','$bahan','$stock','$harga')";
    $query = mysqli_query($conn, $sql);

    if($query){
        header('location:../_barang.php?msg=Data Berhasil Di Input');
    }
    else{
        header('location:../_barang.php?msg=Data Gagal Di Input');
    }
}

if(isset($_POST['Brand'])) {
    //menentukan file upload 
    $target_dir = "../../uploads/produk/";//alamat lokasi folder gmbr akan disimpan
    $target_file = $target_dir . basename($_FILES["file"]["name"]);//detail spesifikasi lokasi dan nama file
    $uploadOk=1;

    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
            //Proses Files and DB
            //Files Data
            $nama = $_POST['nama'];
            $bahan = $_POST['bahan'];
            $size = $_POST['size'];
            $harga = $_POST['harga'];
            $stock = $_POST['stock'];
            $fil_name=$_FILES["file"]["name"];
            
            $fil_query = mysqli_query($conn, "INSERT INTO produk (nama, bahan, size, harga, stok, gambar) VALUES('$nama','$bahan','$size','$harga','$stock','$fil_name')");
            if(!$fil_query){
                echo 'mysqli Error! ';
                mysqli_close($conn);
                exit;
            }
            header('location:../_brand.php?msg=Data Berhasil Di Input');
        } else {
            header('location:../_brand.php?msg=Data Gagal Di Input');
        }
    }
}

if(isset($_POST['Desain'])) {
    //menentukan file upload 
    $target_dir = "../../uploads/desain/";//alamat lokasi folder gmbr akan disimpan
    $target_file = $target_dir . basename($_FILES["file"]["name"]);//detail spesifikasi lokasi dan nama file
    $uploadOk=1;

    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
            //Proses Files and DB
            //Files Data
            $nama = $_POST['nama'];
            $fil_name=$_FILES["file"]["name"];
            
            $fil_query = mysqli_query($conn, "INSERT INTO desain (nama, gambar) VALUES('$nama','$fil_name')");
            if(!$fil_query){
                echo 'mysqli Error! ';
                mysqli_close($conn);
                exit;
            }
            header('location:../_desain.php?msg=Data Berhasil Di Input');
        } else {
            header('location:../_desain.php?msg=Data Gagal Di Input');
        }
    }
}
?>