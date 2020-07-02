var amount = $('#amount').val();
//var amount = "600.00";
pagamento();

function pagamento() {
    $('.bankName').hide();
    $('.creditCard').hide();
    //Endereco padrão do projeto
    var endereco = jQuery('.endereco').attr("data-endereco");
    $.ajax({

        //URL completa do local do arquivo responsável em buscar o ID da sessão
        url: "pagamento.php",
        type: 'POST',
        dataType: 'json',
        success: function (retorno) {

            //ID da sessão retornada pelo PagSeguro
            PagSeguroDirectPayment.setSessionId(retorno.id);
        },
        complete: function (retorno) {
            listarMeiosPag();
        }
    });
}

function listarMeiosPag() {
    PagSeguroDirectPayment.getPaymentMethods({
        amount: amount,
        success: function (retorno) {
            console.log(retorno);
            //Recuperar as bandeiras do cartão de crédito
            $('.meio-pag').append("<div>Cartão de Crédito</div>");
            $.each(retorno.paymentMethods.CREDIT_CARD.options, function (i, obj) {
                $('.meio-pag').append("<span class='img-band'><img src='https://stc.pagseguro.uol.com.br" + obj.images.SMALL.path + "'></span>");
            });

            //Recuperar as bandeiras do boleto
            $('.meio-pag').append("<div>Boleto</div>");
            $('.meio-pag').append("<span class='img-band'><img src='https://stc.pagseguro.uol.com.br" + retorno.paymentMethods.BOLETO.options.BOLETO.images.SMALL.path + "'><span>");

            //Recuperar as bandeiras do débito online
            $('.meio-pag').append("<div>Débito Online</div>");
            $.each(retorno.paymentMethods.ONLINE_DEBIT.options, function (i, obj) {
                $('.meio-pag').append("<span class='img-band'><img src='https://stc.pagseguro.uol.com.br" + obj.images.SMALL.path + "'></span>");
                $('#bankName').show().append("<option value='" + obj.name + "'>" + obj.displayName + "</option>");
                $('.bankName').hide();
            });
        },
        error: function (retorno) {
            $("#aguarde").css('display','none');
            alert("ERRO na transação, confira os seus dados e tente de novo, ou atualize a página!");
        },
        complete: function (retorno) {
            // Callback para todas chamadas.
            //recupTokemCartao();
        }
    });
}

//Receber os dados do formulário, usando o evento "keyup" para receber sempre que tiver alguma alteração no campo do formulário
$('#numCartao').on('focusout', function () {

    //Receber o número do cartão digitado pelo usuário
    var numCartao = $(this).val();

    //Contar quantos números o usuário digitou
    var qntNumero = numCartao.length;

    //Validar o cartão quando o usuário digitar 6 digitos do cartão
    if (qntNumero >= 4) {

        //Instanciar a API do PagSeguro para validar o cartão
        PagSeguroDirectPayment.getBrand({
            cardBin: numCartao,
            success: function (retorno) {
                $('#msg').empty();

                //Enviar para o index a imagem da bandeira
                var imgBand = retorno.brand.name;
                $('.bandeira-cartao').html("<img src='https://stc.pagseguro.uol.com.br/public/img/payment-methods-flags/42x20/" + imgBand + ".png'>");
                $('#bandeiraCartao').val(imgBand);
                recupParcelas(imgBand);
            },
            error: function (retorno) {

                //Enviar para o index a mensagem de erro
                $('.bandeira-cartao').empty();
                $('#msg').html("Cartão inválido");
            }
        });
    }
});

