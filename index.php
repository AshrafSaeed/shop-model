<?php

require_once "Product.php";
require_once "Cart.php";
require_once "CartItem.php";


// Create new products
$product1 = new Product(1, "digital", "product 1", "artical_number_1", 150.00, 100, "{image_1_path, image_2_path}");
$product2 = new Product(2, "normal", "product 2", "artical_number_2", 154.00, 100, "{image_1_path}");
$product3 = new Product(3, "normal", "product 3", "artical_number_3", 124.00, 100, "{image_1_path, image_2_path}");
$product4 = new Product(4, "digital", "product 4", "artical_number_4", 152.00, 100, "{image_1_path}");


// Add Item into Cart 
$cart = new Cart();
$cartItem1 = $cart->addProduct($product1, 3);
$cartItem2 = $cart->addProduct($product2, 1);

echo "Number of items in cart: ".$cart->getTotalQuantity();
echo '<br>';

// Decrees 
$cartItem1->decreaseQuantity(2);

echo "Number of items in cart: ".$cart->getTotalQuantity(); 
echo '<br>';
echo '<br>';

echo "Total price of items in cart: ".$cart->getTotalSum();
echo '<br>';

$cart->removeProduct($product2);

echo "Number of items in cart: ".$cart->getTotalQuantity();
echo '<br>';
echo "Total price of items in cart: ".$cart->getTotalSum();
echo '<br>';

