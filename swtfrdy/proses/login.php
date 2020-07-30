<?php 
  include '../config/koneksi.php';
  session_start();
  
  $username = $_POST['username'];
  $password = $_POST['pass'];
  
  $query = mysqli_query($conn, "SELECT id FROM member WHERE username='$username'");
  $count = mysqli_num_rows($query);
  if($count > 0){
    $queryId = mysqli_query($conn, "SELECT id FROM member WHERE username='$username' AND pass='$password'");
    $numRow = mysqli_num_rows($queryId);
    if($numRow == 0){
      echo '
        <script>
          alert("Password Salah.");
          window.location = "../login.php"
        </script>
      ';
    } else {
      $arrayId = mysqli_fetch_array($queryId);
      $_SESSION['id'] = $arrayId['id'];echo $_SESSION['id'];
      $_SESSION['status'] = "login";
      if(isset($_SESSION['id'])){
        echo '
        <script>
          alert("Login Sukses!");
          window.location = "../index.php"
        </script>
        ';
      }
    }
  } else {
    echo '
      <script>
        alert("Email tidak terdaftar.");
        window.location = "../login.php"
      </script>
    ';
  }
?>