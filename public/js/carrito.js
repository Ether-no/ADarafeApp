var idapppago;
function grab(catid){
    $.get('/api/'+catid+'/cart/', function(data){
        console.log(data);
        $.get('/api/'+catid+'/cartt/', function(datos){
            for(var i=0; i<data.length; ++i)
    var divmodal = '<div class="row"><form method="post" class="col s12" action="RegistraGN/'+data[i].idcartgrabado+'"><div class="row"><div class="input-field col s6"><input id="first_name" type="text" class="validate" name="numerog" value="{{old("numerog)"}}"><label for="first_name">Numero del anillo</label></div><div class="input-field col s6"><input id="last_name" type="text" class="validate"><label for="last_name">Escriba la grabacion</label></div></div><div class="center"><input type="submit" class="waves-effect waves-light btn white-text" value="Guardar Grabado"></div></form></div>';
            
            
            $('#modal1').html(divmodal);
        });
      
    });
}
function cambiarsrcdetalle(src){
  $('#dynamicimgdetalle').attr('src','http://127.0.0.1:8000/' + src);
}

function guardargrabado(){
    $.get('/api/'+catid+'/cartt/', function(datos){});
}
function tipodepago(nombrepago){
    console.log(nombrepago);
    switch (nombrepago) {
        case "PayPal":
            document.getElementById("strippe").style.display = "none";
            document.getElementById("mercadopago").style.display = "none";
            document.getElementById("paypal").style.display = "block";
            idapppago = 1;
          //Declaraciones ejecutadas cuando el resultado de expresión coincide con el valor1
            break;
        case "Stripe":
            document.getElementById("paypal").style.display = "none";
            document.getElementById("mercadopago").style.display = "none";
            document.getElementById("strippe").style.display = "none";
            idapppago = 2;
          //Declaraciones ejecutadas cuando el resultado de expresión coincide con el valor2
          break;
        case "MercadoPago":
          document.getElementById("paypal").style.display = "none";
          document.getElementById("strippe").style.display = "none";
          document.getElementById("mercadopago").style.display = "block";
          idapppago = 3;
          //Declaraciones ejecutadas cuando el resultado de expresión coincide con el valor2
          break;
        default:
            console.log("No esta en la lista");
          //Declaraciones ejecutadas cuando ninguno de los valores coincide con el valor de la expresión
          break;
      }
}
function valuarstripe(){
var cardholderName = document.getElementById('cardholder-name').value;
var cardholderEmail = document.getElementById('cardholder-email').value;
var cardButton = document.getElementById('payButton');
var resultContainer = document.getElementById('card-result');
var idpay =document.getElementById('paymentMethod');
  stripe.createPaymentMethod({
      type: 'card',
      card: cardElement,
      billing_details: {
        email: cardholderEmail,
        name: cardholderName,
      },
    }
  ).then(function(result) {
 
    if (result.error) {
      // Display error.message in your UI
      resultContainer.textContent = result.error.message;
    } else {
        idpay.textContent = "Created payment method: " + result.paymentMethod.id;
        console.log("regreso");
    }
  });

}

//document.getElementById('cardNumber').addEventListener('change', guessPaymentMethod);
// $(function(){
//   $('#cardNumber').on('change',guessPaymentMethod);
// });
// function guessPaymentMethod(event) {
//   let cardnumber = document.getElementById("cardNumber").value;
//   if (cardnumber.length >= 6) {
//       let bin = cardnumber.substring(0,6);
//       window.Mercadopago.getPaymentMethod({
//           "bin": bin
//       }, setPaymentMethod);
//   }
// };
// function setPaymentMethod(status, response) {
//   if (status == 200) {
//       let paymentMethod = response[0];
//       document.getElementById('paymentMethodId').value = paymentMethod.id;

//       if(paymentMethod.additional_info_needed.includes("issuer_id")){
//           getIssuers(paymentMethod.id);
//       } else {
//           getInstallments(
//               paymentMethod.id,
//               document.getElementById('transactionAmount').value
//           );
//       }
//   } else {
//       alert(`payment method info error: ${response}`);
//   }
// }
// function setCardNetwork(){
//   var win =  window.Mercadopago;
//   var  cardNumber = document.getElementById("cardNumber");
//   win.getPaymentMethod(
//       { "bin": cardNumber.value.substring(0,6) },
//       function(status, response){
//           var cardNetwork = document.getElementById("cardNetwork");
//           console.log(response);
//           cardNetwork.value = response[0].id;
//   });
// }

// Strongly recommended: Hide loader after 20 seconds, even if the page hasn't finished loading
