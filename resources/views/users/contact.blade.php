@extends('layouts.app')

@section('content')



<!-- Inicia breadcrumb indice de paginas -->
<div class="row">
    <div class="s12 m12">
        <div class="bread-top-info bread-back-padd">

            <ul>
                <li>
                    <a href="#" class="bread-info-gen">Home /</a>
                </li>
                <li>
                    <a class="bread-info-gen-strong">Contacto</a>
                </li>
            </ul>

        </div>
    </div>
</div><br>
<!-- Finaliza breadcrumb indice de paginas -->


<!-- Inicia container -->
<div class="container">
    <h4 class="font-h">¡Necesitas ayuda!</h4>
    <hr class="hr-color">
</div><br>



<div class="container">
    <div class="row">


        <div class="col m8 s12">
            <div>
                <h5>Ubícanos</h5>
            </div>

            <div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3765.7422316673155!2d-99.65589948464272!3d19.293572686963564!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cd89ea33402ba5%3A0x19fcd4be3a072f99!2sCosmovitral%20Jard%C3%ADn%20Bot%C3%A1nico!5e0!3m2!1ses-419!2smx!4v1579492557553!5m2!1ses-419!2smx"
                    width="400" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>

            <div>
                <h5>Sucursales</h5>
                <h6>DARAFE Sucursal 1</h6>
                <p>Dirección: Lorem ipsum dolor, sit amet consectetur adipisicing elit. Error soluta nobis.<br> Teléfono: (111) 1111 111 <br>Email: email@example.com</p>
            </div>

            <div>
                <h6>DARAFE Sucursal 2</h6>
                <p>Dirección: Lorem ipsum dolor, sit amet consectetur adipisicing elit. Error soluta nobis.<br> Teléfono: (111) 1111 111 <br>Email: email@example.com</p>
            </div>
        </div>




        <div class="col m4 s12">
            <div><br>
                <h5>Envíanos un mensaje</h5>
            </div>
            <form>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="last_name" type="text" class="validate">
                        <label for="last_name">Nombre completo</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <input id="last_name" type="number" class="validate">
                        <label for="last_name">Teléfono</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <input id="email" type="email" class="validate">
                        <label for="email">Email</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <textarea id="textarea2" class="materialize-textarea" data-length="120"></textarea>
                        <label for="textarea2">Textarea</label>
                    </div>
                </div>

                <a href="#" class="btn  waves-effect waves-light">Envíar</a>
            </form>
        </div>
    </div>
</div>
</div>
<!-- Finaliza container -->



@endsection