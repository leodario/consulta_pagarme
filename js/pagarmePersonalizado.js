var button = document.querySelector('#btnComprar')

$("#formsPagamentos").on("submit", function (event) {
  event.preventDefault();
  let telefone = $('#senderAreaCodeInter').val() + $('#senderAreaCode').val() + $('#senderPhone').val();
  function handleSuccess(data) {
    console.log(data);
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        if (this.responseText !== "Transação não finalizada") {
          $.ajax({
            dataType: 'json',
            method: "POST",
            url: "https://demapi.azurewebsites.net/api/usuariolead/landpage/lead",
            data: {
              "nomeCompleto": $('#senderName').val(),
              "email": $('#senderEmail').val(),
              "dataNascimento": $("#dataNascimento").val(),
              "peso": $('#peso').val(),
              "altura": $('#altura').val(),
              "pgTransactionId": data.token,
              "CPF": $('#cpf').val(),
              "sexo": $('#sexo').val(),
              "telefone": $('#senderAreaCodeInter').val() + $('#senderAreaCode').val() + $('#senderPhone').val(),
              "codigoClinica": $('#idClinica').val(),
              "termoAceite": true
            },
            dataType: 'json',
            success: function (retorna) {
              console.log(retorna);
             // window.setTimeout("location.href='https://www.5sgrupo.com.br/decidi-emagrecer/'", 6000)
            },
            error: function (retorna) {
              console.log(retorna);
              $("#aguarde").css('display', 'none');
              alert("Erro ao realizar a transação! Tente novamente!");
              $("#msg").html('<p style="color: #FF0000">Erro ao realizar a transação. Confira seus dados ou atualize a página.</p>');
              return false;
            }
          });
        
          alert('Transação realizada!')
        }
      }
    };
    xhttp.open("POST", "verifica.php?allData=" + data.token, true);
    xhttp.send();
  }

  function handleError(data) {
    console.log(data);
  }

  function handleClose() {
    console.log('The modal has been closed.')
  }

  var checkout = new PagarMeCheckout.Checkout({
    // teste => ek_test_szyzLoKkzA915Rhg80hOEcGaoxJ03r
    // produção => ek_live_25ivbLiwWY08soDRbAQKlry7Ridlit
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

