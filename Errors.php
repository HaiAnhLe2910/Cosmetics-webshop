<?php


if(count($errors)>0){foreach ($errors as $error){
    newsStat($error);
}
    }
function newsStat($msg) {
    echo "<script type='text/javascript'>
    alert('$msg');
    </script>";
}
?>