

<div class="container-fluid">  

<form name="formsPagamentos" action="post" id="formsPagamentos" style="width:100%">    

<div class="row"> 
    <div class="col-md-12 col-sm-12 col-12">
        <h3 style="text-align:center">Preencha os seus dados e efetue o pagamento da consulta, e aguarde o agendamento.</h3>
    </div>
</div>

<div class="separador col-md-12 col-sm-12 col-12"></div>

<div class="row">
    <div class="col-md-12 col-sm-12 col-12">
        <div class="compra_segura"><img src="https://online.decidiemagreceroficial.com.br/consulta/img/compra_segura.png"/></div>
    </div>                    
</div>

<div class="separador col-md-12"></div>

<div class="row"> 
    <div class="col-md-12 col-sm-12 col-12">
     <!--   <a href="https://online.decidiemagreceroficial.com.br/consulta/?idclinica=<?php echo $idClinica?>">Quero usar dados nacionais</a> -->
    </div>
</div>         
        
<div class="separador col-md-12"></div>

<div class="row"> 

    <div class="col-md-2 col-12 col-sm-12 col-12 separador">
        <label>Código da Clínica</label>                        
        <input type="text" name="idClinica" id="idClinica" <?php echo $habilitar; echo $habilitar2; ?>  value="<?php echo $idClinica; ?>" class="form-control" required>                        
    </div>  

    <div class="col-md-3 col-12 col-sm-12 separador">
        <label>País</label>        
            
        <?php include 'includes/paises.php'; ?>
        
    </div>  

    <div class="col-md-7 col-12 col-sm-12 separador">
        <label>Nome Completo</label>                            
        <input type="text" name="senderName" id="senderName" minlength="4" class="form-control" required>                       
    </div>    
</div>

<div class="separador col-md-12 col-sm-12 col-12"></div>                       

<div class="row">                     

    <div class="col-md-5 col-12 col-sm-12 separador">
        <label>Documento</label>                            
        <input type="text" name="senderCPF" id="cpf" class="form-control" required>                       
    </div>
    <div class="col-md-4 col-12 col-sm-12 separador">
        <label>E-mail do(a) paciente</label>  
        <input type="email" name="senderEmail" id="senderEmail" value="c98360604397189223761@sandbox.pagseguro.com.br"   class="form-control" required>                                                
    </div>
    <div class="col-md-3 col-12 col-sm-12 separador">
        <label>Estado</label>  
        <input type="text" name="senderEstado" id="senderEstadp"   class="form-control" required>                                                
    </div>
</div>

<div class="separador col-md-12 col-12 col-sm-12"></div> 

<div class="row">
    <div class="col-md-3 col-12 col-sm-12 separador">
        <label>DDI: </label>                                    
        <?php include 'includes/ddi.php' ?>
    </div>
    <div class="col-md-3 col-12 col-sm-12 separador">
        <label>DDD:</label>
        <input type="text" name="senderAreaCode" id="senderAreaCode"  minlength="2"  class="form-control" required>
    </div>

    <div class="col-md-6 col-12 col-sm-12 separador">
        <label>Celular: Somente número</label>
        <input type="text" name="senderPhone" id="senderPhone"  class="form-control" required>
    </div>

</div>  

<div class="separador col-md-12"></div>
        
<div class="row">               

    <div class="col-md-3  col-12 col-sm-12 separador">
        <label>Sexo</label>
        <select name="Sexo" class="custom-select d-block w-100" id="sexo" required>
            <option value="Masculino">Masculino</option>
            <option value="Feminino">Feminino</option>                                        
        </select>
    </div>
            
    <div class="col-md-3 col-12 col-sm-12 separador">
        <label>Altura (Metros) Ex: 1,70</label>
        <input type="text" name="altura" id="altura"  minlength="4"  class="form-control" required>
    </div>

    <div class="col-md-3 col-12 col-sm-12 separador">
        <label>Peso (Kg) Ex: 70,00</label>
        <input type="text" name="peso" id="peso"  minlength="2"  class="form-control" required>
    </div>

    <div class="col-md-3 col-12 col-sm-12 separador">
        <label>Data Nasc: 12/07/1987</label>
        <input type="text" name="dataNascimento" id="dataNascimento" minlength="10"  class="form-control" required>
    </div>  


</div>   

<br><br>

<div class="row"> 
    <div class="col-md-12 col-12 col-sm-12"> 
        <h3 class="mb-3">Endereço do(a) paciente</h3>
    </div>    
</div> 
        
<div class="separador col-md-12 col-sm-12"></div>  
            
<div class="row">
    <div class="col-md-12 col-12 col-sm-12 ">
        <input type="hidden" name="shippingAddressRequired" id="shippingAddressRequired" value="true">
    </div>    
</div>    

            
<div class="row"> 
    <div class="col-md-3 col-12 col-sm-12 separador">
        <label>Caixa Postal</label>
        <input type="text" name="shippingAddressPostalCode" minlength="3" class="form-control" id="shippingAddressPostalCode"  required>
    </div>                          
    <div class="col-md-9  col-12 col-sm-12 separador">
        <label>Endereço. Ex: Rua ou Avenida</label>
        <input type="text" name="shippingAddressStreet" minlength="4" class="form-control" id="shippingAddressStreet" required>
    </div>                        
