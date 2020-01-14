@extends('plantillas.plantilla')
@section('titulo','Proyecto| Iniciar Sesion')

@section('menu')
  @include('plantillas.menu')
@endsection

@section('contenido')
	<section class="engine"><a href="https://mobirise.info/n">free simple site templates</a></section><section class="mbr-section form1 cid-rksV670gNg mbr-parallax-background" id="form1-n">

    <div class="mbr-overlay" style="opacity: 0.8; background-color: rgb(193, 193, 193);">
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="title col-12 col-lg-8">
                <h2 class="mbr-section-title align-center pb-3 mbr-fonts-style display-2">
                    INICIAR SESION</h2>
                
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="media-container-column col-lg-4" data-form-type="formoid">
                <!---Formbuilder Form--->
                <!--<form action="{{route('cliente.create')}}" method="POST" class="mbr-form form-with-styler" data-form-title="Mobirise Form"><input type="hidden" name="email" data-form-email="true" value="WAE5oIqQqUTO9u3C0BNyt0BTecEUfOvR/Av0Y0sulpLb8LNUKSBHar1Jgj/M1fstI4M/VTU9gFwyQTt1N3eM821hUEK5MTFsTyLYHYciEtQ/J3UqT49OmoRFKOM+UmDY">-->
                    <form action="{{route('operacion.login')}}" class="mbr-form form-with-styler" data-form-title="Mobirise Form" method="POST">
                    <!--<input type="hidden" name="email" data-form-email="true" value="WAE5oIqQqUTO9u3C0BNyt0BTecEUfOvR/Av0Y0sulpLb8LNUKSBHar1Jgj/M1fstI4M/VTU9gFwyQTt1N3eM821hUEK5MTFsTyLYHYciEtQ/J3UqT49OmoRFKOM+UmDY">--> 
                        @if($error!="")
                            <div class="alert alert-danger col-12 text-center">{{$error}}</div>
                        @endif    
                    <div class="dragArea row row-sm-offset">
                        <div class="col-md-12  form-group" data-for="usuario">
                            <label for="usuario" class="form-control-label mbr-fonts-style display-7">Usuario </label>
                            <input type="email" name="usuario" data-form-field="usuario" required="required" class="form-control display-7" id="usuario">
                        </div>
                        <div class="col-md-12  form-group" data-for="clave">
                            <label for="clave" class="form-control-label mbr-fonts-style display-7">Contraseña</label>
                            <input type="password" name="clave" data-form-field="clave" required="required" class="form-control display-7" id="clave">
                        </div>
                        <div class="col-md-15 input-group-btn align-center">
                            <button type="submit" class="btn btn-primary btn-form display-4">Iniciar Sesión
                            </button>
                            <a class="btn btn-md btn-white-outline display-4" href="{{route('cliente.registro')}}">Registrarse</a>
                        </div>
                    </div>
                </form><!---Formbuilder Form--->
            </div>
        </div>
    </div>
    
</section>
@endsection 

@section('footer')
  @include('plantillas.footer')
@endsection