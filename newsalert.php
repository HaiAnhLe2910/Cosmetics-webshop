<?php

if(count($err)==0&&$x==1){newsStat("Thank you for subscribing!");}
else if(count($err)>0){foreach ($err as $er){
    newsStat($er);
}
    }
if(count($errors)>0){foreach ($errors as $error){
    newsStat($error);
}}
function newsStat($msg) {
    echo "<script type='text/javascript'>
    alert('$msg');
    </script>";
}
?>