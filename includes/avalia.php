<?php
$idClinica;
$habilitar2 ="";
if (isset($_GET['idclinica'])) {
    $idClinica = $_GET['idclinica'];
    
    $jsonString = file_get_contents("https://demapi.azurewebsites.net/api/clinica/obterClinica/{$idClinica}");

    $variavelId = json_decode($jsonString, true)['clinicaAtiva'];

    //var_dump($variavel);

    if($variavelId == true){
        $idClinica = $_GET['idclinica'];        
    } else{
        $idClinica = 're_ckc6m40uu06eq7z6fhjo2lh2e'; 
        $modalClinica = "<script>alert('Código da Clínica inexistente! Peça à sua clínica o link correto!');</script>";
        echo $modalClinica;
        $habilitar2 = "disabled";
        //echo "não existe clínica";        
    }
   
} else {
    $idClinica = 're_ckc6m40uu06eq7z6fhjo2lh2e'; 
}

$habilitar;

if($idClinica == 're_ckc6m40uu06eq7z6fhjo2lh2e'){
    $habilitar = "";
} else {
    $habilitar = "disabled";
}

