<?php
include "base.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>中獎號碼表</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <h1 class="h1">每期中獎號碼查詢</h1>


<br><br>
<?php
(isset($_POST["term"])) ? $theTerm = $_POST["term"] : $theTerm=0;
?>


<form action="prizeListQueryAPI.php" method="post">
    <table>
        <tr>
            <td>期別：</td>
            <td>
                <select name="month" id="term">               
                <option <?php if ($theTerm == 1 ) echo 'selected' ; ?> value="0102"> 01-02月 </option>
                <option <?php if ($theTerm == 2 ) echo 'selected' ; ?> value="0304"> 03-04月 </option>
                <option <?php if ($theTerm == 3 ) echo 'selected' ; ?> value="0506"> 05-06月 </option>
                </select>
            </td>
            <td><input type="submit" name="confirm" value="確定"></td> 
          
        </tr>
    </table>
    
    </form>
    <br>


     <a href="index.php">回首頁</a>
  
    <br>
    <br>
    <br>
    <br>
    
        
    </body>
    </html>