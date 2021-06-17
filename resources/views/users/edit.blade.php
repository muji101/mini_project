@extends('layout.app')

@section('title', 'Users | Create')

@section('active4', 'active')

@section('main_title', 'Users Edit')

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
                    <h4 class="card-title">Editing a user</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form form-vertical" action="{{ route('user.update', $data->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group has-icon-left">
                                            <label for="first-name-icon">Full Name</label>
                                            <div class="position-relative">
                                                <input type="text" class="form-control" name="name" value="{{ old('name',$data->name) }}"
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
                                                <input  type="email" class="form-control" name="email" value="{{ old('email',$data->email) }}"
                                                    placeholder="Email" id="email-id-icon" name="email">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-envelope"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group has-icon-left">
                                            <label for="password-id-icon">Current Password</label>
                                            <div class="position-relative">
                                                <input  type="password" class="form-control"
                                                    placeholder="Password" id="password-id-icon" name="current_password" value="{{ old('current_password',$data->password) }}">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-lock"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group has-icon-left">
                                            <label for="password-id-icon">New Password</label>
                                            <div class="position-relative">
                                                {{-- old() menyimpan data yang dulu agar tidak hilang --}}
                                                <input type="password" class="form-control"
                                                    placeholder="New Password" id="password-id-icon" name="password">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-lock"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group has-icon-left">
                                            <label for="password-id-icon">Retry New Password</label>
                                            <div class="position-relative">
                                                {{-- old() menyimpan data yang dulu agar tidak hilang --}}
                                                <input  type="password" class="form-control"
                                                    placeholder="Retype New Password" id="password-id-icon" name="password_confirmation">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-lock"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="mobile-id-icon">Image</label>
                                            <div class="position-relative">
                                                <input  type="file" class="form-control" name="image_file" value="{{ old('image', $data->image) }}"
                                                    placeholder="image" id="formFile">
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