<div class="fs-4 my-5 position-relative">
    <div class="rounded-bottom" style="width: 206px; height:6px ; background: rgb(238, 173, 53); "></div>
    <div class="position-absolute" style="bottom: -10px">Today's Highlight</div>
</div>
<div class="col-12 d-flex mb-5">
    {{-- article left --}}
    <div class="col-10 d-flex flex-column">
        <div class="col-10 d-flex justify-content-between">
            @foreach ($data1 as $dt)
                <div class="card bg-transparent" style="width: 25rem;">
                    <img src="/profile/{{ $dt->image }}" class="card-img-top" alt="...">
                    <div class="card-body\">
                        <p>{{ $dt->category->name }}</p>
                        <h5 class="card-title">{{ $dt->title }}</h5>
                        <p>{{ $dt->created_at }}</p>
                        <p class="card-text">{{ $dt->content }}</p>
                    </div>
                </div>
            @endforeach
        </div>
        {{--  --}}
        <div class="col-10 d-flex flex-column">
            @foreach ($data2 as $dt)
                <div class="card bg-transparent mb-3" style="max-width: 740px;">
                    <div class="row g-0">
                    <div class="col-md-4">
                        <img style="width: 220px"src="/profile/{{ $dt->image }}" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <p>{{ $dt->category->name }}</p>
                            <h5 class="card-title">{{ $dt->title }}</h5>
                            <p> {{ $dt->created_at }} </p>
                            <p class="card-text">{{ $dt->content }}</p>
                        </div>
                    </div>
                    </div>
                </div>
            @endforeach
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



<div class="col-12 d-flex my-5">
    {{-- Lifestyle --}}
    <div class="d-flex flex-column">
        <div class="fs-4 my-5 position-relative">
            <div class="rounded-bottom" style="width: 106px; height:6px ; background: rgb(238, 173, 53); "></div>
            <div class="position-absolute" style="bottom: -10px">Lifestyle</div>
        </div>
        <div class="d-flex flex-column me-1">
            @foreach ($data2 as $dt)
                <div class="card bg-transparent mb-3" style="max-width: 750px;">
                    <div class="row g-0">
                    <div class="col-md-4">
                        <img style="width: 220px"src="/profile/{{ $dt->image }}" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <p>{{ $dt->category->name }}</p>
                            <h5 class="card-title">{{ $dt->title }}</h5>
                            <p>{{ $dt->created_at }}</p>
                            <p class="card-text">{{ $dt->content }}</p>
                        </div>
                    </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    
    {{-- Travel --}}
    <div class="d-flex flex-column">
        <div class="fs-4 my-5 position-relative">
            <div class="rounded-bottom" style="width: 76px; height:6px ; background: rgb(238, 173, 53); "></div>
            <div class="position-absolute" style="bottom: -10px">Travel</div>
        </div>
        <div class="d-flex flex-column me-1">
            @foreach ($data2 as $dt)
                <div class="card bg-transparent mb-3" style="max-width: 750px;">
                    <div class="row g-0">
                    <div class="col-md-4">
                        <img style="width: 220px"src="/profile/{{ $dt->image }}" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <p>{{ $dt->category->name }}</p>
                            <h5 class="card-title">{{ $dt->title }}</h5>
                            <p>{{ $dt->created_at }}</p>
                            <p class="card-text">{{ $dt->content }}</p>
                        </div>
                    </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
{{-- Food and Drink --}}
<div class="fs-4 my-5 position-relative d-flex justify-content-center">
    <div class="rounded-bottom" style="width: 190px; height:6px ; background: rgb(238, 173, 53); "></div>
    <div class="position-absolute" style="bottom: -10px">Food and Drink</div>
</div>

<div class="col-12 d-flex">
    @foreach ($data3 as $dt)
        <div class="card bg-transparent me-3" style="width: 20rem;">
            <img src="/profile/{{ $dt->image }}" class="card-img-top" alt="...">
            <div class="card-body">
                <p>{{ $dt->category->name }}</p>
                <h5 class="card-title">{{ $dt->title }}</h5>
                <p>{{ $dt->created_at }}</p>
                <p class="card-text">{{ $dt->content }}</p>
            </div>
        </div>
    @endforeach
</div>

{{-- Footer --}}
<hr>

<div class="d-flex flex-column">
    <div class="fs-4 d-flex justify-content-center my-3">
        <i class="mx-4 bi bi-facebook"></i>
        <i class="mx-4 bi bi-twitter"></i>
        <i class="mx-4 bi bi-instagram"></i>
        <i class="mx-4 bi bi-youtube"></i>
    </div>
    <div class="fs-6 d-flex justify-content-center my-3">
        <p>Copyright ©2021 All rights reserved | @bang_kuwat</p>
    </div>
</div>

