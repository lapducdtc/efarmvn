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
            <div class="container">
                <div class="row header-center">
                    <div class="col-lg-4 logo ">
                        <a href="{{route('index')}}"><img src="{{asset('public/img/logo.png')}}"></a>
                        
                    </div>
                    <div class="col-lg-8 ads text-center">
                        <img src="{{asset('public/img/header_card.jpg')}}">
                    </div>
                </div>
            </div>
        </div>
        <!--bottom header-->
        <div class="bottom-header">
            <nav class="navbar navbar-expand-lg navbar-dark  bg-nav">
                <div class="container">
                    <a class="navbar-brand d-block d-lg-none logo"  href="#">
                        <img src="{{asset('public/img/logo.png')}}">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarsExample07">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="{{route('index')}}">Home</a>
                            </li>
                            @foreach($type_book as $type)
                            @if($type->keywork != 1)
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('typebook',$type->type_slug)}}">{{$type->name}}</a>
                            </li>
                            @endif
                            @endforeach
                        </ul>
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
    
    <!--Top news-->
    <div class="search">
        <div class="container">
            <form class="form-group text-center" method="post" action="{{route('search')}}">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-lg-2">
                    </div>
                    <div class="col-lg-6">
                        <input type="text" class="form-control" name="keywork" placeholder="Nhập từ khóa tìm kiếm">
                    </div>
                    <div class="col-lg-2 ">
                        <button type="submit" class="btn btn-primary form-control">Tìm Kiếm</button>
                    </div>
                    <div class="col-lg-2">
                        
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!--End top news-->
    
    @yield('content')
    
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
                                    <a href="http://efarmnews.efarmvn.com"><img src="http://efarmnews.efarmvn.com/public/img/logo.png" width="203" height="50" alt=""></a>
                                </div>
                                <div class="footer-tittle">
                                    <div class="footer-pera">
                                        <p>Efarmbook là sổ tay nông nghiệp điện tử. Nằm trong hệ sinh thái nông nghiệp efarmvn với sứ mệnh đưa đến cho bạn kiến thức nông nghiệp chuẩn nhất, thực tế nhất và hiện đại nhất.</p>
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
                    <div class="col-xl-3 col-lg-3 col-md-4  coadddddsssl-sm-6">
                        <div class="single-footer-caption mt-60">
                            <div class="footer-tittle">
                                <h4>Đăng ký</h4>
                                <p>Đăng ký để nhận thông tin mới nhất từ efarmvn</p>
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