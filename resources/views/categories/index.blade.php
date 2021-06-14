@extends('layout.app')

@section('title', 'Categories')

@section('active3', 'active')

@section('button', 'Create')

@section('main_title', 'Categories Page')
{{-- @section('link', '/categories/create') --}}
@section('content')
<a href="/categories/create" class="btn btn-primary my-2">Add</a>

    <div class="row" id="table-hover-row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">List Categories</h4>
                </div>
                <div class="card-content">
                    <!-- table hover -->
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead>
                                <tr>
                                    <th>NAME</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $data)
                                    <tr>
                                        <td class="text-bold-500">{{ $data->name }}</td>
                                        <td>
                                            <a href="/categories/edit"><i
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
    