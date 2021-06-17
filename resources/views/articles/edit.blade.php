@extends('layout.app')

@section('title', 'Articles | Edit')

@section('active2', 'active')

@section('main_title', 'Articles Edit')

@section('content')
    {{-- menampilkan pesan error di create --}}
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="col-md-12 col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Editing a new article</h4>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <form class="form form-vertical" action="{{ route('article.update', $articles->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group has-icon-left">
                                        <label for="first-name-icon">Title</label>
                                        <div class="position-relative">
                                            <input type="text" class="form-control"
                                                placeholder="Title"
                                                id="first-name-icon" name="title" value="{{ old('title', $articles->title) }}">
                                            <div class="form-control-icon">
                                                <i class="bi bi-person"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">

                                    <div class="form-group has-icon-left">
                                        <label for="email-id-icon">Content</label>
                                        <div class="position-relative">
                                            <textarea type="text" class="form-control"
                                                placeholder="Content" id="email-id-icon" name="content">{{ old('content', $articles->content) }}</textarea>
                                            <div class="form-control-icon">
                                                <i class="bi bi-envelope"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group ">
                                        <label for="mobile-id-icon">Image</label>
                                        <div class="position-relative">
                                            <input type="file" class="form-control"
                                                placeholder="image" id="image-id-icon" name="image_file"  value="{{ old('image', $articles->image) }}">
                                            {{-- <div class="form-control-icon">
                                                <i class="bi bi-image"></i>
                                            </div> --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group has-icon-left">
                                        <div class="form-group">
                                            <label for="mobile-id-icon">Category</label>
                                            <select class="choices form-select" name="category">
                                                @foreach ($categories as $item)
                                                <option value="{{ $item->id }}" {{ $item->id == $articles->category_id ? "selected" : ""}}>{{ $item->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group has-icon-left">
                                        <div class="form-group">
                                            <label for="mobile-id-icon">User</label>
                                            <select class="choices form-select" name="user">
                                                @foreach ($users as $item)
                                                    <option value="{{ $item->id }}" {{ $item->id == $articles->user_id ? "selected" : ""}}>{{ $item->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="col-12">
                                    <div class='form-check'>
                                        <div class="checkbox mt-2">
                                            <input type="checkbox" id="remember-me-v"
                                                class='form-check-input' checked>
                                            <label for="remember-me-v">Remember Me</label>
                                        </div>
                                    </div>
                                </div> --}}
                                <div class="col-12 d-flex justify-content-end">
                                    <button type="submit"
                                        class="btn btn-primary me-1 mb-1">Submit</button>
                                    <button type="reset"
                                        class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
