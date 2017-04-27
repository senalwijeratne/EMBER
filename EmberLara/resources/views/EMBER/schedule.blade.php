<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8' />
<link rel='stylesheet' href="{{asset('css/lib/cupertino/jquery-ui.min.css')}}" />
<link href="{{asset('css/fullcalendar.min.css ')}}" rel='stylesheet' />
<link href="{{asset('css/fullcalendar.print.min.css')}}" rel='stylesheet' media='print' />
<script src="{{asset('js/lib/moment.min.js')}}"></script>
<script src="{{asset('js/lib/jquery.min.js')}}"></script>
<script src="{{asset('js/fullcalendar.min.js')}}"></script>
<script>

	$(document).ready(function() {

		$('#calendar').fullCalendar({
			theme: true,
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,agendaWeek,agendaDay,listMonth'
			},
			defaultDate: new Date(), //EDIT#1 : Returns the current date now.
			navLinks: true, // can click day/week names to navigate views
			editable: true,
			eventLimit: true, // allow "more" link when too many events
			events: [
				{
					title: 'All Day Event',
					start: '2017-04-01'
				},
				{
					title: 'Long Event',
					start: '2017-04-07',
					end: '2017-04-10'	
				},
				{
					id: 999,
					title: 'Repeating Event',
					start: '2017-04-09T16:00:00'
				},
				{
					id: 999,
					title: 'Repeating Event',
					start: '2017-04-16T16:00:00'
				},
				{
					title: 'Conference',
					start: '2017-04-11',
					end: '2017-04-13'
				},
				{
					title: 'Meeting',
					start: '2017-04-12T10:30:00',
					end: '2017-04-12T12:30:00'
				},
				{
					title: 'Lunch',
					start: '2017-04-12T12:00:00'
				},
				{
					title: 'Meeting',
					start: '2017-04-12T14:30:00'
				},
				{
					title: 'Happy Hour',
					start: '2017-04-12T17:30:00'
				},
				{
					title: 'Dinner',
					start: '2017-04-12T20:00:00'
				},
				{
					title: 'Birthday Party',
					start: '2017-04-13T07:00:00'
				},
				{
					title: 'Click for Google',
					url: 'http://google.com/',
					start: '2017-04-28'
				}
			]
		});
		
	});

</script>
<style>

	body {
		margin: 40px 10px;
		padding: 0;
		font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
		font-size: 14px;
	}

	#calendar {
		max-width: 900px;
		margin: 0 auto;
	}

</style>
</head>
<body>
<div>
	<form role="form" method="POST" action="/schedule/createLecture">
		{{ csrf_field() }}
       
        <div class="form-group">
        	<label for="moduleID">moduleID</label>
        	<input type="text" class="form-control" id="moduleID" name="moduleID">
        </div>

        <div class="form-group">
        	<label for="batchID">batchID</label>
        	<input type="text" class="form-control" id="batchID" name="batchID">
        </div>

        <div class="form-group">
        	<label for="week">week</label>
        	<input type="text" class="form-control" id="week" name="week">
        </div>

        <div class="form-group">
        	<label for="lecturerUserID">lecturerUserID</label>
        	<input type="text" class="form-control" id="lecturerUserID" name="lecturerUserID">
        </div>

        <div class="form-group">
        	<label for="buildingAreaID">buildingAreaID</label>
        	<input type="text" class="form-control" id="buildingAreaID" name="buildingAreaID">
        </div>

        <div class="form-group">
        	<label for="start_date">start_date</label>
        	<input type="date" class="form-control" id="start_date" name="start_date">
        </div>

        <div class="form-group">
        	<label for="end_date">end_date</label>
        	<input type="date" class="form-control" id="end_date" name="end_date">
        </div>

        <div class="form-group">
        	<button type="submit" class="btn btn-primary" >Submit</button>
        </div>
	</form>
</div>

<div id='calendar'></div>

	
</body>
</html>
