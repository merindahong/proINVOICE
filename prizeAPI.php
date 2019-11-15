
<?php
include "base.php";

$jyear=$_POST['year'];
$jterm=$_POST['term'];
$jspecial=$_POST['special'];
$jcrown=$_POST['crown'];
$jgrand1=$_POST['grand1'];
$jgrand2=$_POST['grand2'];
$jgrand3=$_POST['grand3'];
$jextra1=$_POST['extra1'];
$jextra2=$_POST['extra2'];


$sql="INSERT INTO prize (`year`,`term`, `special`, `crown`, `grand1`, `grand2`, `grand3`, `extra1`, `extra2`) 
VALUES('$jyear','$jterm','$jspecial','$jcrown','$jgrand1','$jgrand2','$jgrand3','$jextra1','$jextra2')";
$data= $pdo->exec($sql);
print_r($data);

if(!empty($data)){
    echo "輸入成功";
    header("location:prizeList.php");   
    }else{
        echo "上傳有誤"; 
        header("location:prizeAdd.php");  
}

// ___________________________________________


?>