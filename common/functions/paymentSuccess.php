<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $data = json_decode(file_get_contents('php://input'), true);
    $order_id = $data['data']['object']['id'];
    foreach ($_SESSION['orders'] as $key => $order) {
        if ($key == $order_id) {
            setcookie('cart', null, time() - 3600, '/');
            setcookie('orderHistory', json_encode($order), time() + 100000, '/');
            break;
        }
    }
}
