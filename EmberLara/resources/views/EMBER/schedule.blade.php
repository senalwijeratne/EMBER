@extends('layouts.scheduleLayout')

@section('contentMain')

<div class="container" style="text-align:center;">
  <div class="col-md-8">
      <div class="panel panel-default card">
				<br/>
        <div class="panel-heading"><strong>ADD NEW EVENT</strong></div>
				<br/>
        <div class="panel-body">

					<form role="form" method="POST" action="/schedule/createLecture" style="text-align:center">
						{{ csrf_field() }}

						<div class="form-group mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
							<label class="mdl-textfield__label" for="moduleID">Module ID</label>
							<input type="text" class="mdl-textfield__input" id="moduleID" name="moduleID">
						</div>
						
						<div class="form-group mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
							<label class="mdl-textfield__label" for="buildingAreaID">buildingAreaID</label>
							<input type="text" class="mdl-textfield__input" id="buildingAreaID" name="buildingAreaID">
						</div>

						<div class="form-group mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
							<label class="mdl-textfield__label" for="moduleName">Module Name</label>
							<input type="text" class="mdl-textfield__input" id="moduleName" name="moduleName">
						</div>

						<div class="form-group mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
							<label class="mdl-textfield__label" for="batchID">Batch ID</label>
							<input type="text" class="mdl-textfield__input" id="batchID" name="batchID">
						</div>

						<div class="form-group mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
							<label class="mdl-textfield__label" for="week">Week</label>
							<input type="text" class="mdl-textfield__input" id="week" name="week">
						</div>

						<div class="form-group mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
							<label class="mdl-textfield__label" for="lecturerUserID">Lecturer User ID</label>
							<input type="text" class="mdl-textfield__input" id="lecturerUserID" name="lecturerUserID">
						</div>

						<div class="form-group mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
							<label class="mdl-textfield__label" for="lectureHallName">Lecture Hall Name</label>
							<input type="text" class="mdl-textfield__input" id="lectureHallName" name="lectureHallName">
						</div>

						<div class="form-group mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
							<label class="mdl-textfield__label" for="start_date">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Start Date</label>
							<input type="date" class="mdl-textfield__input" id="start_date" name="start_date">
						</div>

						<div class="form-group mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
							<label class="mdl-textfield__label" for="end_date">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp End Date</label>
							<input type="date" class="mdl-textfield__input" id="end_date" name="end_date">
						</div>

						<div class="form-group">
						  <label for="batchID">Select list:</label>
						  <select class="form-control" id="sel1">
						    <!-- <option value='1'>PLYBatch4</option> -->
				    		{{  App\Batch::returnBatches()  }}
						  </select>
						</div>

						<div class="form-group">
							<button type="submit" class="btn mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" >Submit</button>
						</div>
					</form>

				</div>
				<br/>
			</div>
			<br/>
	</div>
</div>

<div class="container" style="text-align:center;">
  <div class="col-md-8">
    <div class="panel panel-default card">
			<div id='calendar'></div>
		</div>
	</div>
</div>

@endsection