</div>                  
                    
<div class="separador col-md-12"></div>
            
<div class="row"> 
    <div class="col-md-3 col-12 col-sm-12 separador">
        <label>Número</label>
        <input type="text" name="shippingAddressNumber" minlength="1" class="form-control" id="shippingAddressNumber" required>
    </div>  
    <div class="col-md-9 col-12 col-sm-12 separador">
        <label>Complemento. Ex: Apartamento, andar, casa</label>
        <input type="text" name="shippingAddressComplement" class="form-control" id="shippingAddressComplement" >
    </div>                       
</div>      

<div class="separador col-md-12"></div>   

<div class="row"> 
    <div class="col-md-6 col-12 col-sm-12 separador">
        <label>Bairro</label>
        <input type="text" name="shippingAddressDistrict" minlength="3" class="form-control" id="shippingAddressDistrict"  required>
    </div>
    
    <div class="col-md-6 col-12 col-sm-12 separador">
        <label>Cidade</label>
        <input type="text" name="shippingAddressCity" minlength="4" class="form-control" id="shippingAddressCity"  required>
    </div>                        
</div>

<br>

<div class="row">
    <div class="col-md-12 col-sm-12">
        <small>*ATENÇÃO! Antes de prosseguir, confira se os dados (CEP, endereço) estão preenchidos corretamente.</small>
    </div>    
    <div class="col-md-12 separador"> 
            
        <!-- Moeda utilizada para pagamento -->
        <input type="hidden" name="shippingAddressCountry" id="shippingAddressCountry" value="BRL">
        <!-- 1 - PAC / 2 - SEDEX / 3 - Sem frete -->
        <input type="hidden" name="shippingType" value="3">
        <!-- Valor do frete -->
        <input type="hidden" name="shippingCost" value="0.00">
    </div>  
</div> 

<div class="separador col-md-12"></div>
    
<div class="row">
    <div class="col-md-12">
        <!-- Pagamento com cartão de crédito -->
        <input type="hidden" name="bandeiraCartao" id="bandeiraCartao">
        <input type="hidden" name="valorParcelas" id="valorParcelas">
        <input type="hidden" name="tokenCartao" id="tokenCartao">
        <input type="hidden" name="hashCartao" id="hashCartao">
    </div>    
</div>

                
<div class="row">
    <div class="creditCard col-md-7 col-12 col-sm-12 separador">                            
        <label class="creditCard">Número do seu cartão</label>
        <div class="input-group">
            <input type="text"  name="numCartao"  class="form-control" id="numCartao">
            <div class="input-group-prepend">
                <span class="input-group-text bandeira-cartao creditCard">   </span>
            </div>
        </div>
        <small id="numCartao" class="form-text text-muted">
            Digite o número do cartão
        </small>                              
    </div>

    <div class=" creditCard col-md-5 col-12 col-sm-12 separador">
        <label class="creditCard">Quantidades de Parcelas</label>
        <select name="qntParcelas" id="qntParcelas1" class="form-control">
            <option class="parcela1" value="1" data-parcelas="150.00">1 parcela(s) de R$ 150,00</option>
        </select>
    </div>
</div>

            

<div class="creditCard row">
    <div class="col-md-12 mb-3 creditCard col-12 col-sm-12 separador">
        <label class="creditCard">Nome do titular igual ao do cartão.</label>
        <input type="text" name="creditCardHolderName" class="form-control" id="creditCardHolderName"  >
        <small id="creditCardHolderName" class="form-text text-muted">
            Como está gravado no cartão
        </small>
    </div>    
</div>

<div class="row creditCard">
    <div class="col-md-4 mb-3 creditCard col-12 col-sm-12 separador">
        <label class="creditCard">Mês de Validade. Ex: 09</label>
        <input type="text" name="mesValidade" id="mesValidade"   class="form-control creditCard">
    </div>
    <div class="col-md-4  creditCard col-12 col-sm-12 separador">
        <label class="creditCard">Ano de Validade. Ex: 2030</label>
        <input type="text" name="anoValidade" id="anoValidade"  class="form-control creditCard">
    </div>
    <div class="creditCard col-md-4 col-12 col-sm-12 separador">                            
        <label class="creditCard">CVV do cartão</label>
        <input type="text" name="numCartao" class="form-control creditCard" id="cvvCartao" >
        <small id="cvvCartao" class="form-text text-muted creditCard">
            Código impresso no verso do cartão
        </small>
    </div>
                
</div>

                

<div class="row creditCard">
                    
    <div class="col-md-6  creditCard col-12 col-sm-12 separador">
        <label class="creditCard">Data de Nascimento: Ex: 12/09/1978</label>
        <input type="text" name="creditCardHolderBirthDate" id="creditCardHolderBirthDate"  class="form-control creditCard">
    </div>
    <div class="col-md-6  creditCard col-12 col-sm-12 separador">
        <label class="creditCard">Documento do dono do cartão</label>
        <input type="text" name="creditCardHolderCPF"  id="creditCardHolderCPF" class="form-control creditCard">
    </div>
