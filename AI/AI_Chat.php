
<?php
    
    $result = shell_exec("python -W ignore Chat.py ".$_POST['inp']);
    $respon = substr($result,strpos($result,"AI: "),-1);
    echo $respon;
?>
