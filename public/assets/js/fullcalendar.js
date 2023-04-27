 $(function() {
 	// "use strict";
  var appointment_list = $('#appointment_list').val();
  console.log(jQuery.parseJSON(appointment_list));
 	$('#calendar2').fullCalendar({
 		header: {
 			left: 'prev,next today',
 			center: 'title',
 			right: 'month,agendaWeek,agendaDay,listMonth'
 		},
 		defaultDate: new Date().toLocaleDateString(),
 		navLinks: true, // can click day/week names to navigate views
 		businessHours: true, // display business hours
 		editable: true,
 		events:jQuery.parseJSON(appointment_list),
 	});

});
