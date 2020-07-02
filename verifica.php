<?php
require __DIR__ . '/vendor/autoload.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$token = $_REQUEST['allData']);

$pagarme = new PagarMe\Client('SUA_CHAVE_API');

$capturedTransaction = $pagarme->transactions()->capture([
    'id' => $token,
    'amount' => 5000
]);

//echo $capturedTransaction;

if (is_object($capturedTransaction)) {
   echo('Transação finalizada com sucesso');
}else{
   echo('Transação não finalizada');
}