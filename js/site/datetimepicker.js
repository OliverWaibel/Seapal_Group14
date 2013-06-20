/**
 * @author A
 */

$.timepicker.regional['de'] = {
	timeOnlyTitle: 'Uhrzeit auswählen',
	timeText: 'Zeit',
	hourText: 'Stunde',
	minuteText: 'Minute',
	secondText: 'Sekunde',
	currentText: 'Jetzt',
	closeText: 'Auswählen',
	ampm: false
	};
$.timepicker.setDefaults($.timepicker.regional['de']);

$(function() {
    $( "#datetime" ).datetimepicker();
  });