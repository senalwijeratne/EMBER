@extends('layouts.navbarLecSchedule')

@section('contentMain')

<!-- <div>
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
</div> -->


           <div id='calendar'></div>

  @endsection
