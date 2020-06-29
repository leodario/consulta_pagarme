(function () {
    $(document).ready(function () {
        $('#dataNascimento').mask('00/00/0000');
        $('#altura').mask('0,00');                       
        $('#peso').mask('S00,00', {translation: {'S': {pattern: /1/, optional: true}}});
        $('#cpf').mask('00000000000'); 
        $('#senderAreaCode').mask('00');                       
        $('#senderPhone').mask('000000000');
        $('#billingAddressPostalCode').mask('00000000');
        $('#creditCardHolderBirthDate').mask('00/00/0000');
        $('#creditCardHolderCPF').mask('00000000000');
        $('#shippingAddressPostalCode').mask('00000000'); 
        $('#numCartao').mask('0000000000000000'); 
        $('#cvvCartao').mask('0000');
        

        $('.nav a[href^="#"]').on('click', function(e) {
            e.preventDefault();
            var id = $(this).attr('href'),
            targetOffset = $(id).offset().top;
                
            $('html, body').animate({ 
                scrollTop: targetOffset - 100
            }, 1000);
        });
        $('.divX').on('click', function(e){
            $('.fechar-btn').css('display','none');
        })
    });
}());

$(document).ready(function(){
    $("#shippingAddressPostalCode").focusout(function(){
        //Início do Comando AJAX
        $.ajax({
            //O campo URL diz o caminho de onde virá os dados
            //É importante concatenar o valor digitado no CEP
            url: 'https://viacep.com.br/ws/'+$(this).val()+'/json/unicode/',
            //Aqui você deve preencher o tipo de dados que será lido,
            //no caso, estamos lendo JSON.
            dataType: 'json',
            //SUCESS é referente a função que será executada caso
            //ele consiga ler a fonte de dados com sucesso.
            //O parâmetro dentro da função se refere ao nome da variável
            //que você vai dar para ler esse objeto.
            success: function(resposta){
                //Agora basta definir os valores que você deseja preencher
                //automaticamente nos campos acima.
                $("#shippingAddressStreet").val(resposta.logradouro);
                $("#shippingAddressComplement").val(resposta.complemento);
                $("#shippingAddressDistrict").val(resposta.bairro);
                $("#shippingAddressCity").val(resposta.localidade);
                $("#shippingAddressState").val(resposta.uf);
                                            
            }
        });
    });
    $('#copiarDados').click(function(){                        
        $('#billingAddressStreet').val($('#shippingAddressStreet').val());
        $('#billingAddressNumber').val($('#shippingAddressNumber').val());
        $('#billingAddressComplement').val($('#shippingAddressComplement').val());
        $('#billingAddressDistrict').val($('#shippingAddressDistrict').val());
        $('#billingAddressCity').val($('#shippingAddressCity').val());
        $('#billingAddressPostalCode').val($('#shippingAddressPostalCode').val());
        $('#billingAddressState').val($('#shippingAddressState').val());
    });
/*
    $('#shippingAddressStreet').keyup(function(){
        $('#billingAddressStreet').val($(this).val());
    });
    $('#shippingAddressNumber').keyup(function(){
        $('#billingAddressNumber').val($(this).val());
    });
    $('#shippingAddressComplement').keyup(function(){
        $('#billingAddressComplement').val($(this).val());
    });
    $('#shippingAddressDistrict').keyup(function(){
        $('#billingAddressDistrict').val($(this).val());
    });
    $('#shippingAddressCity').keyup(function(){
        $('#billingAddressCity').val($(this).val());
    });
    $('#shippingAddressPostalCode').keyup(function(){
        $('#billingAddressPostalCode').val($(this).val());
    });  

*/  
$("#billingAddressPostalCode").focusout(function(){
    //Início do Comando AJAX
    $.ajax({
        //O campo URL diz o caminho de onde virá os dados
        //É importante concatenar o valor digitado no CEP
        url: 'https://viacep.com.br/ws/'+$(this).val()+'/json/unicode/',
        //Aqui você deve preencher o tipo de dados que será lido,
        //no caso, estamos lendo JSON.
        dataType: 'json',
        //SUCESS é referente a função que será executada caso
        //ele consiga ler a fonte de dados com sucesso.
        //O parâmetro dentro da função se refere ao nome da variável
        //que você vai dar para ler esse objeto.
        success: function(resposta){
            //Agora basta definir os valores que você deseja preencher
            //automaticamente nos campos acima.
            $("#billingAddressStreet").val(resposta.logradouro);
            $("#billingAddressComplement").val(resposta.complemento);
            $("#billingAddressDistrict").val(resposta.bairro);
            $("#billingAddressCity").val(resposta.localidade);
            $("#billingAddressState").val(resposta.uf);
                                        
        }
    });         
    
        
});


}); 