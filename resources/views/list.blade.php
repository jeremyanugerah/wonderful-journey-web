@extends('layouts.app')

@section('content')
<div class="container w-50" style="background-color: rgba(243, 241, 239, 1); min-height: 100vh; padding:30px 70px 30px 70px;">
    <div class="row justify-content-center">
        <div class="col-md-12 justify-content-center">
            <div class="card border-0 shadow-sm" style="width: 100%;">
                <div class="card-header" style="background-color: #f5d7b5;">{{ __('Blog List') }}</div>

                <div class="card-body" style="width: 100%%;">
                    <a class="btn btn-outline-primary mb-3" style="display: inline-block;" href="{{ url('articles/create') }}">Create a new article</a>

                    <table class="table">
                        <thead>
                            <tr>
                                <th>{{ __('Article Title') }}</th>
                                <th>{{ __('Action') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($articles as $article)
                            <tr>
                                <td style="vertical-align:middle;width: 50%;">
                                <a class="nav-link p-0" href="{{ url('articles/'.$article->id) }}" style="color: orange">{{ $article->title }}</a>
                                </td>
                                
                                <td style="vertical-align:middle;width: 50%;">
                                    <form method="POST" action="{{ url('articles/'.$article->id) }}">
                                        @csrf
                                        @method('delete')
                                        <input class="btn btn-outline-danger" type="submit" value="Delete">
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection