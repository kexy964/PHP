<?php 
    echo $_POST["id"];
    echo "<br>";
    echo $_POST["pwd"];
?>

action：呼叫的php程式
method:參數傳遞方式
POST：使用環境變數傳遞，不會顯示在呼叫URL中，適合密碼類的參數傳遞
GET：使用URL傳遞參數
name：傳遞參數的變數名稱
