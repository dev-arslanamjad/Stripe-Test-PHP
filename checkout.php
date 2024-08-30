<?php
$name = $_POST['product'];
$model = $_POST['model'];
$quantity = $_POST['quantity'];
$price = $_POST['price']*100;
require __DIR__ . "/vendor/autoload.php";
$stripe_secret_key = "sk_test_51PqYzsP2GGN4ZzRm2Ab2MEvF8UzZhwK2HYnsBbUSWBpL97RnUbCkz5TYeAQEd3jpVYvWcoA2mOWiZFRyrzpLGulJ00vjhxK09f";

\Stripe\Stripe::setApiKey($stripe_secret_key);

$checkout_session = \Stripe\Checkout\Session::create([
    "mode" => "payment",
    "success_url" => "http://localhost/stripe_api_test/success.php",
    "cancel_url" => "http://localhost/stripe_api_test/index.php",
    "locale" => "auto",
    "line_items" => [
        [
            "quantity" => $quantity,
            "price_data" => [
                "currency" => "usd",
                "unit_amount" => $price, 
                "product_data" => [
                    "name" => $name,
                    "description" => "Model: " . $model,
                ]
            ]
        ]
    ]
]);

http_response_code(303);
header("Location: " . $checkout_session->url);
