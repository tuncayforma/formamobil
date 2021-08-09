<body>
<!--? Preloader Start
<div id="preloader-active">
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
            <div class="preloader-circle"></div>
            <div class="preloader-img pere-text">
                <img src="{{asset('front/')}}/assets/img/logo/logo.png" alt="">
            </div>
        </div>
    </div>
</div>
 Preloader Start -->
<style>
    @media screen and (min-width:900px) {
        #logosize
        {width:100%;}
    }
    /*.float{
        position:fixed;
        width:60px;
        height:60px;
        bottom:80px;
        right:27px;
        background-color:#25d366;
        color:#FFF;
        border-radius:50px;
        text-align:center;
        font-size:30px;
        box-shadow: 2px 2px 3px #999;
        z-index:100;
    }

    .my-float{
        margin-top:16px;
    }*/

</style>
<header>
    <!-- Header Start -->
    <div class="header-area">
        <div class="main-header header-sticky">
            <div class="container-fluid">
                <div class="menu-wrapper">
                    <!-- Logo -->
                    <div class="logo">
                        <a href="{{route('homepage')}}"><img id="logosize" src="{{asset('front/')}}/assets/img/logo/logo.png" alt="" width="50%"></a>
                    </div>
                    <!-- Main-menu -->
                    <div class="main-menu d-none d-lg-block">
                        <nav>
                            <ul id="navigation">
                                <li><a href="{{route('homepage')}}">Anasayfa</a></li>
                                <li><a href="">Kategoriler</a>
                                    <ul class="submenu">
                                        @foreach($categories as $category)
                                        <li><a href="{{route('category',$category->slug)}}">{{$category->name}}</a></li>
                                        @endforeach
                                        <li><a href="{{route('categoryall')}}">Tüm Ürünler</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{route('reference')}}">Referanslar</a></li>
                                <li><a href="{{route('about')}}">Hakkımızda</a></li>
                                <li><a href="{{route('contact')}}">İletişim</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- Mobile Menu -->
                <div class="col-12">
                    <div class="mobile_menu d-block d-lg-none"></div>
                    <div id="sabit"><a href="https://wa.me/{{$config_site->phone_number_whatsapp}}?text=%C4%B0yi+g%C3%BCnler+kolay+gelsin."><img height="64px" width="64px" src="https://anilsenyurt.com.tr/wp-content/uploads/2015/02/WAlogo1.png" alt="" border="0" /></a></div>
                    <div class="trwpwhatsappall">
                        <div class="trwpwhatsappballon">
                            <span id="kapatac" class="kapat">X</span>
                            <div class="trwpwhatsapptitle">
                                WhatsApp destek ekibimiz sorularınızı cevaplıyor.
                            </div>
                            <div class="trwpwhatsappmessage">
                                Merhaba, nasıl yardımcı olabilirim?
                            </div>
                            <div class="trwpwhatsappinput">
                                <form action="https://web.whatsapp.com/send?" method="get" target="_blank">
                                    <input type="text" name="phone" value="{{$config_site->phone_number_whatsapp}}" hidden>
                                    <input type="text" name="text" placeholder="Buradan cevap verebilirsiniz." autocomplete="off">
                                    <button class="trwpwhatsappsendbutton" type="submit">
                                        <i class="fa fa-paper-plane-o"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div id="ackapa" class="trwpwhatsappbutton">
                            <i class="fa fa-whatsapp"></i> <span>WhasApp Destek Hattı</span>
                        </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
</header>

