
<?php 
if(isset($_GET['tap_id'])){

    $tap_id =$_GET['tap_id'];
    $headers= [
        'Content-Type: application/json',
        'Authorization: Bearer sk_test_XKokBfNWv6FIYuTMg5sLPjhJ' ,
    ];
    $ch = curl_init();
    $url='https://api.tap.company/v2/charges/'.$tap_id;
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);

    $out = curl_exec($ch);
    curl_close($ch);
    var_dump(json_decode($out));die;
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    
    var_dump($_REQUEST); 
    
    ?>
    <a href="/test_tap/payment.php">pay</a>
</body>
</html>