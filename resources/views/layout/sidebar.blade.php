@php
    $current_path = '/'.request()->path(); //mengambil nama url 

    
    $dashboard = [
        'title' => 'Dashboard',
        'url' =>'/admin/dashboard',
        'icon' => 'bi bi-grid-fill'

    ];

    $user = [
        'title' => 'Users',
        'url' =>'#',
        'icon' => 'bi bi-person-fill',
        'childrens' => [
            [
            'title' => 'Liset Users',
            'url' => '/admin/users'
            ],
            [
            'title' => 'Create User',
            'url' => '/admin/users/create'
            ],
        ]
    ];

    $article = [
        'title' => 'Articles',
        'url' => '#',
        'icon' => 'bi bi-border-width',
        'childrens' => [
            [
            'title' => 'Liset Articles',
            'url' => '/admin/articles'
            ],
            [
            'title' => 'Create Article',
            'url' => '/admin/articles/create'
            ],
        ]

    ];

    $categories = [
        'title' => 'Categories',
        'url' => '#',
        'icon' => 'bi bi-grid-fill',
        'childrens' => [
            [
            'title' => 'Liset Categories',
            'url' => '/admin/categories'
            ],
            [
            'title' => 'Create Categories',
            'url' => '/admin/categories/create'
            ],
        ]
    ];

    $menus = [$dashboard, $user , $article, $categories];
    
    
@endphp
<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <div class="d-flex justify-content-between">
                <div class="logo">
                    <a href="index.html"><img src="/dist/assets/images/logo/logo.png" alt="Logo" srcset=""></a>
                </div>
                <div class="toggler">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                
                <li class="sidebar-title">Menu</li>

                @foreach ($menus as $menu)
                    {{-- isset() mengecek ada atau nggak suatu data kalau ada true kalo tidak false --}}
                    @if (isset($menu['childrens']))

                        @php

                            // mengambil nama url jika sama menjadi true (url sama url sekarang)
                            $isActive = false;

                            foreach ($menu['childrens'] as $child){
                                if ($child['url'] == $current_path){
                                    $isActive = true;
                                }
                            }
                        @endphp
                        
                        <li class="sidebar-item  has-sub {{ $isActive ? 'active' : '' }}">
                            <a href="{{ $menu['url'] }}" class='sidebar-link'>
                                <i class="{{ $menu['icon'] }}"></i>
                                <span>{{ $menu['title'] }}</span>
                            </a>
                            <ul class="submenu {{ $isActive ? 'active' : '' }}">
                                @foreach ($menu['childrens'] as $item)
                                    <li class="submenu-item ">
                                        <a href="{{ $item['url'] }}">{{ $item['title'] }}</a>
                                    </li>
                                @endforeach
                            </ul>
                            
                        </li>
                    @else
                        {{-- karena dashboard tidak memiliki child jadi langsung ke $current_path --}}
                        <li class="sidebar-item {{ $current_path == $menu['url'] ? 'active' : '' }}">
                            <a href="{{ $menu['url'] }}" class='sidebar-link'>
                                <i class="{{ $menu['icon'] }}"></i>
                                <span>{{ $menu['title'] }}</span>
                            </a>
                        </li>
                    @endif
                @endforeach
                
                

                {{-- <li class="sidebar-item @yield('active2')">
                    <a href="/articles" class='sidebar-link'>
                        <i class="bi bi-stack"></i>
                        <span>Articles</span>
                    </a>
                </li>
                <li class="sidebar-item @yield('active3')">
                    <a href="/categories" class='sidebar-link'>
                        <i class="bi bi-grid-1x2-fill"></i>
                        <span>Categories</span>
                    </a>
                </li>
                <li class="sidebar-item @yield('active4')">
                    <a href="/users" class='sidebar-link'>
                        <i class="bi bi-person-badge-fill"></i>
                        <span>Users</span>
                    </a>
                </li> --}}
            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>