<?php


$dbhost='localhost';
$dbusername='root';
$dbuserpass='admin';
$dbname = 'desapalabrados3';



// Ahora conectamos a la base de datos.
$con= mysqli_connect($dbhost, $dbusername, $dbuserpass, $dbname);
// y la seleccionamos  para poder trabajar con ella.
//mysqli_select_db($dbname) or die('Cannot select database');
?>
