<?php 
    if (($_GET[id] == "john") && ($_GET[pwd]=="john1234"))
        echo "Welcome";                         #登入成功，顯示Welcome
    else
        echo "fail login";                     #登入失敗
?>
