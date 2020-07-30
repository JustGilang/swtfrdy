<?php
include '../../config/koneksi.php';

if(isset($_POST['Barang'])) {
    $id = $_POST['id'];
    $kategori = $_POST['kategori'];
    $size = $_POST['size'];
    $warna = $_POST['warna'];
    $bahan = $_POST['bahan'];
    $stock = $_POST['stock'];
    $harga = $_POST['harga'];

    $sql = "UPDATE baju SET kategori='$kategori', size='$size', warna='$warna', bahan='$bahan', stock='$stock', harga='$harga' WHERE id_baju='$id'";
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

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $bahan = $_POST['bahan'];
    $size = $_POST['size'];
    $harga = $_POST['harga'];
    $stock = $_POST['stock'];
    $fil_name=$_FILES["file"]["name"];
            
    $fil_query = mysqli_query($conn, "UPDATE produk SET nama='$nama', bahan='$bahan', size='$size', harga='$harga', stok='$stock' WHERE id_produk='$id'");

    // Check if file already exists
    if (file_exists($target_file)) {
        header('location:../_brand.php?msg=gagal upload gambar');
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        header('location:../_brand.php?msg=gagal upload');
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
            //Proses Files and DB
            //Files Data

            $fil_name=$_FILES["file"]["name"];
            
            $fil_query = mysqli_query($conn, "UPDATE produk SET gambar='$fil_name' WHERE id_produk='$id'");
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

    $id = $_POST['id'];
    $nama = $_POST['nama'];
            
    $fil_query = mysqli_query($conn, "UPDATE desain SET nama='$nama' WHERE id_desain='$id'");

    // Check if file already exists
    if (file_exists($target_file)) {
        header('location:../_desain.php?msg=gagal upload gambar');
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        header('location:../_desain.php?msg=gagal upload');
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
            //Proses Files and DB
            //Files Data

            $fil_name=$_FILES["file"]["name"];
            
            $fil_query = mysqli_query($conn, "UPDATE desain SET gambar='$fil_name' WHERE id_desain='$id'");
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

if(isset($_POST['Member'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $alamat = $_POST['alamat'];
    $cp = $_POST['cp'];

    $sql = "UPDATE member SET nama='$nama', email='$email', username='$username', pass='$password', alamat='$alamat', no_telp='$cp' WHERE id='$id'";
    $query = mysqli_query($conn, $sql);

    if($query){
        header('location:../_member.php?msg=Data Berhasil Di Input');
    }
    else{
        header('location:../_member.php?msg=Data Gagal Di Input');
    }
}
?>