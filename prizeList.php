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
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <h1 class="h1">輸入成功</h1>
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
   
    <table class="tb1">    <tr>
        <td colspan="2"><?=$yy;?> 年</td>
        <td colspan="2">期別： <?=$tt;?></td>
    </tr>
    <tr>
        <td>獎別</td>
        <td colspan="2">中獎號碼</td>
        <td>獎金</td>
    </tr>
    <!-- ____1___________________________________________ -->   
    <tr>
        <td rowspan="2">特別獎</td>
        <td colspan="2"><?=$ss;?></td>
        <td rowspan="2">1000萬元</td>   
    </tr>
    
    <tr>
        <td colspan="2">收執聯8位數號碼與特別獎號碼相同者</td>
    </tr>
    
    <!-- ____2___________________________________________ -->   
    <tr>
        <td rowspan="2">特獎</td>
        <td colspan="2"><?=$cc;?></td>
        <td rowspan="2">200萬元</td>   
    </tr>
    
    <tr>
        <td colspan="2">收執聯8位數號碼與特獎號碼相同者</td>
    </tr>
    <!-- ___3____________________________________________ -->   
    <tr>
        <td rowspan="4">頭獎</td>
        <td colspan="2"><?=$g1;?></td>
        <td rowspan="4">20萬元</td>   
    </tr>
    
    <tr>
        <td colspan="2"><?=$g2;?></td>
    </tr>
    
    <tr>
        <td colspan="2"><?=$g3;?></td>
    </tr>
    
    <tr>
        <td colspan="2">收執聯8位數號碼與頭獎號碼相同者</td>
    </tr>
    
    <!-- ___2-6獎____________________________________________ -->  
    <tr>
        <td>二獎</td>
        <td colspan="2">收執聯末7位數號碼與頭獎號碼相同者</td>
        <td>4萬元</td>
    </tr>
    <tr>
        <td>三獎</td>
        <td colspan="2">收執聯末6位數號碼與頭獎號碼相同者</td>
        <td>1萬元</td>
    </tr>
    <tr>
        <td>四獎</td>
        <td colspan="2">收執聯末5位數號碼與頭獎號碼相同者</td>
        <td>4千元</td>
    </tr>
    <tr>
        <td>五獎</td>
        <td colspan="2">收執聯末4位數號碼與頭獎號碼相同者</td>
        <td>1千元</td>
    </tr>
    <tr>
        <td>六獎</td>
        <td colspan="2">收執聯末3位數號碼與頭獎號碼相同者</td>
        <td>2百元</td>
    </tr>
    <!-- ___增開6獎____________________________________________ -->  
    <tr>
        <td rowspan="3">增開六獎</td>
        <td colspan="2"><?=$e1;?></td>
        <td rowspan="3">2百元</td>   
    </tr>
    
    <tr>
        <td colspan="2"><?=$e2;?></td>
    </tr>
    
    <tr>
        <td colspan="2">末3位數號碼與增開六獎號碼相同者各得獎金2百元</td>
    </tr>
    
    </table>


    <input type="submit" value="確定">  
    <input type="reset" value="重置">
     <a href="index.php">回首頁</a>
  
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
        
    </body>
    </html>