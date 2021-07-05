@extends('layouts.app')

@section('content')
    <div class="container rounded" style="background-color: none; padding: 20px; min-height: 100px;">
        <div class="alert alert-warning" role="alert">
            {{ __('Welcome,') }} {{ Auth::user()->name }}
        </div>
    </div>
@endsection