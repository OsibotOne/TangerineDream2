<?php
require_once './config.php';

$token = $_POST['stripeToken'];
$email = $_POST['stripeEmail'];

/* $customer = \Stripe\Customer::create(array(
'email' => $email,
'source' => $token,
)); */

$charge = \Stripe\PaymentIntent::create(array(
    /* 'customer' => $customer->id, */
    'amount' => 50 * 100,
    'currency' => 'usd',
    'payment_method_types' => ['card'],

));

$transfer = \Stripe\Transfer::create(array(
    'amount' => 1 * 100,
    'currency' => 'usd',
    'destination' => 'acct_1LUWpg4EsCdT4Z3U',
));
print_r($transfer);
echo '<h1>Successfully charged $50.00!</h1>';