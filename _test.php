<?php
include "base.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>中獎號碼表</title>
</head>
<body>
    <h1>輸入成功</h1>
    <a href="index.php">回首頁</a>

<?php
  
$sql="SELECT * FROM prize WHERE term='0102'";
$prize= $pdo->query($sql)->fetchAll();

foreach ($prize as $value) {
 
    $yy=$value['year'];
    $tt=$value['term'];
    $ss=$value['special'];
    $cc=$value['crown'];
    $g1=$value['grand1'];
    $g2=$value['grand2'];
    $g3=$value['grand3'];
    $e1=$value['extra1'];
    $e2=$value['extra2']; 
}
    

    ?>


    <h2>中獎號碼 </h2>
   


    <table>
    <tr>
        <td colspan="2"><?=$yy;?></td>
        <td colspan="2">期別： <?=$tt;?></td>
    </tr>
    <!-- _______________________________________________ -->

        
    </body>
    </html>