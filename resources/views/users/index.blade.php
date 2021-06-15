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
                                        <td class="text-bold-500">{{ $data->image }}</td>
                                        <td>
                                            <a href="/users/edit"><i
                                                    class="btn btn-primary">Edit</i>
                                            </a>
                                            <a href="#"><i
                                                    class="btn btn-danger">Delete</i>
                                            </a>
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
    