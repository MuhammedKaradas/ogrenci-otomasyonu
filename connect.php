<?php 

$servername = "localhost";/*sunucumuzun adı, biz localde çalıştığımız için localhost diye belirtiyoruz. */
$username ="root";//
$password = "";//
/*
Apache sunucusunu çalıştırdığım program xammp,
Xammp programında yetkili kullanıcı adı: root
parola:

*/

try 
{
    $connection = new PDO("mysql:host=$servername;dbname=ogrenci_otomasyonu",$username,$password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfuly.";
    //bağlantımız başarılı olduğunu anlamamız için ekrana çıktı veriyoruz.
}

catch(PDOException $e)
{
    echo "Connection failed: ". $e->getMessage();
    //Bağlantımız başarısız olursa eğer geriye hangi hatadan kaynaklandığını çıktı olarak gösteriyoruz.
}



?>