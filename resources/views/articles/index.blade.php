@extends('layout.app')

@section('title', 'Articles')


@section('main_title', 'Articles Page')

@section('button', 'Create')
{{-- @section('link', '/articles/create') --}}

@section('content')
{{-- <a href="/articles/create" class="btn btn-primary my-2">Add</a> --}}

    <div class="row" id="table-hover-row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">List Articles</h4>
                </div>
                <div class="card-content">
                    <!-- table hover -->
                    @if (session('sukses-store'))
                        <div class="alert alert-success">{{ session('sukses-store') }}</div>
                    @endif
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead>
                                <tr>
                                    <th>NO</th>
                                    <th>TITLE</th>
                                    <th>CONTENT</th>
                                    <th>IMAGE</th>
                                    <th>USER</th>
                                    <th>CATEGORY</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($data as $item)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td class="text-bold-500">{{ $item->title }}</td>
                                        <td>{!! str_word_count($item->content) > 5 ? substr($item->content, 0, 50) . ' ...' : $item->content !!}</td>
                                        <td class="text-bold-500"><img src="/profile/{{ $item->image }}" alt="gambar" style="width: 60px"></td>
                                        {{-- <td class="text-bold-500"><a href="{{ store('app/public/'. $item->gambar) }}"></a></td> --}}
                                        <td class="text-bold-500">{{ $item->user->name }}</td>
                                        <td class="text-bold-500">{{ $item->category->name }}</td>
                                        <td>
                                            <a href="{{ route('article.edit', $item->id) }}" class="btn btn-warning btn-small">edit</a>
                                            <a href="{{ route('article.detail', $item->id) }}" class="btn btn-success btn-small">detail</a>
                                            <form class="d-inline-block" action="{{ route('article.delete', $item->id) }}" method="POST">
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
    