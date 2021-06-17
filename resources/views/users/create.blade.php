@extends('layout.app')

@section('title', 'Users | Create')

@section('active4', 'active')

@section('main_title', 'Users Create')

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
                    <h4 class="card-title">Creating a new user</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form form-vertical" action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('POST')
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group has-icon-left">
                                            <label for="first-name-icon">Full Name</label>
                                            <div class="position-relative">
                                                <input value="{{ old('name') }}" type="text" class="form-control"
                                                    placeholder="Name"
                                                    id="first-name-icon" name="name">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-person"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">

                                        <div class="form-group has-icon-left">
                                            <label for="email-id-icon">Email</label>
                                            <div class="position-relative">
                                                <input value="{{ old('email') }}" type="email" class="form-control"
                                                    placeholder="Email" id="email-id-icon" name="email">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-envelope"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group has-icon-left">
                                            <label for="password-id-icon">Password</label>
                                            <div class="position-relative">
                                                <input value="{{ old('password') }}" type="password" class="form-control"
                                                    placeholder="Password" id="password-id-icon" name="password">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-lock"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group has-icon-left">
                                            <label for="password-id-icon">Retype Password</label>
                                            <div class="position-relative">
                                                {{-- old() menyimpan data yang dulu agar tidak hilang --}}
                                                <input value="{{ old('password_confirmation') }}" type="password" class="form-control"
                                                    placeholder="Retype Password" id="password-id-icon" name="password_confirmation">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-lock"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="mobile-id-icon">Upload your profile image</label>
                                            <div class="position-relative">
                                                <input value="{{ old('image') }}" type="file" class="form-control"
                                                    placeholder="image" id="formFile" name="image_file">
                                                {{-- <div class="form-control-icon">
                                                    <i class="bi bi-image"></i>
                                                </div> --}}
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