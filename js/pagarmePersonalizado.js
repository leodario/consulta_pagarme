pagamento();

function pagamento() {
  $('.bankName').hide();
  $('.creditCard').hide();  
}

$("#formsPagamentos").on("submit", function (event) {
  event.preventDefault();
  
  var paymentMethod = document.querySelector('input[name="paymentMethod"]:checked').value;
  $("#aguarde").css('display','block');  
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


var button = document.querySelector('button')

button.addEventListener('click', function() {
  let telefone = $('#senderAreaCodeInter').val() + $('#senderAreaCode').val() + $('#senderPhone').val();
  function handleSuccess (data) {
    console.log(data);
  }

  function handleError (data) {
    console.log(data);
  }
  
  function handleClose () {
    console.log('The modal has been closed.')
  }

  var checkout = new PagarMeCheckout.Checkout({
    encryption_key: 'ek_test_szyzLoKkzA915Rhg80hOEcGaoxJ03r',
    success: handleSuccess,
    error: handleError,
    close: handleClose
  });

  checkout.open({
    amount: 5000,
    /*maxInstallments: 12,
    defaultInstallment: 4, */
    customerData: 'false',
    createToken: 'true',
    paymentMethods: 'boleto,credit_card',
    "customer": {
      "external_id": $('#idClinica').val(),
      "name": $('#creditCardHolderName').val(),
      "type": "individual",
      "country": "br",
      "email": $('#senderEmail').val(),
      "documents": [
        {
          "type": "cpf",
          "number": $('#cpf').val()
        }
      ],
      "phone_numbers": [telefone]
     
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
        "zipcode": $('#billingAddressPostalCode').val()
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
    ]
  });
});