//Recuperar a quantidade de parcelas e o valor das parcelas no PagSeguro
function recupParcelas(bandeira) {
    var noIntInstalQuantity = $('#noIntInstalQuantity').val();
    $('#qntParcelas').html('<option value="">Selecione</option>');
    PagSeguroDirectPayment.getInstallments({
        
        //Valor do produto
        amount: amount,

        //Quantidade de parcelas sem juro        
        maxInstallmentNoInterest: 1,

        //Tipo da bandeira
        brand: bandeira,
        success: function (retorno) {
            $.each(retorno.installments, function (ia, obja) {
                $.each(obja, function (ib, objb) {

                    //Converter o preço para o formato real com JavaScript
                    var valorParcela = objb.installmentAmount.toFixed(2).replace(".", ",");

                    //Acrecentar duas casas decimais apos o ponto
                    var valorParcelaDouble = objb.installmentAmount.toFixed(2);
                    //Apresentar quantidade de parcelas e o valor das parcelas para o usuário no campo SELECT
                    $('#qntParcelas').show().append("<option class='parcela"+ objb.quantity +"'" + "value='" + objb.quantity + "' data-parcelas='" + valorParcelaDouble + "'>" + objb.quantity + " parcela(s) de R$ " + valorParcela + "</option>");
                    apagaParcela();
                });
            });
        },
        error: function (retorno) {
            // callback para chamadas que falharam.
        },
        complete: function (retorno) {
            // Callback para todas chamadas.
        }
    });
}

//Enviar o valor parcela para o formulário
$('#qntParcelas').change(function () {
    $('#valorParcelas').val($('#qntParcelas').find(':selected').attr('data-parcelas'));
});

//Recuperar o token do cartão de crédito
$("#formsPagamentos").on("submit", function (event) {
    event.preventDefault();
    $("#aguarde").css('display','block');
    var paymentMethod = document.querySelector('input[name="paymentMethod"]:checked').value;
    console.log(paymentMethod);

    if (paymentMethod == 'creditCard') {
        PagSeguroDirectPayment.createCardToken({
            cardNumber: $('#numCartao').val(), // Número do cartão de crédito
            brand: $('#bandeiraCartao').val(), // Bandeira do cartão
            cvv: $('#cvvCartao').val(), // CVV do cartão
            expirationMonth: $('#mesValidade').val(), // Mês da expiração do cartão
            expirationYear: $('#anoValidade').val(), // Ano da expiração do cartão, é necessário os 4 dígitos.
            success: function (retorno) {
                $('#tokenCartao').val(retorno.card.token);
                recupHashCartao();
            },
            error: function (retorno) {
                // Callback para chamadas que falharam.
                $("#aguarde").css('display','none');
                alert("ERRO na transação, confira os seus dados e tente de novo!");
            },
            complete: function (retorno) {
                // Callback para todas chamadas.                
            }
        });
    } else if (paymentMethod == 'boleto') {
        recupHashCartao();
    } else if (paymentMethod == 'eft') {
        recupHashCartao();
    }

});

//Recuperar o hash do cartão
function recupHashCartao() {
    PagSeguroDirectPayment.onSenderHashReady(function (retorno) {
        if (retorno.status == 'error') {
            alert("Erro ao realizar a transação!");
            $("#msg").html('<p style="color: #FF0000">Erro ao realizar a transação. Confira seus dados ou atualize a página.</p>');
            console.log(retorno.message);
            return false;           
        } else {
            $("#hashCartao").val(retorno.senderHash);
            var dados = $("#formsPagamentos").serialize();
            console.log(dados);

            var endereco = jQuery('.endereco').attr("data-endereco");
            console.log(endereco);
            $.ajax({
                method: "POST",
                url: "proc_pag.php",
                data: dados,
                dataType: 'json',
                success: function (retorna) {
                    $.ajax({
                        method: "POST",
                        url: "https://demapi.azurewebsites.net/api/usuariolead/landpage/lead",
                        data: {
                            "nomeCompleto": retorna.DadosArray.senderName,
                            "email": $('#senderEmail').val(),
                            "dataNascimento":$("#dataNascimento").val(),
                            "peso":$('#peso').val(),
                            "altura":$('#altura').val(),
                            "pgTransactionId":retorna.dados.code, 
                            "CPF":$('#cpf').val(),
                            "sexo":$('#sexo').val(),                           
                            "telefone": $('#senderAreaCodeInter').val() + $('#senderAreaCode').val() + $('#senderPhone').val(),
                            "codigoClinica":$('#idClinica').val(),
                            "termoAceite": true
                        },
                        dataType: 'json',
                        success: function (retorna) {
                            console.log(retorna);
                           window.setTimeout("location.href='https://www.5sgrupo.com.br/decidi-emagrecer/'",6000)
                        },
                        error: function (retorna) {
                            console.log(retorna);
                            $("#aguarde").css('display','none');
                            alert("Erro ao realizar a transação! Tente novamente!");
                            $("#msg").html('<p style="color: #FF0000">Erro ao realizar a transação. Confira seus dados ou atualize a página.</p>');
                            return false;
                        }
                    });

                    console.log("Sucesso " + JSON.stringify(retorna));
                    $("#msg").html('<p style="color: green">Transação realizada! Você receberá por e-mail as informações do pagamento.</p>');
                    //window.location.href = retorna['dados']['paymentLink'];
                    $("#aguarde").css('display','none');
                    
                    
                    alert("Transação realizada! Você receberá por e-mail as informações do pagamento.");                  
                   
                },
                error: function (retorna) {                    
                    console.log("Erro" + JSON.stringify(retorna));
                    $("#msg").html('<p style="color: #FF0000">Erro ao realizar a transação. Confira seus dados ou atualize a página.</p>');                    
                    $("#aguarde").css('display','none');
                    alert("Erro ao realizar a transação!");
                    return false;
                }
            });
        }
    });
}

