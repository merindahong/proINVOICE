
<?php
include "base.php";

$jterm=$_POST['term'];
$jspecial=$_POST['special'];
$jcrown=$_POST['crown'];
$jgrand1=$_POST['grand1'];
$jgrand2=$_POST['grand2'];
$jgrand3=$_POST['grand3'];
$jextra1=$_POST['extra1'];
$jextra2=$_POST['extra2'];


$sql2="INSERT INTO `prize` (`year`,`term`, `special`, `crown`, `grand1`, `grand2`, `grand3`, `extra1`, `extra2`)
VALUES('2019,'$jterm','$jspecial','$jcrown','$jgrand1','$jgrand2','$jgrand3','$jextra1','$jextra2')";
$data2= $pdo->exec($sql2);
print_r($data2);

if(!empty($data2)){
    echo "輸入成功";
    header("location:index.php");   
    }else{
        echo "上傳有誤"; 
        header("location:prizeNumber.php");  
}
//NG:有空格，還是去了sucess page 了!!!! MySQL留白
//NG:Number輸入PQR，還是去了sucess page 了!!!! MySQL出現0
//NG:Number輸入超過8碼，還是去了sucess page 了!!!! MySQL全接受

?>