</div>

<br>

<div class="row">   
    <div class="col-md-12 col-sm-12">         
        <h3 class="mb-3 creditCard">Endereço do titular do cartão</h3>
    </div>    
</div>

<div class="row creditCard">
    <div class="col-md-12 col-sm-12">
        <a id="copiarDados">Usar o mesmo endereço do(a) paciente</a>
    </div>
</div>

<div class="row creditCard">
    <div class="col-md-3 col-sm-12 separador">
        <label class="creditCard">Caixa Postal</label>
        <input type="text" name="billingAddressPostalCode" class="form-control creditCard" id="billingAddressPostalCode" >
    </div>
    <div class="col-md-9 mb-3 creditCard col-12 col-sm-12 separador">
        <label class="creditCard">Endereço. Ex: Rua ou Avenida</label>
        <input type="text" name="billingAddressStreet" id="billingAddressStreet"   class="creditCard form-control">
    </div>

</div>

<div class="row creditCard">
    <div class="col-md-4 mb-3 creditCard col-12 col-sm-12 separador">
        <label class="creditCard">Número</label>
            <input type="text" name="billingAddressNumber" id="billingAddressNumber" minlength="1" class="creditCard form-control">
    </div>
                
    <div class="creditCard col-md-8 col-sm-12 separador">
        <label class="creditCard">Complemento. Ex: Apartamento, andar, casa</label>
        <input type="text" name="billingAddressComplement" id="billingAddressComplement" class="creditCard form-control">
    </div>
</div>
            
                
<div class="row creditCard">
    <div class="col-md-5 mb-3 creditCard col-12 col-sm-12 separador">
        <label class="creditCard">Bairro</label>
        <input type="text" name="billingAddressDistrict" id="billingAddressDistrict" minlength="3"  class="creditCard form-control">
    </div>

    <div class="col-md-4 mb-3 creditCard col-12 col-sm-12 separador">
        <label class="creditCard">Cidade</label>
        <input type="text" name="billingAddressCity" id="billingAddressCity" minlength="3"  class="creditCard form-control">
    </div>

    <div class="col-md-3 mb-3 creditCard col-12 col-sm-12 separador">
        <label class="creditCard">Estado</label>
        <input type="text" name="billingState" id="billingState" class="creditCard form-control" required>        
    </div>
</div>                        
                        
<div class="row">
    <div class="col-md-12 separador">
        <input type="hidden" name="billingAddressCountry" id="billingAddressCountry" value="BRL">

        <input type="hidden" name="receiverEmail" id="receiverEmail" value="<?php echo EMAIL_LOJA; ?>">

        <input type="hidden" name="currency" id="currency" value="<?php echo MOEDA_PAGAMENTO; ?>">

        <input type="hidden" name="notificationURL" id="notificationURL" value="<?php echo URL_NOTIFICACAO; ?>">
        <?php                
            $total_venda = number_format(150.00, 2, '.', '');

        ?>         

        <input type="hidden" name="reference" id="reference" value="<?php echo $idClinica; ?>">

        <input type="hidden" name="amount" id="amount" value="<?php echo $total_venda; ?>">

        <!--<input type="hidden" name="hashCartao" id="hashCartao">-->

        <input type="hidden" name="shippingAddressCountry" id="shippingAddressCountry" value="BRL">  
                
                                        
        
        <span id="aguarde">Processando! Você receberá por e-mail as informações do pagamento...</span>
                        
    </div>
</div>   

<div class="row">                            
    <div class="col-md-12">
        <p>
            <input  type="checkbox" name="termoAceite" id="termoAceite" required >                                        
            Declaro estar ciente que o valor de R$150,00 é referente ao valor da consulta. E meus dados biométricos serão usados para fazer análise basal.
        </p>  
        <br>
        <p><strong style="color:red">*ATENÇÃO!</strong> Antes de pagar consulta, confira se os dados de <strong><a href="#formsPagamentos" style="color:#5d5f00">CEP e endereço</a> </strong> estejam preenchidos corretamente.</p>                      
    </div>
                    
</div> 
                
<div class="row">
    <div class="col-md-12">                             
        <input type="submit" name="btnComprar" id="btnComprar" value="Pagar consulta">
    </div>
</div> 
                
<br>

<div class="row">
    <div class="col-md-12">
        <span id="msg"></span>  
    </div>
</div> 

<br><br>

<div class="row">
    <div class="col-md-6 col-sm-12">                                             
        <img class="tudo_incluso tudo_inclusoA" src="https://online.decidiemagreceroficial.com.br/consulta/img/consulta-online-preco.png" style="width:100%">
    </div>
    <div class="col-md-6 col-sm-12">
        <img class="tudo_incluso" src="https://online.decidiemagreceroficial.com.br/consulta/img/quadrinho-informativo.png" style="width:100%">
    </div>
</div>

<br>
<div class="row">
    <div class="col-12">
        <img src="https://online.decidiemagreceroficial.com.br/consulta/img/imagem-presencial.png" style="width:100%" />
    </div>
</div>     
                                
</form>  
