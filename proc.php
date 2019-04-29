<?php 

if($_GET['art'] == 1)
{
   return header("Location:"."sms:99494?body=REG%20HIJAB");exit();

}elseif ($_GET['art'] == 2){
    return header("Location:"."sms:99494?body=REG%20AAGYM");exit();

}

?>