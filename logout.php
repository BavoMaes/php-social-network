<?php
//If the cookie exist, delete it.
if(isset($_COOKIE['GebruikersId'])){
   setcookie('GebruikersId','');
   header("Location:login.php");
}else{
    header("Location:login.php");
}
?>