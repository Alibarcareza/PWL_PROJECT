@extends('layout.main')

@section('title', 'Profile')

@section('content')
<div class="container">
    <div class="main-body">
          <div class="row gutters-sm mt-5">
            <h2 class="mt-5"></h2>
            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
            @endif
              <div class="card mt-3">
                  <a class="btn btn-warning" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                      {{ __('Logout') }}
                  </a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                      @csrf
                  </form>
              </div>
        </div>
    </div>
</div>
@endsection
