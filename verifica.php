<?php

include 'includes/avalia.php'; 

require __DIR__ . '/vendor/autoload.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$token = $_REQUEST['allData'];
// teste => ak_test_Wx0bpUdLNijiW3xKxzijTb1O0o70v8
// produção => ak_live_2AqDvNA8WMS4RdI3AbbCa2NMDhBTBa
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
        'recipient_id' => $idClinica,
        'charge_processing_fee' => true,        
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