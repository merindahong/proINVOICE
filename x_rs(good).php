

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

<h1>中獎清單</h1>
<br><br>

<!-- ______________1_______________________________________________ -->
<table>
    <tr>
        <td>年份</td>
        <td>期別</td>
        <td>字軌</td>
        <td>號碼</td>
        <td>金額</td>        
    </tr>
<?php     

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
<!-- ______________2_______________________________________________ -->
<br>

<table>
    <tr>
        <td>年份</td>
        <td>期別</td>
        <td>字軌</td>
        <td>號碼</td>
        <td>金額</td>        
    </tr>

<?php
 
    $fprize="%5678";
    $sql2="SELECT * FROM `invtb` WHERE `number` Like('$fprize') && `term` IN('03-04')  ";
    // echo $sql;
      $data2=$pdo->query($sql2)->fetchAll();
        // print_r($data); 
    foreach($data2 as $v2) {  
        // echo "<br><br>";
        // print_r($v);
    ?>          
        <tr>
                    <td><?=$v2['year'];?></td>
                    <td><?=$v2['term'];?></td>
                    <td><?=$v2['track'];?></td>
                    <td><?=$v2['number'];?></td>
                    <td><?=$v2['amount'];?></td>
       </tr>
      <?php                  
                }
    
    ?>
    </table> 


 

<a href="add.php">繼續輸入</a>
<a href="index.php">回首頁</a>
</body>
</html>