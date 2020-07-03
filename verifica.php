<?php
require __DIR__ . '/vendor/autoload.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$token = $_REQUEST(['allData']);

$pagarme = new PagarMe\Client('ak_test_Wx0bpUdLNijiW3xKxzijTb1O0o70v8');

$capturedTransaction = $pagarme->transactions()->capture([
    'id' => $token,
    'amount' => 5000,
    'split_rules' => [
      [
        'percentage' => '50',
        'recipient_id' => 're_ckb9cqmup0b20en6ehro4323b',
        'charge_processing_fee' => true,
        'liable' => true
      ],
      [
        'percentage' => '50',
        'recipient_id' => 're_ckb9d38js0bglb76dsz6227xk',
        'charge_processing_fee' => 'true',        
        'liable' => true
      ]
    ]
]);

//echo $capturedTransaction;

if (is_object($capturedTransaction)) {
   echo('Transação finalizada com sucesso');
}else{
   echo('Transação não finalizada');
}