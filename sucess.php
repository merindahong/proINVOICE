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
<table>
    <tr>
        <td>年份</td>
        <td>期別</td>
        <td>字軌</td>
        <td>號碼</td>
        <td>金額</td>        
    </tr>

<?php
  
$sql="SELECT * FROM invtb ORDER BY `id` DESC LIMIT 1";
//語法：只要一個分號，放雙引號外面。

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
//語法：$value後面沒有等於，直接加直括號[] 。 
//  
}
?>
</table> 
<h3>輸入成功</h3>

<a href="index.php">回首頁</a>
<a href="add.php">繼續輸入</a>
<a href="list.php">前往發票清單</a>
</body>
</html>