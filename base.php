
<?php
$dsn="mysql:host=localhost; charset=utf8; dbname=invoice";
$pdo=new PDO($dsn, "root", "");

// MySQL要連線才可執行


// session_start();
// function all($invtb){
// global $pdo;
// $sql="SELECT * FROM invtb";
// return $pdo->query($sql)->fetchAll();
// }

?>