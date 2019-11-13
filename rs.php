

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
  // $sql2="SELECT `number` FROM `invtb` WHERE `number` Like('%5678')";
    // $data2= $pdo->exec($sql2);
    // print_r($data1);
 
//   $sql="SELECT * F;OM invtb WHERE 'number' IN('12345678')";
$fprize="%5678";
$sql="SELECT * FROM `invtb` WHERE `number` Like('$fprize')";
  $data=$pdo->query($sql)->fetchAll();
    // print_r($data); 

  foreach($data as $v) {  
    // echo "<br><br>";
    // print_r($v);
?>          
    <tr>
                <td><?=$v['year'];?></td>
                <td><?=$v['term'];?></td>
                <td><?=$v['track'];?></td>
                <td><?=$v['number'];?></td>
                <td><?=$v['amount'];?></td>
   </tr>
  <?php                  
            }
?>
</table>  

<a href="add.php">繼續輸入</a>
<a href="index.php">回首頁</a>
</body>
</html>