
<?php
include_once 'conexao.php';
$email = $_GET['usuario'];
$senha = $_GET['senha'];

$sql = $dbcon->query("SELECT * FROM tblogin where email='$email' AND senha='$senha' ");

if(mysqli_num_rows($sql)>0){
    header("Location: https://www.whatsapp.com/?lang=pt_br");
die();
}else{
 echo "login erro";
}


?>