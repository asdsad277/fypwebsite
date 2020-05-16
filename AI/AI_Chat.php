
<?php
    $result =shell_exec("python Chat.py hi");
    $respon = substr($result,strpos($result,"AI: "),-1);
    echo $result;

?>
