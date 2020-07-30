<?php
    $conn = mysqli_connect("localhost", "root", "", "swtfrdy");
    if(isset($_POST['Submit'])) {
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['pass'];

        $sql = " INSERT INTO member (nama, email, username, pass, alamat) VALUES ('$nama','$email','$username','$password','')";
        $result = mysqli_query($conn, $sql) or die (mysqli_error());
        if($result){
            // Show message when user added
            header('location:../login.php?msg=Akun berhasil ditambahkan');
        }
        else{
            header('location:register.php?msg=GagalTambahAkun');
        }
    }
?>