@extends('plantillas.plantilla-2')
@section('titulo','Proyecto| Servicio Belleza Online')

@section('menu')
  @include('plantillas.menu')
@endsection

@section('contenido')
<section class="header15 cid-roMp1ODkR9 mbr-fullscreen mbr-parallax-background" id="header15-u">

    <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(7, 59, 76);"></div>
    <input type="hidden" name="evaluar" id="evaluar" value="0">

    <div class="container align-right">
        <div class="row">
            <div class="mbr-white col-lg-6 col-md-7 content-container">
                <h1 class="mbr-section-title mbr-bold pb-3 mbr-fonts-style display-1">
                    Registrarse Como Estilista
                </h1>
                <p class="mbr-text pb-3 mbr-fonts-style display-5">
                    Si desea prestar servicios de belleza, este es tu portal web. 
                    llena el formulario y empieza a disfrutar...
                </p>
            </div>
            <div class="col-lg-6 col-md-5">
                <div class="form-container">
                    <div class="media-container-column" data-form-type="formoid">
                        <form action="{{route('empleado.store')}}" method="POST" class="mbr-form form-with-styler" enctype="multipart/form-data">
                         <input type="hidden" name="email" data-form-email="true" value="pQkpURwBPMeQ/7FH7mgwHYuEqXFHaA+sD27CGFFhrR/04lOjm7nrN8l/9WPZDx1+twujEI0ptYe8yyYoECba4UG9c+2GzwoWG3kc3HeTzXXuHimS5+lt4PrKaKLfLDuA">

                            <div class="row">
                                <div hidden="hidden" data-form-alert="" class="alert alert-success col-12">Thanks for filling out the form!</div>
                                <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">
                                </div>
                            </div>

                            <div class="dragArea row">

                              <div class="col-md-12 form-group" data-for="name">
                                <div class="cid-roMVNmtAJ1 text-center">
                                  <div class="user_image" id="imagenPreview" name="imagenPreview">
                                    <img src='{{url("/admin-lte")}}/joli/assets/images/users/no-image.jpg'>
                                  </div>
                                  <input type="file" name="file_elegir" id="file_elegir" class="col-md-4" value='{{url("/admin-lte")}}/joli/assets/images/users/no-image.jpg'>
                                </div>
                              </div>

                              <div class="col-md-12 form-group " data-for="numerocedula">
                                  <input type="number" name="numerocedula" placeholder="Número de cedula" data-form-field="Name" required="required" class="form-control px-3 display-7" id="numerocedula">
                              </div>

                              <div class="col-md-6 form-group " data-for="nombres">
                                <input type="text" name="nombres" placeholder="Nombres" data-form-field="Name" required="required" class="form-control px-3 display-7" id="nombres">
                              </div>

                              <div data-for="apellidos" class="col-md-6 form-group ">
                                  <input type="text" name="apellidos" placeholder="Apellidos" data-form-field="Name" required="required" class="form-control px-3 display-7" id="apellidos">
                              </div>

                              <div data-for="telefono" class="col-md-6 form-group ">
                                  <input type="tel" name="telefono" placeholder="Teléfono" data-form-field="Phone" required="required" class="form-control px-3 display-7" id="telefono">
                              </div>

                              <div data-for="direccion" class="col-md-6 form-group ">
                                  <input type="text" name="direccion" placeholder="Dirección" data-form-field="Name" required="required" class="form-control px-3 display-7" id="direccion">
                              </div>

                              <div data-for="email" class="col-md-6 form-group ">
                                  <input type="email" name="email" placeholder="Email" data-form-field="Email" required="required" class="form-control px-3 display-7" id="email">
                              </div>

                              <div data-for="clave" class="col-md-6 form-group ">
                                  <input type="password" name="clave" placeholder="Contraseña" data-form-field="Name" required="required" class="form-control px-3 display-7" id="clave">
                              </div>

                              <div class="col-md-12 input-group-btn align-right">
                                <button type="submit" class="btn btn-primary btn-form display-4">Registrar
                                </button>
                              </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection 
@push('scripts')
  <script type="text/javascript">
    (function(){
      function filePreview(input){
        if (input.files && input.files[0]) {
          var reader = new FileReader();

          reader.onload = function(e){
            $('#imagenPreview').html("<img src='"+e.target.result+"' />");
          }

          reader.readAsDataURL(input.files[0]);
        }
      }

      $("#file_elegir").change(function(){
        filePreview(this);
      });
    })();
  </script>
@endpush


@section('footer')
  @include('plantillas.footer')
@endsection