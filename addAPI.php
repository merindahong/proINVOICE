<?php
include "base.php";

$iyear=$_POST['year'];
$iterm=$_POST['term'];
$itrack=$_POST['track'];
$inumber=$_POST['number'];
$iamount=$_POST['amount'];

$sql="INSERT INTO invtb (`year`, `term`, `track`, `number`, `amount`)
VALUES('$iyear', '$iterm', '$itrack', '$inumber', '$iamount')";
$data= $pdo->exec($sql);
print_r($data);

if(!empty($data)){
    header("location:sucess.php");   
    }else{
        echo "上傳有誤"; 
        header("location:add.php");  
}

