<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    @yield('style')
</head>
<body>
    <div id="app">
        <div class="p-5 mb-2 text-light" style="background-color: #B85750;">
            <h1 class="text-center">{{ __('Wonderful Journey') }}</h1>
            <h5 class="text-center">{{ __('Blog of Indonesia Tourism') }}</h5>
        </div>
        {{-- Yield navbar --}}
        @include('layouts.navbar')
        <main class>
            {{-- Display any success message--}}
            @isset($message_success)
            <div class="container">
                <div class="alert alert-success" role="alert">
                    {!! $message_success !!}
                </div>
            </div>
            @endisset

            {{-- Display any warning message--}}
            @isset($message_warning)
                <div class="container">
                    <div class="alert alert-warning" role="alert">
                        {!! $message_warning !!}
                    </div>
                </div>
            @endisset

            {{-- Display any error message --}}
            @if($errors->any())
                <div class="container">
                    <div class="alert alert-danger" role="alert">
                        <ul class="mb-0">
                            @foreach($errors->all() as $error)
                                <li>{!! $error !!}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endif

            {{-- Yield content --}}
            @yield('content')
        </main>
    </div>
</body>
</html>
