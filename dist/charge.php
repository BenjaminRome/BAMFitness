<?php

echo "hello";
// require_once('../vendor/autoload.php');

// \Stripe\Stripe::setApiKey('sk_test_H5VECILk2Ckm0SERjl4f6wxW00ZcQtpBhg');


// // Sanitize First!!
// $POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);


// // Collect the data from the sanitized form
// $first_name = $POST['first_name'];
// $last_name = $POST['last_name'];
// $email = $POST['email'];
// $token = $POST['stripeToken'];

// echo $token;

// // Create a customer
// $customer = \Stripe\Customer::create(array(
//     "email" => $email,
//     "source" => $token
// ));

// $charge = \Stripe\Charge::create(array(
//     "amount" => 2000,
//     "currency" => "usd",
//     "description" => "Strength Builder",
//     "customer" => $customer->id
// ));

// print_r($charge);
// ?>