<?php
include '../config/koneksi.php';

switch($_GET['act']){
    case 'add_cart':
        $id_produk = $_POST['id_produk'];
        $id_member = $_POST['id_member'];
        $date = date('Y-m-d');
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
    break;

    case 'add_custom' :
        $id_member = $_POST['id_member'];
        $id_baju = $_POST['id_baju'];
        $jml = $_POST['jumlah_pesanan'];
        $keterangan = $_POST['keterangan'];
        $desain = '-';
        
        $baju = mysqli_query($conn, "SELECT * FROM baju WHERE id_baju = '$id_baju'");
        $data = mysqli_fetch_array($baju);

        if($sablon = $_POST['sablon'] == 'a4'){
            $harga = 30000;
            $total = $data['harga'] + $harga;
            $sql = mysqli_query($conn, "INSERT INTO custom (id_member, id_baju, jumlah_pesanan, ukuran_sablon, keterangan, desain, total) VALUES
            ('$id_member', '$id_baju', '$jml', '$sablon', '$keterangan', '$desain','$total')");

            if($sql){
                header('Location: ../index.php?data berhasil');
            } else {
                header('Location: ../index.php?data gagal');
            }
        } else {
            $harga = 20000;
            $total = $data['harga'] + $harga;
            $sql = mysqli_query($conn, "INSERT INTO custom (id_member, id_baju, jumlah_pesanan, ukuran_sablon, keterangan, desain, total) VALUES
            ('$id_member', '$id_baju', '$jml', '$sablon', '$keterangan', '$desain','$total')");

            if($sql){
                header('Location: ../index.php?data berhasil');
            } else {
                header('Location: ../index.php?data gagal');
            }
        }
    break;

    case 'delete_order' :
        $sql = mysqli_query($conn, "DELETE FROM order WHERE id_order='".$_GET['id']."'");
		if (isset($sql)) {
			# code...
			header('Location: ../index.php?data dihapus');
		}
    break;
}
?>