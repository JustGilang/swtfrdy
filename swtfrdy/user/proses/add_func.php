<?php
$conn = mysqli_connect("localhost", "root", "", "swtfrdy");

switch($_GET['act']){
    case 'add_trans_custom' :
        $id_member = $_POST['id_member'];
        $id_order = '-';
        $id_custom = $_POST['id_custom'];
        $date = date('Y-m-d');
        $nominal = $_POST['nominal'];
        $bank = $_POST['bank'];
        $gambar = '-';
        
        $sql = mysqli_query($conn, "INSERT INTO bukti_tf (id_member, id_order, id_custom, tanggal, nominal, bank, gambar) VALUES
        ('$id_member', '$id_order', '$id_custom', '$date', '$nominal', '$bank', '$gambar')");

        //menentukan file upload 
        $target_dir = "../../uploads/transaksi/";//alamat lokasi folder gmbr akan disimpan
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
                
                $fil_name=$_FILES["file"]["name"];
                
                $fil_query = mysqli_query($conn, "UPDATE bukti_tf SET gambar='$fil_name' WHERE id_member = '$id_member'");
                
                if(!$fil_query){
                    echo 'mysqli Error! ';
                    mysqli_close($conn);
                    exit;
                }
                header('location:../_custom.php?msg=Data Berhasil Di Input');
            } else {
                header('location:../_custom.php?msg=Data Gagal Di Input');
            }
        }
    break;

    case 'add_trans_order' :
        $id_member = $_POST['id_member'];
        $id_order = $_POST['id_order'];
        $id_custom = '-';
        $date = date('Y-m-d');
        $nominal = $_POST['nominal'];
        $bank = $_POST['bank'];
        $gambar = '-';
        
        $sql = mysqli_query($conn, "INSERT INTO bukti_tf (id_member, id_order, id_custom, tanggal, nominal, bank, gambar) VALUES
        ('$id_member', '$id_order', '$id_custom', '$date', '$nominal', '$bank', '$gambar')");

        //menentukan file upload 
        $target_dir = "../../uploads/transaksi/";//alamat lokasi folder gmbr akan disimpan
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
                
                $fil_name=$_FILES["file"]["name"];
                
                $fil_query = mysqli_query($conn, "UPDATE bukti_tf SET gambar='$fil_name' WHERE id_member = '$id_member'");
                
                if(!$fil_query){
                    echo 'mysqli Error! ';
                    mysqli_close($conn);
                    exit;
                }
                header('location:../_custom.php?msg=Data Berhasil Di Input');
            } else {
                header('location:../_custom.php?msg=Data Gagal Di Input');
            }
        }
    break;
}
?>