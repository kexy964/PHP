<?php
    session_start();
    unset($_SESSION["counter"]);
    echo "counter重置成功....";
    echo "<meta http-equiv=REFRESH content='2; url=8.counter.php'>";

?>

unset($_SESSION['變數'])
session_unset() 或者session_destroy()也可以達成同樣功能
