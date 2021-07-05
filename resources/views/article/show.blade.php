@extends('layouts.app')

@section('content') 
<div class="big-container" style="background-color: #f5d7b5; padding-top: 80px; min-height:100vh;">
        <div class="container rounded" style="background-color: white; padding: 40px; min-height: 30vh;">
            
            <div class="row justify-content-start">
                <div class="col-6 text-center"  style="padding: 0;">
                    <img src="{{ asset('storage/images/'.$article->image) }}" onerror="this.onerror=null;this.src='/storage/images/noimage.png';" class="card-img-top border" alt="..." style="width: 100%; height: 400px" >
                </div>
                <div class="col-6"  style="padding-left: 30px; padding-top: 20px;">
                    <h2 class="card-title" style="color: brown" >{{ $article->title }}</h2>
                    <h6 class="card-subtitle pb-4">{{ $article->category->name }}</h6>
                    <h7 class="card-title pt-3" style="color: orange">{{ $article->user->name }}</h7>
                    <p class="card-text">{{ $article->description}}</p>
                </div>
            </div>
        </div>
    </div>
@endsection