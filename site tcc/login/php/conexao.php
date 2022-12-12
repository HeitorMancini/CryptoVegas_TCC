
<?php

$host="localhost";
$usuario="root";
$senha= "";
$banco= "dblogin";

$dbcon = new MYSQLi("$host","$usuario","$senha","$banco");

if($dbcon->connect_error){

echo "conexão erro";
}/*else{
 echo "conexão ok";   
}*/

?>