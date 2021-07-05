@extends('layouts.app')
@section('style')
    <style>
    .pagination > li > a
    {
        background-color: white;
        color: brown;
    }
    .pagination > li > a:focus,
    .pagination > li > a:hover,
    .pagination > li > span:focus,
    .pagination > li > span:hover
    {
        color: brown;
        background-color: #eee;
        border-color: #ddd;
    }

    .pagination > .active > a
    {
        color: white;
        background-color: brown;
        border: solid 1px brown;
    }

    .pagination > .active > a:hover
    {
        background-color: brown;
        border: solid 1px brown;
    }

    .page-item.active .page-link {
        color: #fff;
        background-color: brown;
        border-color: brown;
    }

    </style>
@endsection

@section('content')
<div class="big-container" style="background-color: #f5d7b5; padding: 40px; min-height: 100vh;">
            <div class="container rounded" style="background:rgba(255,255,255, 0.9); padding: 10px; min-height: 30vh;">
            <div class="title-container" style="text-align: center;">
                <h2 class="mb-2 mt-3" style="color: #654321;">Result(s) for {{ $category->name }}</h2>
            </div>
            <div class="search-container mb-3 p-3">
                <form action="" method = "get">
                  <input class="btn btn-sm btn-outline-dark disabled" style="border-color: brown" type="text" placeholder="Search article..." name="search">
                  <input class="btn btn-sm btn-outline-dark" style="border-color: brown" type="submit" value="search">
                </form>
            </div>

            @if (strlen($search) > 0)
                    <h6 class="p-3">Search results for: {{ $search }}</h6>
            @endif

            @if ($articles->count() == 0)
                <h6 class="mb-2 p-3">No result found</h6>
            @else
                @foreach ($articles as $article)
                    @if (($loop->iteration -1) % 3 == 0)
                        <div class="row m-0 justify-content-start">
                    @endif
                        <div class="col-4" style="padding: 10;">
                            <div class="card text-center shadow-sm border-0" style="border-radius: 0; width: 100%; padding: 20px; min-height: 55vh;">

                                {{-- Display the image of the Product Type, if theres is no image, display the default image ('no image') --}}
                                <a href="/articles/{{ $article->id }}">
                                    <img src="{{ asset('storage/images/'.$article->image) }}" onerror="this.onerror=null;this.src='/storage/images/noimage.png';" class="card-img-top" style="width: 300px; height: 200px"alt="...">
                                </a>
                                <div class="card-body">
                                    <a class="nav-link p-0" style="color: brown" href="/articles/{{ $article->id }}"><h5 class="card-title">{{ $article->title }}</h5></a>
                                    <h6 class="card-subtitle pb-2" href="/articles/filtered/{{ $category->id}}">{{ $article->category->name }}</h6>
                                    <h7 class="card-title pt-3" style="color: orange">{{ $article->user->name }}</h7>
                                    <p class="card-text">{{ \Illuminate\Support\Str::limit($article->description, 100, $end='') }}</p>
                                    <h6 class="card-subtitle padding-0"><a href="/articles/{{ $article->id }}">{{ __('Read full story') }}</a></h6>

                                    @auth
                                        @if(Auth::user()->role == 'admin')
                                            <form class="" style="display: inline-block;" action="/article/{{ $article->id }}" method="post">
                                            @csrf
                                            @method("DELETE")
                                            <input class="btn btn-outline-danger" type="submit" value="Delete">
                                            </form>
                                        @endif
                                    @endauth
                                </div>
                            </div>
                        </div>
                    @if ($loop->index != 0 and $loop->iteration % 4 == 0)
                        </div>
                    @endif
                @endforeach
            @endif
        </div>
        <nav aria-label="...">
        <ul class="pagination pagination-lg">
            {{ $articles->withQueryString()->links() }}
        </ul>
</nav>
        <br>
    </div>
@endsection