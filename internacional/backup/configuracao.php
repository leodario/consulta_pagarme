<?php

//Necessário testar em dominio com SSL
define("URL", "https://online.decidiemagreceroficial.com.br/consulta/internacional");

$sandbox = false;
if ($sandbox) {
    //Credenciais do SandBox
    define("EMAIL_PAGSEGURO", "paulo@empresabrands.com.br");
    define("TOKEN_PAGSEGURO", "70350A8ECD1448BC8DCFF3E9D94B6A5A"); 
    define("URL_PAGSEGURO", "https://ws.sandbox.pagseguro.uol.com.br/v2/");
    define("SCRIPT_PAGSEGURO", "https://stc.sandbox.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.directpayment.js");
    define("EMAIL_LOJA", "paulo@empresabrands.com.br");
    define("MOEDA_PAGAMENTO", "BRL");
    define("URL_NOTIFICACAO", "https://online.decidiemagreceroficial.com.br/consulta/notifica.html");
} else {
    //Credenciais do PagSeguro
    define("EMAIL_PAGSEGURO", "paulo@empresabrands.com.br");
    define("TOKEN_PAGSEGURO", "6d6ac5e7-cff4-4b9e-9fc0-8bbc63b69257d4a411c34d7e9dfb9c9249ab720bc3c49ec2-fc25-411e-8f29-dcd3ce7039c3"); 
    define("URL_PAGSEGURO", "https://ws.pagseguro.uol.com.br/v2/");
    define("SCRIPT_PAGSEGURO", "https://stc.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.directpayment.js");
    define("EMAIL_LOJA", "paulo@empresabrands.com.br");
    define("MOEDA_PAGAMENTO", "BRL");
    define("URL_NOTIFICACAO", "https://online.decidiemagreceroficial.com.br/consulta/notifica.html");
}