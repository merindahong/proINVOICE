

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


 
<?php
// _________Special_______________________________________________________________________________



    $term="01-02";
    $sp1="12121212";
    $sp1=$_POST['special'];
    $cr1="13131313";

    $ga1="14141414";
    $ga2=substr($ga1,1,7);
    $ga3=substr($ga1,1,6);
    $ga4=substr($ga1,1,5);
    $ga5=substr($ga1,1,4);
    $ga6=substr($ga1,1,3);

    $gb1="15151515";
    $gb2=substr($gb1,1,7);
    $gb3=substr($gb1,1,6);
    $gb4=substr($gb1,1,5);
    $gb5=substr($gb1,1,4);
    $gb6=substr($gb1,1,3);

    $gc1="16161616";
    $gc2=substr($gc1,1,7);
    $gc3=substr($gc1,1,6);
    $gc4=substr($gc1,1,5);
    $gc5=substr($gc1,1,4);
    $gc6=substr($gc1,1,3);


    $e13="%110";
    $e23="%543";



   $special="恭喜你中了一千萬";
   $crown="恭喜你中了二百萬";
   $grand1="恭喜你中了二十萬";
   $grand2="恭喜你中了四萬";
   $grand3="恭喜你中了一萬";
   $grand4="恭喜你中了四千";
   $grand5="恭喜你中了一千";
   $grand6="恭喜你中了二百";
   $extra1="恭喜你中了二百";
   $extra2="恭喜你中了二百";
   
  
    
 //_________Special_______________________________________________________________________________ -->
 ?>

<table>
    <tr>
        <td>年份</td>
        <td>期別</td>
        <td>字軌</td>
        <td>號碼</td>
        <td>發票金額</td>        
 
<?php    
 $sql="SELECT * FROM `invtb` WHERE `number` Like('$sp1') && `term` IN('$term')";
 $data=$pdo->query($sql->fetchAll();

      foreach($data as $v) {  
        // print_r($v);
        echo $special;
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

//_________crown_______________________________________________________________________________ -->    
?>
    </table>  




<table>
    <tr>
        <td>年份</td>
        <td>期別</td>
        <td>字軌</td>
        <td>號碼</td>
        <td>發票金額</td>        
 
<?php    
 $sql1="SELECT * FROM `invtb` WHERE `number` Like('$cr1') && `term` IN('$term')  ";
 $data1=$pdo->query($sql->fetchAll();
      foreach($data as $v) {  
          echo "$crown";
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

//_________Special_______________________________________________________________________________ -->    
?>
    </table>  






<a href="index.php">回首頁</a>
<br>
<br>
<br>
<br>
<br>
</body>
</html>