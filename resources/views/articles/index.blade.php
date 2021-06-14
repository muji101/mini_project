@extends('layout.app')

@section('title', 'Articles')

@section('active2', 'active')

@section('main_title', 'Articles Page')

@section('button', 'Create')
{{-- @section('link', '/articles/create') --}}

@section('content')
<a href="/articles/create" class="btn btn-primary my-2">Add</a>

    <div class="row" id="table-hover-row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">List Articles</h4>
                </div>
                <div class="card-content">
                    <!-- table hover -->
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead>
                                <tr>
                                    <th>TITLE</th>
                                    <th>CONTENT</th>
                                    <th>IMAGE</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($articles as $data)
                                    <tr>
                                        <td class="text-bold-500">{{ $data->title }}</td>
                                        <td>{{ $data->content }}</td>
                                        <td class="text-bold-500">{{ $data->image }}</td>
                                        <td>
                                            <a href="/articles/edit"><i
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
    