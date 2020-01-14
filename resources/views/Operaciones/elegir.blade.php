@extends('plantillas.plantilla-2')
@section('titulo','Proyecto| Servicio Belleza Online')

@section('menu')
  @include('plantillas.menu')
@endsection

@section('contenido')
<section class="engine"><a href="https://mobirise.info/u">bootstrap html templates</a></section><section class="features8 cid-roMpmutXBl mbr-parallax-background" id="features8-v">
    <div class="mbr-overlay" style="opacity: 0.3; background-color: rgb(35, 35, 35);">
    </div>
    <div class="container">
        <div class="media-container-row">

            <div class="card  col-12 col-md-6">
                <div class="card-img">
                    <span class="mbr-iconfont mobi-mbri-user-2 mobi-mbri" style="color: rgb(255, 255, 255); fill: rgb(255, 255, 255);"></span>
                </div>
                <div class="card-box align-center">
                    <h4 class="card-title mbr-fonts-style display-7">REGISTRARSE COMO CLIENTE</h4>
                    <p class="mbr-text mbr-fonts-style display-7">
                       Si quieres recibir servicios de belleza sin moverte de casa, entonces registrate ¡aqui!</p>
                    <div class="mbr-section-btn text-center"><a href="{{route('cliente.registro')}}" class="btn btn-white-outline display-4">Registrarse</a></div>
                </div>
            </div>

            <div class="card  col-12 col-md-6">
                <div class="card-img">
                    <span class="mbr-iconfont mobi-mbri-user mobi-mbri"></span>
                </div>
                <div class="card-box align-center">
                    <h4 class="card-title mbr-fonts-style display-7">REGISTRARSE COMO EMPLEADO</h4>
                    <p class="mbr-text mbr-fonts-style display-7">Si quieres ofrecer tus servicios de belleza a personas del común, mostrar todo tu talento y tener una fuente de empleo, entonces registrate ¡aqui!</p>
                    <div class="mbr-section-btn text-center"><a href="{{route('empleado.guardar')}}" class="btn btn-white-outline display-4">Registrarse</a></div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection 

@section('footer')
  @include('plantillas.footer')
@endsection