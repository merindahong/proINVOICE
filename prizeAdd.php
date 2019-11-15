
<?php
include "base.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>中獎號碼</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>



<h1>輸入中獎號碼 </h1>
<a href="index.php"> 回首頁</a>

<form action="prizeAPI.php" method="post">
<table>
<tr>

    <!-- 方法一: <td colspan="2"><input type="text" required name="year" 
    oninput = "value=value.replace(/[^\d]/g,'')" minlength="4" maxlength="4" >年</td> -->
        <!--無效：input類型要改為text， 不可為number，但若輸入 22，2碼，程式還是接受，minlength=4無效
    寫入資料庫的數字(格式設定為year)，所以輸出為 2022，怪! 若加 pattern="[0-9]{4}"可以執行正確4碼。
    保留，老外習慣西元年分只輸入兩碼-->


    <!-- 方法二： -->
    <td colspan="2"><input type="text" required name="year" 
    minlength="4" maxlength="4" pattern="[0-9]{4}">年</td>
    

<!-- required：required 屬性在表單中可能會被指定到零或多個表單元素ref: https://ksyia.pixnet.net/blog/post/347061481-html5%3A-%E8%A1%A8%E5%96%AE%E6%96%B0%E5%B1%AC%E6%80%A7 --> -->

    <td colspan="2">期別：
        <select name="term" id="">
        <option value="0102">01-02期</option>
        <option value="0304">03-04期</option>
        <option value="0506">05-06期</option>
        <option value="0708">07-08期</option>
        <option value="0910">09-10期</option>
        <option value="1112">11-12期</option>
        </select>
    </td>
</tr>
<!-- _______________________________________________ -->
<tr>

    <td>獎別</td>
    <td colspan="2">中獎號碼</td>
    <td>獎金</td>
</tr>
<!-- ____1___________________________________________ -->   
<tr>
    <td rowspan="2">特別獎</td>
    <td colspan="2"><input type="text" required name="special" 
    min="0" max="99999999" pattern="[0-9]{8}" title="請輸入8位數字"></td>
    <td rowspan="2">1000萬元</td>   
</tr>

<tr>
    <td colspan="2">收執聯8位數號碼與特別獎號碼相同者</td>
</tr>

<!-- ____2___________________________________________ -->   
<tr>
    <td rowspan="2">特獎</td>
    <td colspan="2"><input type="text" required name="crown"
    min="0" max="99999999" pattern="[0-9]{8}" title="請輸入8位數字" ></td>
    <td rowspan="2">200萬元</td>   
</tr>

<tr>
    <td colspan="2">收執聯8位數號碼與特獎號碼相同者</td>
</tr>
<!-- ___3____________________________________________ -->   
<tr>
    <td rowspan="4">頭獎</td>
    <td colspan="2"><input type="text" required name="grand1"
    min="0" max="99999999" pattern="[0-9]{8}" title="請輸入8位數字" ></td>
    <td rowspan="4">20萬元</td>   
</tr>

<tr>
    <td colspan="2"><input type="text" required name="grand2"
    min="0" max="99999999" pattern="[0-9]{8}" title="請輸入8位數字" ></td>
</tr>

<tr>
    <td colspan="2"><input type="text" required name="grand3"
    min="0" max="99999999" pattern="[0-9]{8}" title="請輸入8位數字" ></td>
</tr>

<tr>
    <td colspan="2">收執聯8位數號碼與頭獎號碼相同者</td>
</tr>

<!-- ___2-6獎____________________________________________ -->  
<tr>
    <td>二獎</td>
    <td colspan="2">收執聯末7位數號碼與頭獎號碼相同者</td>
    <td>4萬元</td>
</tr>
<tr>
    <td>三獎</td>
    <td colspan="2">收執聯末6位數號碼與頭獎號碼相同者</td>
    <td>1萬元</td>
</tr>
<tr>
    <td>四獎</td>
    <td colspan="2">收執聯末5位數號碼與頭獎號碼相同者</td>
    <td>4千元</td>
</tr>
<tr>
    <td>五獎</td>
    <td colspan="2">收執聯末4位數號碼與頭獎號碼相同者</td>
    <td>1千元</td>
</tr>
<tr>
    <td>六獎</td>
    <td colspan="2">收執聯末3位數號碼與頭獎號碼相同者</td>
    <td>2百元</td>
</tr>
<!-- ___增開6獎____________________________________________ -->  
<tr>
    <td rowspan="3">增開六獎</td>
    <td colspan="2"><input type="text" required name="extra1" 
    min="0" max="99999999" pattern="[0-9]{8}" title="請輸入3位數字"></td>
    <td rowspan="3">2百元</td>   
</tr>

<tr>
    <td colspan="2"><input type="text" required name="extra2"
    min="0" max="99999999" pattern="[0-9]{8}" title="請輸入3位數字" ></td>
</tr>

<tr>
    <td colspan="2">末3位數號碼與增開六獎號碼相同者各得獎金2百元</td>
</tr>

</table>
<input type="submit" value="確定">  
<input type="reset" value="重置">
 <a href="index.php">回首頁</a>
</form>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
    
</body>
</html>