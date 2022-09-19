<?php
require_once 'vendor/autoload.php';

$stripe = array(
    "secret_key" => "sk_test_51LUQxsKTB4cfnGsJxhSoVkTyWFiPR2SfFCUcE9A1eoVhEGHc8Bzgxt9Iz84SYEnNfaA4WBPLmdK9mw4NNIgmV6gT008Hf5y8R7",
    "publishable_key" => "pk_test_51LUQxsKTB4cfnGsJ3tkmq25GOXLFjAsDm0n4YbYCfjBjOV41HsvF11bghlJ3mfM5NPNGhLamH2cPe2Tm4V7Oou0r00IzaZPpDl",
);

// $stripe2 = array(
//     "secret_key" => "sk_test_51KtEVISDZAYjmhsLZMcLRSGTulsqVHwwuFEXE17e0CXFExw6TIHO6vhd9kSA157plWbtOBtI71h1NDIDXj30r2Yb004GrMFnUM",
//     "publishable_key" => "pk_test_51KtEVISDZAYjmhsLDHNHlxPoWge050gVaV35rOrOzvL73dTGEjG8wA5i2k2lRDWdrOs79WwIH7v5aLRmC0391Ntz001obd27N5",
// );

\Stripe\Stripe::setApiKey($stripe['secret_key']);

//\Stripe\Stripe::setApiKey($stripe2['secret_key']);