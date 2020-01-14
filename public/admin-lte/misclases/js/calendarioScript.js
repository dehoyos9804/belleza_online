//crear calendario @fullcalendario
$(document).ready(function(){
	//convierto mi div en un calendario
	$('#calendarioWeb').fullCalendar({
		//mdifico la cabecera del calendario
		header:{
			left:'today,prev,next',
			center:'title',
			right:'month,basicWeek,basicDay,agendaWeek,agendaDay'
		}
	});
});