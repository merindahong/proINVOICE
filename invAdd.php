<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>統一發票對獎系統</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>   

<h1>新增統一發票</h1>
<form action="invAPI.php" method="post">
    <table class="table">
    <tr>
        <td>年分</td>
        <td colspan="3"> <input type="text" name="year" 
        min="0" max="9999" pattern="[0-9]{4}" title="請輸入4位數字" ></td>  
        <!-- input類型要改為text，則 minlength="4" maxlength="4" 或min="0" max="9999"皆可
         pattern="[0-9]{4}" -->

    </tr>
    <tr>
        <td>期別</td>
        <td colspan="3">
        <select name="term" id="">
                <option value="01-02" required;>01-02期</option>
                <option value="03-04" required;>03-04期</option>
                <option value="05-06" required;>05-06期</option>
                <option value="07-08" required;>07-08期</option>
                <option value="09-10" required;>09-10期</option>
                <option value="11-12" required;>11-12期</option>
        </select>       
    </td>        
    </tr>
    <tr>
        <td>發票號碼</td>
        <td><input type="text" name="track" 
        min="A" max="Z" pattern="[A-Z]{2}" title="請輸入2位字母" ></td>
        <!-- min="A" max="Z"可以不用寫，效果一樣 -->
        <td colspan="2"><input type="number" name="number"></td>>    
    </tr>
    <tr>
        <td>發票金額</td>
        <td colspan="3"><input type="number" name="amount"></td>   
    </tr>
    <tr>
        <td colspan="4">
            <input type="submit" value="確定">  
            <input type="reset" value="重置">
            <a href="index.php">回首頁</a>
        </td>
        </tr>
</table>
</form>    
</body>
</html>