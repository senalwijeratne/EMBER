
@extends('layouts.navbar')

@section('contentMain')   
 

<main class="mdl-layout__content mdl-color--grey-100">
        
<div class="mdl-grid demo-content">

    <div class="card demo-cards mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet mdl-grid mdl-grid--no-spacing">
        <div class="mdl-card__actions mdl-card--border">
            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
              <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
              <span class="mdl-radio__label">First</span>
            </label>
            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-2">
              <input type="radio" id="option-2" class="mdl-radio__button" name="options" value="2">
              <span class="mdl-radio__label">Second</span>
            </label>
        </div>
    </div>


</div>
<button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored">
  <i class="material-icons">add</i>
</button>

</main>

    @endsection