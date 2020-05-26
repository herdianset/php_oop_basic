<?php
include "koneksi.php";

class login extends database{
    
    function __construct(){
		parent::__construct();
    }
    
    function login_proses($username, $password)
    {
        $qry = "select * from user where username = '$username' and password = '$password'";
        $exec = mysqli_query($this->conn,$qry);
        $data = mysqli_fetch_array($exec);
        
        return $data;
    }

}

$xlogin = new login();

$username = $_POST['username'];
$password = $_POST['password'];

$data = $xlogin->login_proses($username, $password);

if($data)
{
    session_start();
    $_SESSION['user'] = $data['nama'];
    echo "<script>alert('Login Berhail');window.location = 'index.php'</script>";
    
}else{
    echo "<script>alert('Login gagal');window.location = 'login.php'</script>";
}

?>