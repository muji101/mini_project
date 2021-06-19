@extends('layout.app')

@section('title', 'Categories')

@section('active3', 'active')

@section('button', 'Create')

@section('main_title', 'Categories Page')
{{-- @section('link', '/categories/create') --}}
@section('content')
{{-- <a href="/categories/create" class="btn btn-primary my-2">Add</a> --}}

    <div class="row" id="table-hover-row">
        <div class="col-12">
            <div class="card">
                @if (session('sukses-store'))
                        <div class="alert alert-success">{{ session('sukses-store') }}</div>
                    @endif
                <div class="card-header">
                    <h4 class="card-title">List Categories</h4>
                </div>
                <div class="card-content">
                    <!-- table hover -->
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead>
                                <tr>
                                    <th>NO</th>
                                    <th>NAME</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($categories as $data)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td class="text-bold-500">{{ $data->name }}</td>
                                        <td>
                                            <a href="{{ route('category.edit', $data->id) }}" class="btn btn-warning btn-small">edit</a>
                                            <form class="d-inline-block" action="{{ route('category.delete', $data->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-small">delete</button>
                                            </form>
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
    