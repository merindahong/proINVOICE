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
<form action="addAPI.php" method="post">
    <table>
    <tr>
        <td>年分</td>
        <td colspan="3"> <input type="text" name="year" ></td>       
    </tr>
    <tr>
        <td>期別</td>
        <td colspan="3">
        <select name="term" id="">
                <option value="01-02">01-02期</option>
                <option value="03-04">03-04期</option>
                <option value="05-06">05-06期</option>
                <option value="07-08">07-08期</option>
                <option value="09-10">09-10期</option>
                <option value="11-12">11-12期</option>
        </select>       
    </td>        
    </tr>
    <tr>
        <td>發票號碼</td>
        <td><input type="text" name="track" ></td>
        <td colspan="2"><input type="text" name="number"></td>>    
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