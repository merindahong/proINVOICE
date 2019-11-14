
<?php
$dsn="mysql:host=localhost; charset=utf8; dbname=invoice";
$pdo=new PDO($dsn, "root", "");

// MySQL要連線才可執行，否則這裡會出現error。
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


<?php


$sql="SELECT * FROM prize WHERE `term`='0102'";
$data= $pdo->query($sql)->fetchAll();
print_r($data);

echo "<br><br><br>";

$term="01-02";
$sp1="12121212";
$special="恭喜你中了一千萬";
$sql="SELECT * FROM `invtb` WHERE `number` Like('$sp1') && `term` IN('$term')  ";
$data=$pdo->query($sql)->fetchAll();
print_r($data);

echo "<br><br><br>";

$cr1="13131314";
$crown="恭喜你中了二百萬";
$sql="SELECT * FROM `invtb` WHERE `number` Like('$cr1') && `term` IN('$term')  ";
$data=$pdo->query($sql)->fetchAll();
print_r($data);





?>
    
</body>
</html>