
<?php
include "base.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>中獎號碼</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php

// 7-8月份中獎號碼
$theYear="2019年";
$theTerm="1-2月";
$special="12121212";
$crown="13131313";
$grand1="14141414";
$grand2="15151515";
$grand3="16161616";
$extra1="110";
$extra2="543";


?>

<h2>中獎號碼 </h2>

<form action="rsAPI.php">


<table>

<tr>
    <td colspan="2"><?=$theYear;?></td>
    <td colspan="2">期別：<?=$theTerm;?></td>
</tr>
<!-- _______________________________________________ -->
<tr>
    <td>獎別</td>
    <td colspan="2">中獎號碼</td>
    <td>獎金</td>
</tr>
<!-- ____1___________________________________________ -->   
<tr>
    <td rowspan="2">特別獎</td>
    <td colspan="2"><?=$special;?></td>
    <td rowspan="2">1000萬元</td>   
</tr>

<tr>
    <td colspan="2">收執聯8位數號碼與特別獎號碼相同者</td>
</tr>

<!-- ____2___________________________________________ -->   
<tr>
    <td rowspan="2">特獎</td>
    <td colspan="2"><?=$crown;?></td>
    <td rowspan="2">200萬元</td>   
</tr>

<tr>
    <td colspan="2">收執聯8位數號碼與特獎號碼相同者</td>
</tr>
<!-- ___3____________________________________________ -->   
<tr>
    <td rowspan="4">頭獎</td>
    <td colspan="2"><?=$grand1;?>0</td>
    <td rowspan="4">20萬元</td>   
</tr>

<tr>
    <td colspan="2"><?=$grand2;?></td>
</tr>

<tr>
    <td colspan="2"><?=$grand3;?></td>
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
    <td colspan="2"><?=$extra1;?></td>
    <td rowspan="3">2百元</td>   
</tr>

<tr>
    <td colspan="2"><?=$extra2;?></td>
</tr>

<tr>
    <td colspan="2">末3位數號碼與增開六獎號碼相同者各得獎金2百元</td>
</tr>

</table>
</form>
<br>
<a href="index.php">回首頁</a>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
    
</body>
</html>