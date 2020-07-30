<?php
include "../config/koneksi.php";
/*$id_produk = $_POST['id_produk'];
        $id_member = $_POST['id_member'];
        $date = $_POST['date'];
        $qty = $_POST['qty'];
        $total_harga = $_POST['total_harga'];
        $status = 'belum terbayar';

        $sql = mysqli_query($conn, "INSERT INTO order (id_produk, id_member, tanggal, qty, total_harga, stats) VALUES
        ('".$id_produk."', '".$id_member."', '".$date."', '".$qty."', '".$total_harga."', '".$status."')");
 */       
        $id_produk = $_POST['id_produk'];
        $id_member = $_POST['id_member'];
        $date = $_POST['date'];
        $qty = $_POST['qty'];
        $total_harga = $_POST['total_harga'];
        $status = 'belum terbayar';

        $sql = mysqli_query($conn, "INSERT INTO `order` (id_produk, id_member, tanggal, qty, total_harga, stats) VALUES
        ('".$id_produk."', '".$id_member."', '".$date."', '".$qty."', '".$total_harga."', '".$status."')");

        if($sql){
            header('Location:../index.php?berhasil tambah data');
        } else {
            header('Location:../index.php?msg=gagal tambah data&id='.$status);
        }
        
?>