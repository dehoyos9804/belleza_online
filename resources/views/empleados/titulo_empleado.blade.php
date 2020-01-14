@extends('plantillas.plantilla-2')
@section('titulo','Proyecto| Servicio Belleza Online')

@section('menu')
  @include('plantillas.menu')
@endsection

@section('contenido')

<section class="header15 cid-roMp1ODkR9 mbr-fullscreen mbr-parallax-background" id="header15-u">
<input type="hidden" name="evaluar" id="evaluar" value="0">
    <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(7, 59, 76);"></div>

    <div class="container align-right">
        <div class="row">
          <div data-form-alert="" class="alert alert-success col-12 text-center">
            Aun no hemos terminado, sube tú titulo y continua 
          </div>
        </div>
        <div class="row">
            <div class="mbr-white col-lg-6 col-md-7 content-container">
                <h1 class="mbr-section-title mbr-bold pb-3 mbr-fonts-style display-1">
                    Titulo
                </h1>
                <p class="mbr-text pb-3 mbr-fonts-style display-5">
                    Para continuar, sube tú titulo o certificado, dodnde se evidencia que eres un profesional en servicios de belleza y así poder hacer parte de nuestro equipo
                </p>
            </div>
            <div class="col-lg-6 col-md-5">
              <div class="form-container">
                <div class="media-container-column" data-form-type="formoid">
                  <form action="{{route('empleado.titulostore', ['id'=>$id])}}" method="POST" class="mbr-form form-with-styler" enctype="multipart/form-data">
                    <div class="dragArea row">
                      <div class="col-md-12 form-group text-center" data-for="name"> 
                        <div class="user_image" id="imagenPreview" name="imagenPreview">
                          <img src='{{url("/admin-lte")}}/joli/assets/images/users/titulo_default.png'>
                        </div>
                        <br>
                        <input type="file" name="file_elegir" id="file_elegir" class="col-md-4" value='{{url("/admin-lte")}}/joli/assets/images/users/titulo_default.png'>
                      </div> 

                      <div class="col-md-12 input-group-btn align-center">
                        <button type="submit" class="btn btn-md btn-white-outline display-4">Guardar Y Continuar
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