$(function(){
    $('#select-categoria').on('change',onSelectCat);
   });
// $(function(){
//     $('#radioagrandarvalue1').on('change',OnAgrandar);
//    });
var checkboxnum = document.getElementById('radioagrandarvalue1');
checkboxnum.addEventListener("change", OnAgrandar, true);
   
function OnAgrandar(){
    document.getElementById('numerominimo').style.display = "block";
    document.getElementById('numeromaximo').style.display = "block";
}
var checkboxnum = document.getElementById('radioagrandarvalue0');
checkboxnum.addEventListener("change", OnnoAgrandar, true);
   
function OnnoAgrandar(){
    document.getElementById('numerominimo').style.display = "none";
    document.getElementById('numeromaximo').style.display = "none";
}
var checkboxgrabar = document.getElementById('radiosgrabar1');
checkboxgrabar.addEventListener("change", OnGrabar1, true);
var checkboxnograbar = document.getElementById('radiosgrabar0');
checkboxnograbar.addEventListener("change", OnGrabar0, true);
function OnGrabar1(){
    document.getElementById('fgrabar').style.display = "block";
}
function OnGrabar0(){
    document.getElementById('fgrabar').style.display = "none";
}
   function onSelectCat(data){
        var catid = $(this).val();
        if (catid != 1){
            document.getElementById('pesoaprox').style.display = "block";
        }else{
            var valo = 0;
            $('#peso').val('0');
           //document.getElementById("peso").value = valo;
           document.getElementById('pesoaprox').style.display = "none";
           
        }
        
        $.get('/api/productos/'+catid+'/create', function(data){
            var html_selectsubcat = '<label  for="inputState">Sub Categoria</label><select name="id_subcategoria" id="selectcat"><option value="">Seleccione Subcategoria</option>';
               
            for(var i=0; i<data.length; ++i)
                html_selectsubcat = html_selectsubcat + '<option value="'+data[i].id_subcategoria+'">'+data[i].nombre+'</option>';
              
               
                //document.getElementById('id_subcat').innerHTML = html_selectsubcat;   
                
           // document.getElementById('id_subcat').innerHTML = html_selectsubcat;
           html_selectsubcat = html_selectsubcat + '</select>';
       console.log(html_selectsubcat);
       $('#id_subcat').html(html_selectsubcat);
        document.getElementById('selectcat').style.display = "block";
       });
    }