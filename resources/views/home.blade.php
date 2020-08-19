@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-light">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @guest
                      {{ __('In order to display bookings you need to log in.') }}
                      <a href="{{ route('login') }}" class="btn btn-outline-info d-block">Go to Login Page</a>
                     @else
                     {{ __('You are logged in!') }}
                    @endguest


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
