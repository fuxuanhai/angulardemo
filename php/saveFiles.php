<?php
    
    
    move_uploaded_file($_FILES['file']['tmp_name'],'./files/'.$_FILES['file']['name']);
    echo("用户昵称：".$_POST["nickName"]);
?>