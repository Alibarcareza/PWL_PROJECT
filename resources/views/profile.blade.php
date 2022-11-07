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
              <div class="card mt-3 mx-auto" style="width: 500px">
                <div class="card-body">
                    <ul class="list-group-flush">
                        <li class="list-group-item"><b>Nama: </b></li>
                        <li class="list-group-item">{{ auth()->user()->name }}</li>
                        <li class="list-group-item"><b>Email: </b></li>
                        <li class="list-group-item">{{ auth()->user()->email }}</li>
                        <li class="list-group-item"><b>No. HP: </b></li>
                        <li class="list-group-item">{{ auth()->user()->notelp }}</li>
                        <li class="list-group-item"><b>Alamat: </b></li>
                        <li class="list-group-item">{{ auth()->user()->alamat }}</li>
                    </ul>
                    <a style="width: 100px; margin-left: 180px;" class="btn btn-warning mb-3" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                </div>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                      @csrf
                  </form>
              </div>
        </div>
    </div>
</div>
@endsection
