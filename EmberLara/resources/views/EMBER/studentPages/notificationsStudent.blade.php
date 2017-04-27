@extends('layouts.navbarStudent')

@section('contentMain')  
<main class="mdl-layout__content mdl-color--grey-100">
<div class="mdl-grid demo-content">
 @foreach($data as $value)
    <div class="card demo-cards mdl-cell mdl-cell--12-col mdl-cell--8-col-tablet mdl-grid mdl-grid--no-spacing"> 
       
        <ul class="demo-list-three mdl-list">

              <li class="mdl-list__item mdl-list__item--three-line">
              
                <span class="mdl-list__item-primary-content">
                  <i class="material-icons mdl-list__item-avatar">person</i>
                  <span>{{$value -> title}}</span>
                  <span class="mdl-list__item-text-body">
                    {{$value -> content}}
                  </span>
                </span>
                <span class="mdl-list__item-secondary-content">
                  <a class="mdl-list__item-secondary-action" href="#"><i class="material-icons">star</i></a>
                </span>

              </li>
           
         </ul>
        
    </div>
    @endforeach
    
   <a href="{{route('insertNotification')}}">
    <button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored" >
  <i class="material-icons">add</i>
  
</button>
</a>


</div>
</main>
    @endsection