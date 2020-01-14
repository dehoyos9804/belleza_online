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
		<div class="col-lg-12 col-md-12">
			<div class="form-container">
				<div class="media-container-column" data-form-type="formoid">
					<form action="{{route('empleado.serviciostore', ['id'=>$id])}}" method="POST" class="mbr-form form-with-styler" enctype="multipart/form-data">
                              <input type="hidden" name="evaluar" id="evaluar" value="0">
							<div class="media-container-row">
								<div class="card  col-12 col-md-12">
                					<div class="card-box align-center">
                    					<h3 class="card-title mbr-fonts-style display-2">ESCOGE LOS SERVICIOS QUE OFRECERAS
                    					</h3>
                    					<br>
                    					<div class="col-md-12">
                    						<div class="row">
                    							<div class="col-md-3 form-group " data-for="numerocedula">
                    								<div class="col-md-12 form-group">
                    									<h5 class="card-title mbr-fonts-style display-7">UÑAS</h5>
                    								</div>
                    								@foreach($servicio1 as $ser1)
                    									<div class="col-md-12 form-group">
                    										<label style="color: #fff;">
                    											<input type="checkbox" name="serviciosu[]" id="serviciosu[]" value="{{$ser1->idservicio}}" class="icheckbox">
                    											{{$ser1->nombreservicio}}
                    										</label>
                    									</div>
                    								@endforeach
                              					</div>
                              					<div class="col-md-3 form-group " data-for="numerocedula">
                              						<div class="col-md-12 form-group">
                    									<h5 class="card-title mbr-fonts-style display-7">PEINADOS</h5>
                    								</div>
                    								@foreach($servicio2 as $ser2)
                    									<div class="col-md-12 form-group">
                    										<label style="color: #fff;">
                    											<input type="checkbox" name="serviciop[]" id="serviciop[]" value="{{$ser2->idservicio}}" class="icheckbox">
                    											{{$ser2->nombreservicio}}
                    										</label>
                    									</div>
                    								@endforeach
                              					</div>
                              					<div class="col-md-3 form-group " data-for="numerocedula">
                              						<div class="col-md-12 form-group">
                    									<h5 class="card-title mbr-fonts-style display-7">MAQUILLAJES</h5>
                    								</div>
                    								@foreach($servicio3 as $ser3)
                    									<div class="col-md-12 form-group">
                    										<label style="color: #fff;">
                    											<input type="checkbox" name="serviciom[]" id="serviciom[]" value="{{$ser3->idservicio}}" class="icheckbox">
                    											{{$ser3->nombreservicio}}
                    										</label>
                    									</div>
                    								@endforeach
                              					</div>
                              					<div class="col-md-3 form-group " data-for="numerocedula">
                              						<div class="col-md-12 form-group">
                    									<h5 class="card-title mbr-fonts-style display-7">MASAJES</h5>
                    								</div>
                    								@foreach($servicio4 as $ser4)
                    									<div class="col-md-12 form-group">
                    										<label style="color: #fff;">
                    											<input type="checkbox" name="servicioms[]" id="servicioms[]" value="{{$ser4->idservicio}}" class="icheckbox">
                    											{{$ser4->nombreservicio}}
                    										</label>
                    									</div>
                    								@endforeach
                              					</div>
                    						</div>
                    					</div>

                    					<div class="mbr-section-btn text-center">
                    						<button type="submit" class="btn btn-white-outline display-4">Guardar y Finalizar</button>
                    					</div>
                					</div>
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
  
@endpush

@section('footer')
  @include('plantillas.footer')
@endsection