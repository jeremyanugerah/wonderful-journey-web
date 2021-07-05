@extends('layouts.app')

@section('content')
<div class="container w-50" style="background-color: rgba(243, 241, 239, 1); min-height: 100vh; padding:30px 70px 30px 70px;">
    <div class="row justify-content-center">
        <div class="col-md-12 justify-content-center">
            <div class="card border-0 shadow-sm" style="width: 100%;">
                <div class="card-header" style="background-color: #f5d7b5;">{{ __('User List') }}</div>

                <div class="card-body" style="width: 100%%;">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>{{ __('Name') }}</th>
                                <th>{{ __('Email') }}</th>
                                <th>{{ __('Action') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($users as $user)
                                @if($user->role == 'user')
                                <tr>
                                    <td style="vertical-align:middle;width: 33%;">
                                    <a class = "nav-link p-0" style="color: orange">{{ $user->name }}</a>
                                    </td>
                                    <td style="vertical-align:middle;width: 33%;">
                                    <a class = "nav-link p-0">{{ $user->email }}</a>
                                    </td>

                                    <td style="vertical-align:middle;width: 50%;">
                                    <form method="POST" action="{{ url('users/'.$user->id) }}">
                                        @csrf
                                        @method('delete')
                                        <input class="btn btn-outline-danger" type="submit" value="Delete">
                                    </form>
                                </td>
                                </tr>
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection