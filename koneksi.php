<?php 
 $host = 'localhost';
 $user = 'root';
 $pass = '';
 $db   = 'ac';
 $koneksi = mysqli_connect($host, $user, '', $db) or die(mysqli_error());
try { 
    $pdo_conn = new PDO('mysql:host=localhost;dbname=ac', 'root', '',
    array(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION,PDO::ATTR_PERSISTENT => true)); 
}
catch(PDOException $e) { 
    print "Koneksi atau query bermasalah: " . $e->getMessage() . "<br/>"; 
    die();
} 
?>