function tipoPagamento(paymentMethod){
    if(paymentMethod == "creditCard"){
        $('.creditCard').show();
        $('.bankName').hide();
    }
    if(paymentMethod == "boleto"){
        $('.creditCard').hide();
        $('.bankName').hide();
        $('.cartao-credito-select').removeAttr("required");
    }
    if(paymentMethod == "eft"){
        $('.creditCard').hide();
        $('.bankName').show();
    }
}


/*
function escondeBoleto(documento){    
    if(documento == "cpf"){
        $('.tipo-boleto').show();
    } 
    if(documento == "doc_estr"){
        $('.tipo-boleto').hide();
    }  
}
 
*/

$("#formsPagamentos").on("submit", function (event) {
    event.preventDefault();
  
    var paymentMethod = document.querySelector('input[name="paymentMethod"]:checked').value;
    $("#aguarde").css('display', 'block');
    console.log(paymentMethod);
  
    let dataNasc = $('#creditCardHolderBirthDate').val();
    let telefone = $('#senderAreaCodeInter').val() + $('#senderAreaCode').val() + $('#senderPhone').val();
  
    function formatData(dataNasc) {
      var dataTemp = dataNasc.split('/');
      return dataTemp[2] + '-' + dataTemp[1] + '-' + dataTemp[0];
    }
  
    if (paymentMethod == 'creditCard') {
  
      $.ajax({
        method: "POST",
        url: "https://api.pagar.me/1/transactions",
        data: {
          "api_key": "ak_test_Wx0bpUdLNijiW3xKxzijTb1O0o70v8",
          "payment_method": "credit_card",
          "async": false,
          "amount": 5000,
          "installments": 1,
          "card_number": $('#numCartao').val(),
          "card_cvv": $("#cvvCartao").val(),
          "card_expiration_date": $("#mesValidade").val() + $("#anoValidade").val(),
          "card_holder_name": $("#creditCardHolderName").val(),
          "customer": {
            "external_id": "#3311",
            "name": $('#creditCardHolderName').val(),
            "type": "individual",
            "country": "br",
            "email": $('#senderEmail').val(),
            "documents": [
              {
                "type": "cpf",
                "number": $('#creditCardHolderCPF').val()
              }
            ],
            "phone_numbers": [telefone],
            "birthday": formatData(dataNasc)
          },
          "billing": {
            "name": $('#creditCardHolderName').val(),
            "address": {
              "country": "br",
              "state": $('#billingAddressState').val(),
              "city": $('#billingAddressCity').val(),
              "neighborhood": $('#billingAddressDistrict').val(),
              "street": $('#billingAddressStreet').val(),
              "street_number": $('#billingAddressNumber').val(),
              "zipcode": $('#shippingAddressPostalCode').val()
            }
          },
  
          "items": [
            {
              "id": "r123",
              "title": "Decidi Emagrecer - Consulta",
              "unit_price": 5000,
              "quantity": 1,
              "tangible": false
            }
          ],
          "split_rules": [
            {
              // Franqueadora
              "recipient_id": "re_ckb9cqmup0b20en6ehro4323b",
              "amount": 2500,
              "liable": true,
              "charge_processing_fee": true
            },
            {
              // Franqueado
              "recipient_id": "re_ckb9d6k7h0bkqb26d6r3ucovh",
              "amount": 2500,
              "liable": false,
              "charge_processing_fee": true
            }
            /*{
                      // Nutrigroup                
              "recipient_id": "re_ckb9uvr4i0ewtb26dtngxy41a",
              "amount": 25000,
              "liable": false,
                      "charge_processing_fee": true
                      
            } */
          ]
        },
        dataType: 'json',
        success: function (retorna) {
          console.log(retorna);
          /*  window.setTimeout("location.href='https://www.5sgrupo.com.br/decidi-emagrecer/'", 6000) */
        },
        error: function (retorna) {
          console.log(retorna);
          $("#aguarde").css('display', 'none');
          alert("Erro ao realizar a transação! Tente novamente!");
          $("#msg").html('<p style="color: #FF0000">Erro ao realizar a transação. Confira seus dados ou atualize a página.</p>');
          return false;
        }
      });
  
  
  
    } else if (paymentMethod == 'boleto') {
      $.ajax({
        method: "POST",
        url: "https://api.pagar.me/1/transactions",
        data: {
          "api_key": "ak_test_Wx0bpUdLNijiW3xKxzijTb1O0o70v8",
          "amount": 5000,
          "payment_method": "boleto",
          "customer": {
            "type": "individual",
            "country": "br",
            "name": $('#senderName').val(),
            "documents": [
              {
                "type": "cpf",
                "number": $('#cpf').val()
              }
            ]
          },
          "split_rules": [
            {
              // Franqueadora
              "recipient_id": "re_ckb9cqmup0b20en6ehro4323b",
              "amount": 2500,
              "liable": true,
              "charge_processing_fee": false
            },
            {
              "recipient_id": "re_ckb8jfoa008t5b26dmpxe9u3f",
              "amount": 2500,
              "liable": true,
              "charge_processing_fee": true
            }
            /*
            {
              "recipient_id": "re_ckb9uvr4i0ewtb26dtngxy41a",
              "amount": 15000,
              "liable": true,
              "charge_processing_fee": true
            }
            */
          ]
        }
  
      });
    }
  
    $.ajax({
      dataType: 'json',
      method: "POST",
      url: "https://demapi.azurewebsites.net/api/usuariolead/landpage/lead",
      data: {
        "nomeCompleto": retorna.DadosArray.senderName,
        "email": $('#senderEmail').val(),
        "dataNascimento": $("#dataNascimento").val(),
        "peso": $('#peso').val(),
        "altura": $('#altura').val(),
        "pgTransactionId": retorna.dados.code,
        "CPF": $('#cpf').val(),
        "sexo": $('#sexo').val(),
        "telefone": $('#senderAreaCodeInter').val() + $('#senderAreaCode').val() + $('#senderPhone').val(),
        "codigoClinica": $('#idClinica').val(),
        "termoAceite": true
      },
      dataType: 'json',
      success: function (retorna) {
        console.log(retorna);
        window.setTimeout("location.href='https://www.5sgrupo.com.br/decidi-emagrecer/'", 6000)
      },
      error: function (retorna) {
        console.log(retorna);
        $("#aguarde").css('display', 'none');
        alert("Erro ao realizar a transação! Tente novamente!");
        $("#msg").html('<p style="color: #FF0000">Erro ao realizar a transação. Confira seus dados ou atualize a página.</p>');
        return false;
      }
    });
  
  })
  
  function tipoPagamento(paymentMethod) {
    if (paymentMethod == "creditCard") {
      $('.creditCard').show();
      $('.bankName').hide();
    }
    if (paymentMethod == "boleto") {
      $('.creditCard').hide();
      $('.bankName').hide();
      $('.cartao-credito-select').removeAttr("required");
    }
  }
  