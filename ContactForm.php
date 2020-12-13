<?php
   $errorContact="";
   if(empty($_POST["name"])||!preg_match("/^[a-zA-Z a-zA-Z]*$/",$_POST["name"]))
   {
      $errorRegister.="Please input your full name again.<br>";  
   }
   if(empty($_POST["emailCT"])||($_POST["emailCT"]&&filter_var($_POST["emailCT"], FILTER_VALIDATE_EMAIL)===false))
   {
      $errorContact.="Please input the email address again.<br>";
   }
   if(empty($_POST["subject"]))
   {
      $errorRegister.="Please input the subject.<br>";  
   } 
   if(empty($_POST["content"]))
   {
      $errorContact.="Please input the content.<br>";
   }
   if($_POST["name"]&&$_POST["emailCT"]&&$_POST["subject"]&&$_POST["content"])
   {
      $emailCT=$_POST["emailCT"];
      $emailto="ha.le@student.fontys.nl";
      $subject=$_POST["subject"];
      $formcontent=$_POST["content"];
      $mailheader="From: $emailCT";
      mail($emailto,$subject,$formcontent,$mailheader);
      echo "Your message was submitted !Thank you.";
   }
   else
   {
       echo "Your message could not be submitted. Please try again!"
   }
?>