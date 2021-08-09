<body>
<div id="app">
    <div id="sidebar" class="active">
        <div class="sidebar-wrapper active">
            <div class="sidebar-header">
                <div class="d-flex justify-content-between">
                    <div class="logo">
                        <a href="{{route('admin.dashboard')}}"><img src="{{asset('front/')}}/assets/img/logo/backlogo.png" style="height: 50px" alt="Logo" srcset=""></a>
                    </div>
                    <div class="toggler">
                        <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                    </div>
                </div>
            </div>
            <div class="sidebar-menu">
                <ul class="menu">
                    <li class="sidebar-title" style="color:blue">Menü</li>
                    <li class="sidebar-item @if(Request::segment(2)=='panel') active @endif ">
                        <a href="{{route('admin.dashboard')}}" class='sidebar-link'>
                            <i class="bi bi-grid-fill"></i>
                            <span>Panel</span>
                        </a>
                    </li>
                    <li class="sidebar-item @if(Request::segment(2)=='urunler') active @endif has-sub">
                        <a href="#" class='sidebar-link'>
                            <i class="bi bi-stack"></i>
                            <span>Ürünler</span>
                        </a>
                        <ul class="submenu @if(Request::segment(2)=='urunler') active @endif">
                            <li class="submenu-item @if(Request::segment(2)=='urunler' and !Request::segment(2)=='create') active @endif ">
                                <a href="{{route('admin.urunler.index')}}">Tüm Ürünler</a>
                            </li>
                            <li class="submenu-item @if(Request::segment(2)=='urunler' and Request::segment(3)=='create') active @endif ">
                                <a href="{{route('admin.urunler.create')}}">Ürün Ekle</a>
                            </li>
                        </ul>
                    </li>

                    <li class="sidebar-item @if(Request::segment(2)=='kategoriler') active @endif ">
                        <a href="{{route('admin.kategoriler.index')}}" class='sidebar-link'>
                            <i class="bi bi-collection-fill"></i>
                            <span>Kategoriler</span>
                        </a>
                    </li>
                    <li class="sidebar-item @if(Request::segment(2)=='referanslar') active @endif">
                        <a href="{{route('admin.referanslar.index')}}" class='sidebar-link'>
                            <i class="bi bi-pen-fill"></i>
                            <span>Referanslar</span>
                        </a>
                    </li>
                    <li class="sidebar-title" style="color:blue">Site İşlemleri</li>
                    <li class="sidebar-item @if(Request::segment(2)=='config') active @endif  has-sub">
                        <a href="" class='sidebar-link'>
                            <i class="bi bi-grid-1x2-fill"></i>
                            <span>Site Ayarları</span>
                        </a>
                        <ul class="submenu @if(Request::segment(2)=='config') active @endif ">
                            <li class="submenu-item @if(Request::segment(3)=='banner') active @endif">
                                <a href="{{route('admin.config.banner.index')}}">Banner</a>
                            </li>
                            <li class="submenu-item @if(Request::segment(3)=='about') active @endif ">
                                <a href="{{route('admin.config.about.index')}}">Hakkımızda</a>
                            </li>
                            <li class="submenu-item @if(Request::segment(3)=='contact') active @endif ">
                                <a href="{{route('admin.config.contact.index')}}">İletişim Bilgileri</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-title" style="color:blue">Kullanıcı İşlemleri</li>
                    <!--<li class="sidebar-item  ">
                        <a href="form-layout.html" class='sidebar-link'>
                            <i class="bi bi-file-earmark-medical-fill"></i>
                            <span>Kullanıcı Bilgileri</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class='sidebar-link'>
                            <i class="bi bi-hexagon-fill"></i>
                            <span>Şifre Değiştir</span>
                        </a>
                    </li>-->
                    <li class="sidebar-item  ">
                        <a href="{{route('admin.logout')}}" class='sidebar-link'>
                            <i class="bi bi-file-earmark-medical-fill"></i>
                            <span>Çıkış Yap</span>
                        </a>
                    </li>
                </ul>
            </div>
            <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
        </div>
    </div>
