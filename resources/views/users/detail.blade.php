@extends('layout.app')

@section('title', 'User | Detail')

@section('active2', 'active')

@section('main_title', 'User Detail')

@section('content')
<div class="card">
    <div class="card-content">
        <img src="/profile/{{ $data->image }}" class="card-img-top img-fluid" style="width: 400px"
            alt="singleminded">
        <div class="card-body">
            <h5 class="card-title">{{ $data->name }}</h5>
            <p class="card-text">
                {{ $data->email }}
            </p>
        </div>
    </div>
    <div class="m-3 fw-bold">list Articles</div>
    <ul class="list-group list-group-flush">
            @foreach ($data->article as $item)
                <li class="list-group-item">{{ $item->title }}</li>
            @endforeach
    </ul>
</div>
@endsection
