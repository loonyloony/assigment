<?php

require "./user.php";

require "./product.php";

require "./shopping.php";

/**
 * Case 1
 */
$userObj = new User(1, "John Doe", "john.doe@example.com");
$appleObj = new Product(1, "Apple", 4.95);
$orangeObj = new Product(2, "Orange", 3.99);
$shopping = new Shopping();
$shopping->addToCart($userObj, $appleObj, 2);
$shopping->addToCart($userObj, $orangeObj, 1);
$total_price = 2 * 4.95 + 1 * 3.99;
if ($shopping->getTotalPrice() == $total_price) {
    echo "Q1: Total Price is correct \n";
}

/**
 * Case 2
 */
$total_price = 3 * 4.95 - 1 * 4.95;
$userObj = new User(1, "John Doe", "john.doe@example.com");
$appleObj = new Product(1, "Apple", 4.95);
$shopping = new Shopping();
$shopping->addToCart($userObj, $appleObj, 3);
$shopping->addToCart($userObj, $appleObj, -1);
if ($total_price == $shopping->getTotalPrice()) {
    echo "Q2: Total Price is correct \n";
}