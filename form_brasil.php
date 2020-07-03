

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
            <div class="compra_segura"><img src="img/compra_segura.png"/></div>
        </div>                    
    </div>

    <div class="separador col-md-12"></div>         
    <!--        
    <div class="row"> 
        <div class="col-md-12 col-sm-12 col-12">
            <a class="btn-compra-alternar" href="/DecidiEmagrecer/consulta_pagarme/internacional/?idclinica=<?php echo $idClinica ?>#formsPagamento">Moro fora do Brasil. Quero usar cartão Estrangeiro.</a> 
        </div>
    </div>        
    -->
    <div class="row"> 

        <div class="col-md-5 col-12 col-sm-12 col-12 separador">
            <label>Código da Clínica</label>                        
            <input type="text" name="idClinica" id="idClinica" <?php echo $habilitar; echo $habilitar2; ?>  value="<?php echo $idClinica; ?>" class="form-control" required>                        
        </div>  

        <div class="col-md-7 col-12 col-sm-12 separador">
            <label>Nome Completo</label>                            
            <input type="text" name="senderName" id="senderName" minlength="4" value="João das Neves" class="form-control" required>                       
        </div>    
    </div>

    <div class="separador col-md-12 col-sm-12 col-12"></div>                       

    <div class="row">                     

        <div class="col-md-6 col-12 col-sm-12 separador">
            <label>CPF: Sem traço ou ponto</label>                            
            <input type="text" name="senderCPF" id="cpf" minlength="11" value="30621143049" class="form-control" required>                       
        </div>
        <div class="col-md-6 col-12 col-sm-12 separador">
            <label>E-mail do(a) paciente</label>  
            <input type="email" name="senderEmail" id="senderEmail" value="joaoneves@norte.com"  class="form-control" required>                                                
        </div>
    </div>

    <div class="separador col-md-12 col-12 col-sm-12"></div> 

    <div class="row">
        <div class="col-md-3 col-12 col-sm-12 separador">
            <label>DDI Ex: Cód. Brasil +55</label>
            <input type="text" name="senderAreaCodeInter" disabled id="senderAreaCodeInter" placeholder="DDI" maxlength="4" minlength="1" value="+55" class="form-control" required>                            
        </div>
        <div class="col-md-3 col-12 col-sm-12 separador">
            <label>DDD Ex: 11</label>
            <input type="text" name="senderAreaCode" id="senderAreaCode" value="11" minlength="2" maxlength="2" class="form-control" required>
        </div>

        <div class="col-md-6 col-12 col-sm-12 separador">
            <label>Celular: Somente número</label>
            <input type="text" name="senderPhone" id="senderPhone" value="999999999"  class="form-control" required>
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
            <input type="text" name="altura" id="altura" value="1,70"  minlength="4"  class="form-control" required>
        </div>

        <div class="col-md-3 col-12 col-sm-12 separador">
            <label>Peso (Kg) Ex: 70,00</label>
            <input type="text" name="peso" id="peso"  minlength="2" value="70,00"  class="form-control" required>
        </div>

        <div class="col-md-3 col-12 col-sm-12 separador">
            <label>Data Nasc: 12/07/1987</label>
            <input type="text" name="dataNascimento" id="dataNascimento" minlength="10" value="12/07/1987"  class="form-control" required>
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
            <label>CEP: Sem traço ou ponto</label>
            <input type="text" name="shippingAddressPostalCode" minlength="3" value="03424030" class="form-control" id="shippingAddressPostalCode"  required>
        </div>                          
        <div class="col-md-9  col-12 col-sm-12 separador">
            <label>Endereço. Ex: Rua ou Avenida</label>
            <input type="text" name="shippingAddressStreet" minlength="4" class="form-control" id="shippingAddressStreet" required>
        </div>                        
    </div>                  
                        
    <div class="separador col-md-12"></div>
                
    <div class="row"> 
        <div class="col-md-4 col-12 col-sm-12 separador">
            <label>Número: Se for sem número deixe 0 (zero)</label>
            <input type="text" name="shippingAddressNumber" minlength="1" class="form-control" id="shippingAddressNumber" value="0" required>
        </div>  
        <div class="col-md-8 col-12 col-sm-12 separador">
            <label>Complemento. Ex: Apartamento, andar, casa</label>
            <input type="text" name="shippingAddressComplement" class="form-control" id="shippingAddressComplement" >
        </div>                       
    </div>      

    <div class="separador col-md-12"></div>   

    <div class="row"> 
        <div class="col-md-4 col-12 col-sm-12 separador">
            <label>Bairro</label>
            <input type="text" name="shippingAddressDistrict" minlength="3" class="form-control" id="shippingAddressDistrict"  required>
        </div>
        
        <div class="col-md-6 col-12 col-sm-12 separador">
            <label>Cidade</label>
            <input type="text" name="shippingAddressCity" minlength="4" class="form-control" id="shippingAddressCity"  required>
        </div>
        <div class="col-md-2 col-12 col-sm-12 separador">
            <label>Estado</label>
            <select name="shippingAddressState" class="custom-select d-block w-100" id="shippingAddressState" required>
                
            <?php include 'includes/unidade_federal.php'; ?>

            </select>
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
        
    
   
    <br>
   

    <div class="row">   
        <div class="col-md-12 col-sm-12">         
            <h3 class="mb-3 creditCard">Dados do titular do cartão ou responsável pelo boleto</h3>
        </div>    
    </div>

    

    <div class="row creditCard">
        <div class="col-md-12 col-sm-12">
            <a id="copiarDados">Usar o mesmos dados do(a) paciente</a>
        </div>
    </div>

    <div class="creditCard row">
        <div class="creditCard col-12">
            <label class="creditCard">Nome do titular igual ao do cartão ou boleto.</label>
            <input type="text" name="creditCardHolderName" class="form-control" value="João Comprador" id="creditCardHolderName" required  >
            <small id="creditCardHolderName" class="form-text text-muted">
                Como está gravado no cartão ou responsável pelo boleto
            </small>
        </div>    
    </div>

    <div class="row creditCard">
        <div class="col-md-3 col-sm-12 separador">
            <label class="creditCard">CEP: Sem traço ou ponto</label>
            <input required type="text" name="billingAddressPostalCode" value="06714360" class="form-control creditCard" minlength="8" id="billingAddressPostalCode" >
        </div>
        <div class="col-md-9 mb-3 creditCard col-12 col-sm-12 separador">
            <label class="creditCard">Endereço. Ex: Rua ou Avenida</label>
            <input required type="text" name="billingAddressStreet" id="billingAddressStreet" minlength="4"  class="creditCard form-control">
        </div>

    </div>

    <div class="row creditCard">
        <div class="col-md-4 mb-3 creditCard col-12 col-sm-12 separador">
            <label class="creditCard">Número: Se for sem número deixe 0 (zero)</label>
                <input required type="text" name="billingAddressNumber" id="billingAddressNumber" value="0" minlength="1" class="creditCard form-control">
        </div>
                    
        <div class="creditCard col-md-8 col-sm-12 separador">
            <label class="creditCard">Complemento. Ex: Apartamento, andar, casa</label>
            <input type="text" name="billingAddressComplement" id="billingAddressComplement" class="creditCard form-control">
        </div>
    </div>
                
                    
    <div class="row creditCard">
        <div class="col-md-5 mb-3 creditCard col-12 col-sm-12 separador">
            <label class="creditCard">Bairro</label>
            <input required type="text" name="billingAddressDistrict" id="billingAddressDistrict" minlength="3"  class="creditCard form-control">
        </div>

        <div class="col-md-5 mb-3 creditCard col-12 col-sm-12 separador">
            <label class="creditCard">Cidade</label>
            <input required type="text" name="billingAddressCity" id="billingAddressCity" minlength="3"  class="creditCard form-control">
        </div>

        <div class="col-md-2 mb-3 creditCard col-12 col-sm-12 separador">
            <label class="creditCard">Estado</label>
            <select required name="billingAddressState" class="custom-select d-block w-100 creditCard" id="billingAddressState">

                <?php include 'includes/unidade_federal.php'; ?>

            </select>
        </div>
    </div>                        
                            
    <div class="row">
        <div class="col-md-12 separador">
            <input type="hidden" name="billingAddressCountry" id="billingAddressCountry" value="BRL">

            <input type="hidden" name="receiverEmail" id="receiverEmail" value="<?php echo EMAIL_LOJA; ?>">

            <input type="hidden" name="currency" id="currency" value="<?php echo MOEDA_PAGAMENTO; ?>">

            <input type="hidden" name="notificationURL" id="notificationURL" value="<?php echo URL_NOTIFICACAO; ?>">
            <?php                
                $total_venda = number_format(50.00, 2, '.', '');

            ?>         

            <input type="hidden" name="reference" id="reference" value="<?php echo $idClinica; ?>">

            <input type="hidden" name="amount" id="amount" value="<?php echo $total_venda; ?>">

            <!--<input type="hidden" name="hashCartao" id="hashCartao">-->

            <input type="hidden" name="shippingAddressCountry" id="shippingAddressCountry" value="BRL">  
                    
                                            
            
            <span id="aguarde">Processando! Você receberá por e-mail as informações do pagamento...</span>


            <div id="field_errors"></div>
                            
        </div>
    </div>   

    <div class="row">                            
        <div class="col-md-12">
            <p>
                <input  type="checkbox" name="termoAceite" id="termoAceite" required >                                        
                Declaro estar ciente que o valor de R$50,00 é referente ao valor da consulta. E meus dados biométricos serão usados para fazer análise basal.
            </p>  
            <br>
            <p><strong>*Observação!</strong> Antes de pagar consulta, confira se os dados de <strong><a href="#formsPagamentos" style="color:#5d5f00">CEP e endereço</a> </strong> estejam preenchidos corretamente.</p>                      
        </div>
                        
    </div> 
   

    <div class="row">
        <div class="col-md-12">                             
            <input type="submit" name="btnComprar" id="btnComprar" value="Continuar">
            
        </div>
    </div> 
 

    <div class="row">
        <div class="col-md-12">
            <span id="msg"></span>  
        </div>
    </div> 

    

    
 
    <!--
    <div class="row">
        <div class="col-12">
            <h3 style="text-align:center">Veja o comparativo com a consulta 5S PRESENCIAL</h3>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-12">
            <img src="https://online.decidiemagreceroficial.com.br/consulta/img/imagem-presencial.png" style="width:100%" />             
        </div>
    </div>     
    -->      

    <br><br>

    <div class="row">
        <div class="col-md-12"> 
            <h2 style="text-align:center; color:red">Atenção</h2> <br>
            <h4 style="line-height: 31px;">Se você mora fora do Brasil, favor verificar se o seu país está recebendo mercadorias do Brasil, caso não esteja, infelizmente só  conseguiremos continuar nosso caminho juntos após a pandemia!</h4>
        </div>
    </div>

    <br><br>   

   
</form>  




