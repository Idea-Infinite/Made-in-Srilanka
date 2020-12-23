<?php
session_start();
require_once('../stripe-php/init.php');

use Stripe\Checkout\Session;
use Stripe\Stripe;

header('Content-Type: application/json');
$DOMAIN = 'http://localhost/mobile';

Stripe::setApiKey('sk_test_51Hs4vICZjSyoKagrFIBYkgON3TKZ9TST4xp8sJ5t99IQpr0EyUOYVFj1u8hIxx9GVr8BlhYKsrq20UfWWjVtMs4900xuY2ithd');

// post data
$data = json_decode(file_get_contents('php://input'), true);

// get data from db
// read file
$json = file_get_contents('../db.json');
$orders = json_decode(file_get_contents("../orders.json"), true);

// Converts it into a PHP object
$products = json_decode($json);
$line_items = array();

foreach ($data as $product_id) {
    $product = $products[$product_id['id']];
    $price_data = [
        'price_data' => [
            'currency' => 'lkr',
            'unit_amount' => floatval($product->price) * 100,
            'product_data' => [
                'name' => $product->name,
                'images' => [$product->image],
            ],
        ],
        'quantity' => $product_id['qty'],
    ];
    array_push($line_items, $price_data);
}

$checkout_session = Session::create(
    [
//        'customer_email' => 'customer@example.com',
        'payment_method_types' => ['card'],
        'line_items' => $line_items,
        'mode' => 'payment',
        'success_url' => $DOMAIN . '/iphone/pages/orderHistory.php?status=success',
        'cancel_url' => $DOMAIN . '/iphone/pages/orderHistory.php?status=failed',
    ]);
$session_id = $checkout_session->id;
$orders[$session_id] = $data;
file_put_contents("../orders.json", json_encode($orders));
echo json_encode(['id' => $session_id]);
