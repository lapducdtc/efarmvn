<!DOCTYPE html>
<html lang="vi">
<head>
    @yield('meta')
    
    <!--favicon icon-->
    <link href="{{asset('public/img/favicon.ico')}}" rel="shortcut icon" type="image/x-icon" />
    <link href="{{asset('public/img/favicon.ico')}}" rel="apple-touch-icon" />
    <link href="{{asset('public/img/favicon.ico')}}" rel="apple-touch-icon-precomposed" />

    <!--Bootstrap 4.5 css-->
    <link href="{{asset('public/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('public/css/bootstrap-grid.css')}}" rel="stylesheet">
    <link href="{{asset('public/css/bootstrap-reboot.css')}}" rel="stylesheet">
    <link href="{{asset('public/css/fontawesome-all.min.css')}}" rel="stylesheet">
    <!--End Bootstrap 4.5 css-->

    <!--Style css-->
    <link href="{{asset('public/css/style.css')}}" rel="stylesheet">
    <!--End Style css-->
    <script data-ad-client="ca-pub-2738622793482635" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <meta property="fb:pages" content="1362146710547007" />
    <meta property="fb:pages" content="266692076998561" />
</head>
<body>
    <!--Begin header-->
    <header>
        <!--top header-->
        <div class="top-header d-none d-lg-block ">
            <div class="container">
                <div class="row">
                    <div class="col-6 top-header-left text-left">
                        <a href="http://efarmvn.com" rel="nofollow"><i class="fas fa-arrow-alt-circle-left"></i> Quay lại Efarmvn</a>
                    </div>
                    <div class="col-6 top-header-right" >
                        <a href="" rel="nofollow"><i class="fab fa-facebook-f"> </i> </a>
                        <a href="" rel="nofollow"><i class="fab fa-google-plus-g"> </i> </a>
                        <a href="" rel="nofollow"><i class="fab fa-twitter"> </i> </a>
                        <a href=""><i class="fab fa-youtube"> </i></a>
                        <span>|</span>
                        Hotline: 0346.449.533
                    </div>
                </div>
            </div>
        </div>
        <!--header-->
        <div class="header d-none d-lg-block">
            <div class="container  ">
                <div class="row header-center">
                    <div class="col-lg-4 logo ">
                        <a href="{{route('Index')}}"><img src="{{asset('public/img/logo.png')}}"></a>
                    </div>
                    <div class="col-lg-8 ads text-center">
                        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                        <!-- my ads1 -->
                        <ins class="adsbygoogle"
                             style="display:inline-block;width:728px;height:90px"
                             data-ad-client="ca-pub-2738622793482635"
                             data-ad-slot="3135858104"></ins>
                        <script>
                             (adsbygoogle = window.adsbygoogle || []).push({});
                        </script>
                    </div>
                </div>
            </div>
        </div>
        <!--bottom header-->
        <div class="bottom-header">
            <nav class="navbar navbar-expand-lg navbar-dark  bg-nav">
                <div class="container">
                    <a class="navbar-brand d-block d-lg-none logo"  href="#">
                        <img src="{{asset('public/img/logo2.png')}}">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarsExample07">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="{{route('Index')}}">Trang Chủ</a>
                            </li>
                            @foreach($danhmuc as $dm)
                            <li class="nav-item active">
                                <a class="nav-link" href="{{route('danhmuc',$dm->type_slug)}}">{{$dm->name}}</a>
                            </li>
                            @endforeach
                        </ul>
                        <form class="form-inline my-2 my-md-0" method="post" action="{{route('search')}}">
                            {{ csrf_field() }}
                            <input class="form-control" type="text" placeholder="Tìm kiếm" name="search" aria-label="Search">
                            <button class="form-control Search" type="submit"><i class="fas fa-search"></i></button>
                        </form>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!--End header-->
    
    <!--Begin content-->
    <main>
    <!--Trending title-->
    <div class="trending">
        <div class="container">
            <div class="row">
                <div class="col-sm-2 trending-tittle">
                    <strong>Liên hệ QC</strong>
                </div>
                <div class="col-sm-10 trending-content">
                    <marquee>Sở hữu một hệ sinh thái với 1.000.000 thành viên hãy để chúng tôi là kênh truyền thông hiệu quả của bạn. Liên hệ ngay: Lienhe@efarmvn.com hoặc hotline: 0346.449.533</marquee>
                </div>
            </div>
        </div>
    </div>
    <!--End Trending-->
    @yield('content')
    <!--Begin QC-->
    <div class="adsgoogle d-none d-lg-block">
        <div class="container text-center">
            <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
            <!-- my ads1 -->
            <ins class="adsbygoogle"
                 style="display:inline-block;width:728px;height:90px"
                 data-ad-client="ca-pub-2738622793482635"
                 data-ad-slot="3135858104"></ins>
            <script>
                 (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
            <hr>
        </div>
    </div>
    <!--End QC-->
    <!--Begin footer-->
    <footer>
        <div class="partner">
            <div class="container">
                <hr>
                <div class="row partner-img">
                    <div class="col-lg-3"><img src="{{asset('public/img/efarmvn.png')}}"></div>
                    <div class="col-lg-3"><img src="{{asset('public/img/efarmbook.png')}}"></div>
                    <div class="col-lg-3"><img src="{{asset('public/img/efarmjob.png')}}"></div>
                    <div class="col-lg-3"><img src="{{asset('public/img/efarmmarket.png')}}"></div>
                </div>
                <hr>
            </div>
        </div>
        <div class="footer">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-5 col-lg-5 col-md-7 col-sm-12">
                        <div class="single-footer-caption">
                            <div class="single-footer-caption">
                                <!-- logo -->
                                <div class="footer-logo">
                                    <a href="{{route('Index')}}"><img src="{{asset('public/img/logo.png')}}" width="203" height="50" alt=""></a>
                                </div>
                                <div class="footer-tittle">
                                    <div class="footer-pera">
                                        <p>Efarmnews là trang tin tức nông nghiệp 24h. Nằm trong hệ sinh thái nông nghiệp efarmvn với sứ mệnh đưa đến cho bạn những thông tin nông nghiệp mới nhất nhanh nhất, luôn cập nhật 24h.</p>
                                    </div>
                                </div>
                                <!-- social -->
                                <div class="footer-social">
                                    <a href="" rel="nofollow"><i class="fab fa-facebook-f"> </i> </a>
                                    <a href="" rel="nofollow"><i class="fab fa-google-plus-g"> </i> </a>
                                    <a href="" rel="nofollow"><i class="fab fa-twitter"> </i> </a>
                                    <a href=""><i class="fab fa-youtube"> </i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4  col-sm-6">
                        <div class="single-footer-caption mt-60">
                            <div class="footer-tittle">
                                <h4>Đăng ký</h4>
                                <p>Đăng ký để nhận thông tin mới nhất từ efarmnews</p>
                                <!-- Form -->
                                <form action="{{route('regemail')}}" method="post" class="input-group">
                                    {{ csrf_field() }}
                                    <input type="text" class="form-control" name="email">
                                    <button class="btn btn-default" type="submit">Gửi!</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-5 col-sm-6">
                        <div class="single-footer-caption mb-50 mt-60">
                            <div class="instagram-gellay">
                                <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FEfarmvn%2F&amp;tabs=timeline&amp;width=340&amp;height=256&amp;small_header=false&amp;adapt_container_width=true&amp;hide_cover=false&amp;show_facepile=true&amp;appId=1482191455392648" width="340" height="256" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom-area">
           <div class="container">
               <div class="footer-border">
                    <div class="row d-flex align-items-center justify-content-between">
                        <div class="col-lg-12">
                            <div class="footer-copy-right">
                                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                      Copyright ©<script>document.write(new Date().getFullYear());</script>2020 Được quản lý và phát triển bởi Công ty giải pháp nông nghiệp công nghệ cao Efarmvn <i class="ti-heart" aria-hidden="true"></i> Thiết kế bởi  <a href="#" target="_blank">DTC WEB</a>
                                      <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                            </div>
                        </div>
                        
                    </div>
               </div>
           </div>
       </div>
    </footer>
    <!--End footer-->

    <!--Begin bootstrap js-->
    <script type="text/javascript" src="{{asset('public/js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/js/bootstrap.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/js/bootstrap.bundle.js')}}"></script>
    <!--end bootstrap js-->
</body>
</html>