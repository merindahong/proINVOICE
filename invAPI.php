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
//NG:有空格，還是去了sucess page 了!!!! MySQL留白
//NG:Number輸入PQR，還是去了sucess page 了!!!! MySQL出現0
//NG:Number輸入超過8碼，還是去了sucess page 了!!!! MySQL全接受

?>
