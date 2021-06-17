@extends('layout.app')

@section('title', 'Category | Create')

@section('active3', 'active')

@section('main_title', 'Category Create')

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
                <h4 class="card-title">Creating a new category</h4>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <form class="form form-vertical" action="{{ route('category.store') }}" method="POST">
                        @csrf
                        @method('POST')
                        <div class="form-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group has-icon-left">
                                        <label for="first-name-icon">Name</label>
                                        <div class="position-relative">
                                            <input type="text" class="form-control"
                                                placeholder="Name"
                                                id="first-name-icon" name="name" value="{{ old('name') }}">
                                            <div class="form-control-icon">
                                                <i class="bi bi-person"></i>
                                            </div>
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