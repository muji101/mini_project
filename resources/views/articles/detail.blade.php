@extends('layout.app')

@section('title', 'Articles | Detail')

@section('active2', 'active')

@section('main_title', 'Articles Detail')

@section('content')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    {{-- <h3>Vertical Layout with Navbar</h3> --}}
                    <h6 class="card-title fw-bold">{{ $data->category->name }}</h6>
                    <p class="text-subtitle text-muted">By. {{ $data->user->name }}</p>
                    <p class="text-subtitle text-muted">Post On : {{ $data->created_at }}</p>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">{{ $data->title }}</h4>
                </div>
                <div class="card-body">
                    <div><img src="/profile/{{ $data->image }}" alt="gambar" style="width: 450px"></div>
                    {{ $data->content }}
                </div>
            </div>
        </section>
    </div>
@endsection
