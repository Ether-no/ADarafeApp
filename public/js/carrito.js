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
function guardargrabado(){
    $.get('/api/'+catid+'/cartt/', function(datos){});
}
// $(function(){
//     $('#select-categoria').on('change',onSelectCat);
//    });