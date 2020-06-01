<?php
        
if(!empty($_SESSION["username"])){
return false;
}
else{
    header("location:login.php");
}
?>
