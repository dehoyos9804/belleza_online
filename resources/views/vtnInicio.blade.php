@extends('plantillas.plantilla')
@section('titulo','Proyecto| Servicio Belleza Online')

@section('menu')
  @include('plantillas.menu')
@endsection

@section('contenido')
<section class="engine"><a href="https://mobirise.info/u">bootstrap responsive templates</a></section><section class="cid-rkssGozamv mbr-fullscreen mbr-parallax-background" id="header2-7">

    <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(35, 35, 35);"></div>

    <div class="container align-center">
        <div class="row justify-content-md-center">
            <div class="mbr-white col-md-10">
                <h1 class="mbr-section-title mbr-bold pb-3 mbr-fonts-style display-1">SERVICIO DE BELLEZA A DOMICILIO</h1>
                
                <p class="mbr-text pb-3 mbr-fonts-style display-5">Tu equipo de profesionales en belleza donde quieras, cuando quieras&nbsp;</p>
                <div class="mbr-section-btn"><a class="btn btn-md btn-primary display-4" href="{{route('iniciar_sesion.create')}}">Iniciar Sesión</a>
                <a class="btn btn-md btn-white-outline display-4" href="{{route('elegir_tipo_cliente.create')}}">Registrarse</a></div>
            </div>
        </div>
    </div>
    <div class="mbr-arrow hidden-sm-down" aria-hidden="true">
        <a href="#next">
            <i class="mbri-down mbr-iconfont"></i>
        </a>
    </div>
</section>

<section class="counters1 counters cid-rksInel2h6 mbr-parallax-background" id="counters1-h">

    <div class="mbr-overlay" style="opacity: 0.9; background-color: rgb(178, 204, 210);">
    </div>

    <div class="container">
        <h2 class="mbr-section-title pb-3 align-center mbr-fonts-style display-1"><p>&nbsp; &nbsp; AGENDA YA TU SERVICIO<br></p></h2>
        

        <div class="container pt-4 mt-2">
            <div class="media-container-row">
                <div class="card p-3 align-center col-12 col-md-6 col-lg-3">
                    <div class="panel-item">
                        <div class="">
                            <!--<span class="mbr-iconfont mbrib-touch-swipe"></span>-->
                            <img src='{{url("/admin-lte")}}/assets/images/icono-unias-blue.png'>
                        </div>

                        <div class="card-text">
                            <!--<h3 class="count pt-3 pb-3 mbr-fonts-style display-2">
                                  100
                            </h3>-->
                            <h4 class="mbr-content-title mbr-bold mbr-fonts-style display-5">UÑAS&nbsp;</h4>
                            <p class="mbr-content-text mbr-fonts-style display-7">Multiples opciones de acuerdo a tu gusto y tendencias&nbsp;</p>
                        </div>
                    </div>
                </div>


                <div class="card p-3 align-center col-12 col-md-6 col-lg-3">
                    <div class="panel-item">
                        <div class="">
                            <img src='{{url("/admin-lte")}}/assets/images/icono-peinado-blue.png'>
                        </div>
                        <div class="card-text">
                            <!--<h3 class="count pt-3 pb-3 mbr-fonts-style display-2">
                                  200
                            </h3>-->
                            <h4 class="mbr-content-title mbr-bold mbr-fonts-style display-5">PEINADOS</h4>
                            <p class="mbr-content-text mbr-fonts-style display-7">Tu mejor accesorio como mas te gusta, en manos expertas</p>
                        </div>
                    </div>
                </div>

                <div class="card p-3 align-center col-12 col-md-6 col-lg-3">
                    <div class="panel-item">
                        <div class="">
                           <img src='{{url("/admin-lte")}}/assets/images/icono-maquillaje-blue.png'>
                        </div>
                        <div class="card-text">
                            <!--<h3 class="count pt-3 pb-3 mbr-fonts-style display-2">
                                  300
                            </h3>-->
                            <h4 class="mbr-content-title mbr-bold mbr-fonts-style display-5">MAQUILLAJE</h4>
                            <p class="mbr-content-text mbr-fonts-style display-7">Mirada impactante y natural con looks unicos &nbsp; &nbsp; &nbsp;&nbsp;</p>
                        </div>
                    </div>
                </div>


                <div class="card p-3 align-center col-12 col-md-6 col-lg-3">
                    <div class="panel-item">
                        <div class="">
                            <img src='{{url("/admin-lte")}}/assets/images/icono-masaje-blue.png'>
                        </div>

                        <div class="card-texts">
                            <!--<h3 class="count pt-3 pb-3 mbr-fonts-style display-2">
                                  400
                            </h3>-->
                            <h4 class="mbr-content-title mbr-bold mbr-fonts-style display-5">MASAJE</h4>
                            <p class="mbr-content-text mbr-fonts-style display-7">Masaje relajación, thailandes o reflexología, escoge el que mas te guste</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </div>
</section>

<section class="testimonials2 cid-rksMs252jn" id="testimonials2-j">
    <div class="container">
        <div class="media-container-row">
            <div class="mbr-figure pr-lg-5" style="width: 130%;">
              <img src='{{url("/admin-lte")}}/assets/images/belleza-1162x774.jpg' alt="" title="">
            </div>
            <div class="media-content px-3 align-self-center mbr-white py-2">
                    <p class="mbr-text testimonial-text mbr-fonts-style display-7">Estamos comprometidos con nuestro país por lo que promovemos una plataforma de belleza con sentido social. En ese sentido, Buscamos acercar a las mujeres que tengan conocimiento de belleza personal a una oportunidad laboral que beneficie su futuro y el de su familia.</p>
                    <p class="mbr-author-name pt-4 mb-2 mbr-fonts-style display-7">Service</p>
                    <p class="mbr-author-desc mbr-fonts-style display-7">Colombia</p>
            </div>
        </div>
    </div>
</section>

<section class="step2 cid-rksP1zv9vC" id="step2-l">
    
    <div class="container">
        <h2 class="mbr-section-title pb-3 mbr-fonts-style align-center display-2">
            CÓMO FUNCIONA</h2>
        
        <div class="step-container row justify-content-center">
            <div class="card col-12 pb-4 col-md-4 separline">
                <div class="step-element">
                    <div class="step-wrapper pb-3">
                        <h3 class="step d-flex align-items-center justify-content-center m-auto">
                            1
                        </h3>
                    </div>          
                    <div class="step-text-content align-center">
                        <h4 class="mbr-step-title pb-3 mbr-fonts-style display-5">Elige Y Agenda</h4>
                        <p class="mbr-step-text mbr-fonts-style display-7">Elige el servicio que más te guste, selecciona el método de pago que prefieres y agenda tu cita. Recuerda ingresar el día, la hora, la dirección y todos tus datos en el agendamiento</p>
                    </div>
                </div>
            </div>

            <div class="card col-12 separline pb-4 col-md-4">
                <div class="step-element">
                    <div class="step-wrapper pb-3">
                        <h3 class="step d-flex align-items-center justify-content-center m-auto">
                            2
                        </h3>
                    </div>          
                    <div class="step-text-content align-center">
                        <h4 class="mbr-step-title pb-3 mbr-fonts-style display-5">¡Ya Esta!</h4>
                        <p class="mbr-step-text mbr-fonts-style display-7">Recibiras un mail de confirmación con los datos de tu reserva y 2 horas previas a la cita te enviaremos un email de recordatorio&nbsp;</p>
                    </div>
                </div>
            </div>

            <div class="card col-md-4 col-12 separline pb-4">
                <div class="step-element">
                    <div class="step-wrapper pb-3">
                        <h3 class="step d-flex align-items-center justify-content-center m-auto">
                            3
                        </h3>
                    </div>          
                    <div class="step-text-content align-center">
                        <h4 class="mbr-step-title pb-3 mbr-fonts-style display-5">Vive La Experiencia</h4>
                        <p class="mbr-step-text mbr-fonts-style display-7">El día de tu cita, los profesionales llegarán al destino que elegiste puntualmente. ¡Ahora disfruta tu experiencia!</p>
                    </div>
                </div>
            </div>

            <div class="card col-12 separline last-child col-md-6">
                <div class="step-element">
                    <div class="step-wrapper pb-3">
                        <h3 class="step d-flex align-items-center justify-content-center m-auto">
                            4
                        </h3>
                    </div>          
                    <div class="step-text-content align-center">
                        <h4 class="mbr-step-title pb-3 mbr-fonts-style display-5">Califica Tú Experiencia</h4>
                        <p class="mbr-step-text mbr-fonts-style display-7">Para nosotros es muy importante darte siempre el mejor servicio, con tu calificación nos ayudas a mejorar</p>
                    </div>
                </div>
            </div>            
            
        </div>
    </div>
</section>
@endsection 

@section('footer')
  @include('plantillas.footer')
@endsection