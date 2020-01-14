@extends('plantillas.plantilla')
@section('titulo','Proyecto| Iniciar Sesion')

@section('menu')
  @include('plantillas.menu')
@endsection

@section('contenido')
<section class="step2 cid-rksP1zv9vC" id="step2-l">
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
</section>
@endsection 

@section('footer')
  @include('plantillas.footer')
@endsection