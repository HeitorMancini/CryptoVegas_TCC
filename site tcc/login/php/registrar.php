

<?php
include_once 'conexao.php';
$email = $_GET['usuario'];
$senha = $_GET['senha'];
$nome = $_GET['nome'];


$sql2 = $dbcon->query("SELECT * FROM tblogin where usuario='$email' ");

if(mysqli_num_rows($sql2)>0){
    echo "email já cadastrado";
}else{
$sql3 = $dbcon->query("INSERT INTO tblogin (nome,email,senha) VALUES ('$nome','$email','$senha')");

if($sql3){
    echo "registro ok";
}else{
 echo "registro erro";
}

}

?>