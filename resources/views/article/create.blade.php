@extends('layouts.app')

@section('content')
<div class="container w-50" style="background-color: rgba(243, 241, 239, 1); min-height: 100vh; padding:30px 70px 30px 70px;">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="background-color: #f5d7b5;">{{ __('Create a New Article') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ url('articles') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="title" class="col-md-12 col-form-label"><b>{{ __('Title :') }}</b></label>

                            <div class="col-md-12">
                                <input id="title" type="text" class="form-control @error('name') is-invalid @enderror" name="title" value="{{ old('title') }}" placeholder="Enter Title" required autocomplete="title" autofocus>

                                @error('title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="category_id" class="col-md-12 col-form-label"><b>{{ __('Category :') }}</b></label>
                            <div class="col-md-12">
                                <select id="category_id" class="custom-select" name="category_id">
                                    @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>

                                @error('category_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputImage">Image</label>
                             <div class="custom-file">
                                <input type="file" class="form-control{{ $errors->has('image') ? ' border-danger' : '' }}" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" name="image">
                                <label class="custom-file-label" for="inputGroupFile04">Choose Image</label>
                            </div>
                            <small class="form-text text-danger">{!! $errors->first('image') !!}</small>
                        </div>

                        <div class="form-group row">
                            <label for="description" class="col-md-12 col-form-label"><b>{{ __('Story :') }}</b></label>

                            <div class="col-md-12">
                                <textarea id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" placeholder="" rows="8" required autocomplete="description" autofocus></textarea>

                                @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary">Create</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection