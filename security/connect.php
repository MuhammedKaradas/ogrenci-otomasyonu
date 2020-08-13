<?php 


$serverName = "DESKTOP-UO0SBV2";

$connectionInfo = array("Database" => "ogrenci_otomasyonu");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if ( $conn ){
	echo "Connection established.<br>";
}else{
	echo"Connection could not be established.<br>";
	die(print_r(sqlsrv_errors(), true));
}




?>