@extends('layout.app')

@section('title', 'Users')

@section('active4', 'active')

@section('button', 'Create')

@section('main_title', 'Users Page')
{{-- @section('link', '/users/create') --}}

@section('content')
{{-- <a href="/users/create" class="btn btn-primary my-2">Add</a> --}}
    <div class="row" id="table-hover-row">
        <div class="col-12">
            <div class="card">
                
                @if (session('sukses-store'))
                    <div class="alert alert-success">{{ session('sukses-store') }}</div>
                @endif
                
                <div class="card-header">
                    <h4 class="card-title">List Users</h4>
                </div>
                <div class="card-content">
                    <!-- table hover -->
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead>
                                <tr>
                                    <th>NO</th>
                                    <th>NAME</th>
                                    <th>EMAIL</th>
                                    <th>ARTICLES</th>
                                    <th>IMAGE</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($users as $data)
                                    <tr>
                                        <td class="text-bold-500">{{ $no++ }}</td>
                                        <td class="text-bold-500">{{ $data->name }}</td>
                                        <td class="text-bold-500">{{ $data->email }}</td>
                                        <td class="text-bold-500">{{ $data->article->count() }}</td>
                                        {{-- <td class="text-bold-500"><img src="{{ asset('profile/'. $data->image) }}" alt="" style="width: 60px"></td>
                                        <td> --}}
                                            {{-- memanggil gambar di public --}}
                                        <td class="text-bold-500"><img src="/profile/{{  $data->image }}" alt="image profile" style="width: 60px; height: 60px;"></td>
                                        <td>
                                            @if (Auth::user()->roles == 'admin')
                                                <a href="{{ route('user.edit', $data->id) }}" class=""><i class="bi bi-pencil-fill text-warning"></i></a>
                                                <a href="{{ route('user.detail', $data->id) }}" class=""><i class="bi bi-eye-fill mx-3"></i></a>
                                                <form class="d-inline-block" action="{{ route('user.delete', $data->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-small"><i class="bi bi-trash-fill text-white"></i></button>
                                                </form>
                                            @elseif(Auth::user()->roles == 'superuser')
                                                <a href="{{ route('user.edit', $data->id) }}" class=""><i class="bi bi-pencil-fill text-warning"></i></a>
                                                <a href="{{ route('user.detail', $data->id) }}" class=""><i class="bi bi-eye-fill mx-3"></i></a>
                                            @else
                                                <i class="bi bi-trash-fill text-danger"></i>
                                            @endif
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
    