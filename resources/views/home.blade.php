@extends('layouts.app')
@section('content')    

<div class="big-container" style="background-color: #f5d7b5; padding: 40px; min-height: 100vh;">
        <div class="container rounded" style="background-color: none; padding: 40px; min-height: 100px;">
            @foreach ($articles as $article)
                {{-- Conditional for making a row in every fourth iteration --}}
                
                @if (($loop->iteration -1) % 3 == 0)
                    <div class="row justify-content-start pb-4">
                @endif
                    <div class="col-4" style="padding: 10;">
                        <div class="card text-center shadow-sm border-0" style="border-radius: 0; width: 100%; padding: 20px; min-height: 55vh;">

                            {{-- Display the image of the Product Type, if theres is no image, display the default image ('no image') --}}
                            <a href="/articles/{{ $article->id }}">
                                <img src="{{ asset('storage/images/'.$article->image) }}" onerror="this.onerror=null;this.src='/storage/images/noimage.png';" class="card-img-top" style="width: 300px; height: 200px"alt="...">
                            </a>
                            <div class="card-body">
                                <a class="nav-link p-0" style="color: brown" href="/articles/{{ $article->id }}"><h5 class="card-title">{{ $article->title }}</h5></a>
                                <h6 class="card-subtitle pb-2"><a class="nav-link p-0" href="/article/filtered/{{ $article->category->id}}" style="color: red"> {{ $article->category->name }} </a></h6>
                                <h7 class="card-title pt-3" style="color: orange">{{ $article->user->name }}</h7>
                                <p class="card-text">{{ \Illuminate\Support\Str::limit($article->description, 100, $end='') }}</p>
                                <h6 class="card-subtitle padding-0"><a href="/articles/{{ $article->id }}">{{ __('Read full story') }}</a></h6>

                                @auth
                                        @if(Auth::user()->role == 'admin')
                                            <form class="" style="display: inline-block;" action="/articles/{{ $article->id }}" method="post">
                                            @csrf
                                            @method("DELETE")
                                            <input class="btn btn-outline-danger mt-3" type="submit" value="Delete">
                                            </form>
                                        @endif
                                @endauth
                            </div>
                        </div>
                    </div>
                    
                {{-- Close the row if it is the end of the row iteration--}}
                @if ($loop->index != 0 and $loop->iteration % 3 == 0)
                    </div>
                @endif    
            @endforeach
        </div>
    </div>
     
@endsection