<?php
 
    if(isset($_POST['btn-send']))
    {
       $UserName = $_POST['UName'];
       $Email_C = $_POST['Email-Contactno'];
       $Msg = $_POST['msg'];
 
       if(empty($UserName) && empty($Email_C) && empty($Msg))
       {
           header('location:index.php?error');
       }
       else
       {
           $to = "himanshugulati138@gmail.com";
 
           if(mail($to,$Email_C,$Msg,$UserName))
           {
               header("location:index.php?success");
           }
       }
    }
    else
    {
        header("location:index.php");
    }
?>