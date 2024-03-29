@extends('layouts.navbarStudent')

@section('contentMain')
  <main id="replace" class="mdl-layout__content mdl-color--grey-100">
        <div class="mdl-grid demo-content">

            <div class="card demo-cards mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet mdl-grid mdl-grid--no-spacing">
              <img src="{{asset('img/home.jpg')}}" alt="Avatar" style="width:100%" >
              <div class="container">
                <h4><b>CHECK NEXT CLASS</b></h4>
                <p>All modules require <strong>70%</strong> attendance.</p>
              </div>
                <div class="mdl-card__actions mdl-card--border">
                <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="{{route('schedule')}}">
                  Go to schedule
                </a>
              </div>
            </div>

            <div class="card demo-cards mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet mdl-grid mdl-grid--no-spacing">
              <img src="{{asset('img/notification.png')}}" alt="Avatar" style="width:100%" >
              <div class="container">
                <h4><b>CHECK NOTIFICATIONS</b></h4>
                <p>Stay updated. Please check notifications regularly.</p>
              </div>
                <div class="mdl-card__actions mdl-card--border">
                <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="{{route('notification')}}">
                  Go To Notifications
                </a>
              </div>
            </div>


        </div>
      </main>

    @endsection
