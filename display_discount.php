<?php
if ($_SERVER['REQUEST_METHOD']=='POST'){
    $product = $_POST['product'];
    $price = $_POST['price'];
    $discount = $_POST['discount'];

    $discountAmount = $price * $discount * 0.01;

    $discountPrice = $price - $discountAmount;

    echo $product.' co gia niem yet la :'.$price.'<br/>';
    echo 'gia sau khi chiet khau '.$discount. ' % la : '.$discountPrice;
}


