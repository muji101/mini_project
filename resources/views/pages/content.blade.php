@extends('pages.layout.app')

@section('content')
    <div class="col-12 d-flex my-5">
        {{-- article left --}}
        <div class="col-10 d-flex">
            <div class="d-flex flex-column align-items-center">
                <p >Share</p>
                <span class="border px-3 py-2 my-2">
                    <i class="bi bi-facebook"></i>
                </span>
                <span class="border px-3 py-2 my-2">
                    <i class="bi bi-twitter"></i>
                </span>
                <span class="border px-3 py-2 my-2">
                    <i class="bi bi-youtube"></i>
                </span>
            </div>
            <div class="col-9 d-flex flex-column ms-5">
                <p>{{ $data->content }}</p>   
            </div>
        </div>
        
        {{-- sticky right --}}
        <div class="col-2 card position-sticky top-0" style="width: 18rem; height: 30rem;">
            <img src="https://preview.colorlib.com/theme/content/images/xslider_2.jpg.pagespeed.ic.MeMJUfLHS1.webp" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Subscribe to Newsletter</h5>
                <p class="card-text">Far far away behind the word mountains far from.</p>
                <input type="text" placeholder="Enter email">
                <button class="btn my-3" style="background: rgb(238, 173, 53); padding: 4px 34%">Subscribe</button>
            </div>
        </div>
    </div>


    {{-- Food and Drink --}}
    <div class="fs-4 my-5 position-relative d-flex justify-content-center">
        <div class="rounded-bottom" style="width: 190px; height:6px ; background: rgb(238, 173, 53); "></div>
        <div class="position-absolute" style="bottom: -10px">Related Articles</div>
    </div>

    <div class="col-12 d-flex">
        @foreach ($data2 as $dt)
            <div class="card bg-transparent me-3" style="width: 20rem;">
                <a class="" href="{{ route('article.content', $dt->id) }}">
                    <img src="/profile/{{ $dt->image }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p>{{ $dt->category->name }}</p>
                        <h5 class="card-title">{{ $dt->title }}</h5>
                        <p>{{ $dt->created_at }}</p>
                        <p class="card-text"> 
                            {{-- // membatasi kata dalam artikel --}}
                            {{ str_word_count($dt->content) > 5 ? substr($dt->content, 0, 50) . ' ...' : $dt->content }}
                        </p>
                    </div>
                </a>
            </div>
        @endforeach
    </div>

@endsection