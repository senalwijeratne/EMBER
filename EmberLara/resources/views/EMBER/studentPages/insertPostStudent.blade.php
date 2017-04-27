@extends('layouts.navbarStudent')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                        <form role="form" method="POST" action="/insert">
        {{ csrf_field() }}
       
        <div class="form-group">
            <label for="title">title</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>

        <div class="form-group">
            <label for="content">content</label>
            <input type="text" class="form-control" id="content" name="content">
        </div>

        
        <div class="form-group">
            <button type="submit" class="btn btn-primary" >Submit</button>
        </div>
        
    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
