<!DOCTYPE html>
<html>
<body>
<?php
session_start();
$products = array (
    );
$dbp = mysqli_connect('studmysql01.fhict.local','dbi388789','1234','dbi388789');
$product_query="SELECT * FROM `Best Sellers`";
$result = mysqli_query($dbp,$product_query);
$product = mysqli_fetch_assoc($result);
while($product = mysqli_fetch_assoc($result)) {
    array_push($products,$product);
}
    
    $err = array();
    if(isset($_POST['newsletter'])){
        $emailnews = mysqli_real_escape_string($dbp, $_POST['emailnews']);
        $x = 1;
        
        if (empty($emailnews)) {
            array_push($err,"Email is required!");
        }
        
        if (!filter_var($emailnews, FILTER_VALIDATE_EMAIL)) {
  array_push($err,"Invalid email format"); 
}
        
        $news_email_check ="SELECT * FROM newsletter WHERE email='$emailnews'";
        $res = mysqli_query($dbp,$news_email_check);
        $existed = mysqli_fetch_assoc($res);
        if($existed){
            if($existed['email']===$emailnews){
                array_push($err,"Already registered");
            }
        }
        
        if(count($err)==0){
        $query ="INSERT INTO newsletter (email) 
  			  VALUES('$emailnews')";
        mysqli_query($dbp,$query);
    }
        
}
else{$x=0;}
    
    
    
    
    
?>
</body>
</html>