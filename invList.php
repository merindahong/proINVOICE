<?php
include "base.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body> 
    <h1>發票清單</h1>
    <a href="invAdd.php">繼續輸入</a>
    <a href="index.php">回首頁</a>
<table>
    <tr>
        <td>年份</td>
        <td>期別</td>
        <td>字軌</td>
        <td>號碼</td>
        <td>金額</td>        
    </tr>

<?php
  
$sql="SELECT * FROM invtb ORDER BY `id` DESC";
//新增資料放上方
$rs= $pdo->query($sql)->fetchAll();

foreach ($rs as $value) {
 ?>
<tr>
    <td><?=$value['year'];?></td>
    <td><?=$value['term'];?></td>
    <td><?=$value['track'];?></td>
    <td><?=$value['number'];?></td>
    <td><?=$value['amount'];?></td>
</tr>
<?php
//語法：$value後面沒有等於，直接加直括[]    
}
?>
</table> 

<a href="invAdd.php">繼續輸入</a>
<a href="index.php">回首頁</a>
</body>
</html>