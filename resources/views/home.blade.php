@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                    <p></p>
                    <a href="{{ url('motors') }}" class="btn btn-md btn-warning mb-3">Klik Disini</a>
                </div>                
            </div>
        </div>
    </div> 
   
</div>


@endsection
