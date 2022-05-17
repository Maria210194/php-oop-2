<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animal Care</title>
</head>
<body>

<?php

include_once __DIR__ .  '/entities/user.php';
include_once __DIR__ .  '/entities/food_product.php';
include_once __DIR__ .  '/entities/registered_user.php';
include_once __DIR__ .  '/entities/cart.php';

$cart= new Cart();
$crocchette= new FoodProduct('Ns', 'croccgetta-mix', 45, 'dry', '22-09-2022');

$email = 'm.s@gmail.com';
$password= '323223';
$user = new RegisteredUser ($email, $password);

if ($user->isValidUser()){
    $cart->setRegisteredUser($user);
}


$cart->addProduct($crocchette);
echo('<br> prezzo: ' . $cart->checkOut());


?>


</body>
</html>