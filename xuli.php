<?php
    $inputValue=$_POST['inputValue'];
    $tmp = shell_exec("python factorial.py ".$inputValue."");
    echo "Kết Quả Là:".$tmp;
?>