    @extends('Layout.matter')
    @section('meta')
    <title>Efarmbook - Sổ Tay Nông Nghiệp Việt Nam</title><!--Tiêu đề trang web chứa từ khóa và không quá 70 kí tự-->
    <meta name=”description” content=”Efarmbook - Sổ Tay Nông Nghiệp Việt Nam, tổng hợp kiến thức nông nghiệp mới nhất, hiện đại nhất, giúp nông dân có kiến thức để nông nghiệp Việt Nam ngày càng phát triển.” /> <!--Mô tả trang không quá 160 ký tự-->
    <meta name=”keywords” content=”nông nghiệp, nong nghiep, so tay nong nghiep, sổ tay nông nghiệp, nông nghiệp công nghệ cao, nông nghiệp cnc, nông nghiệp 24h” /><!--Từ khóa tìm kiếm nên để 20 từ khóa-->
    <meta name=”robots” content=”all” /><!--all -  cho phép google index, lập chỉ mục và đi theo các liên kết có trong bài viết.-->
    <meta name=”geo.position” content=”15.998165;108.259347″ /> <!--Meta Geo là thẻ đánh dấu địa điểm website của bạn, nói cách khác là đánh dấu địa điểm bạn có thể cung cấp dịch vụ thông qua website.-->

    <!--Bắt đầu meta facebook-->
    <meta property="og:image" content="http://efarmbook.efarmvn.com/public/img/backgroud_efarmbook.jpg" />
    <meta property="og:image:secure_url" content="http://efarmbook.efarmvn.com/public/img/backgroud_efarmbook.jpg" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image:width" content="400" />
    <meta property="og:image:height" content="300" />
    <meta property="og:image:alt" content="Efarmbook - Sổ Tay Nông Nghiệp" />
    <meta property="og:url" content="http://efarmbook.efarmvn.com/" />
    <meta property="og:title" content="Efarmbook - Sổ Tay Nông Nghiệp" />
    <meta property="og:type" content="article" />
    <meta property="og:description" content="Efarmbook - Sổ Tay Nông Nghiệp Việt Nam, tổng hợp kiến thức nông nghiệp mới nhất, hiện đại nhất, giúp nông dân có kiến thức để nông nghiệp Việt Nam ngày càng phát triển." />
    <!--Kết thúc meta facebook-->
    @endsection

    @section('content')
    <!-- Begin standard-->
    <div class="standard">
        <div class="container">
            <div class="row standard-title">
                <div class=" col-lg-4 standard-title-left">
                    <h3>Tiêu chuẩn nông nghiệp:</h3>
                </div>
                <div class="col-lg-8 standard-title-right">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="active title-standard"><a href="#home" role="tab" data-toggle="tab">All</a></li>
                    </ul>
                </div>
            </div>
            <div class="tab-content">
                <div class="tab-pane active" id="home">
                    <div class="row">
                        @foreach($type_book as $type)
                        @if($type->keywork == 1)
                        @foreach($book as $b)
                        @if($b->id_type == $type->id)
                        <div class="col-lg-3">
                            <div class="thumbnail">
                                <img  alt="{{$b->Title_slug}}" src="https://www.efarmvn.com/public/back_end/img/{{$b->img}}" style="width: 100%; height: 250px;">
                                <div class="caption">
                                    <p><a href="{{ route('book',$b->Title_slug) }}">{{$b->Title}}</a></p>
                                </div>
                            </div>
                        </div>
                        @endif
                        @endforeach
                        @endif
                        @endforeach
                      
                    </div>
                </div>
               
            </div>
        </div>
    </div>
    
    <!--End standard-->
    <!--Begin QC-->
    <div class="adsgoogle d-none d-lg-block">
        <div class="container text-center">
            <img src="{{asset('public/img/header_card.jpg')}}">
            <hr>
        </div>
    </div>
    <!--End QC-->
    <!-- Begin content-->
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 content-left">
                    @foreach($type_book as $type)
                    @if($type->keywork != 1)
                    <div class="row title-type">
                        <i class="fas fa-align-justify"></i> <h2>{{$type->name}}</h2>
                    </div>
                    <div class="row content-type">
                        @foreach($book as $b)
                        @if($b->id_type == $type->id)
                        <div class=" col-lg-12 media top-news-right">
                            <a class="pull-left top-news-right-img" href="{{ route('book',$b->Title_slug) }}" >
                                <img class="media-object" alt="64x64" src="https://www.efarmvn.com/public/back_end/img/{{$b->img}}" style="width: 80px; height: 80px;">
                            </a>
                            <div class="media-body top-news-right-text">
                                <a href="{{ route('book',$b->Title_slug) }}">{{$b->Title}}</a>  
                            </div>  
                        </div>
                        @endif
                        @endforeach
                    </div>
                    @endif
                    @endforeach
                </div>
                <div class="col-lg-4 content-right">
                    <div class="row efarmbook">
                        <div class="col-12">
                            <div class="title-content-left">
                                <i class="fas fa-newspaper"></i><span> Tin tức nông nghiệp</span>
                            </div>
                            <hr>
                            @foreach($news as $new)
                            <div class="media top-news-right">
                                
                                <a class="pull-left top-news-right-img" href="http://efarmnews.efarmvn.com/baiviet/{{$new->title_slug}}">
                                    <img class="media-object" alt="64x64" src="https://www.efarmvn.com/public/back_end/img/{{$new->image}}" style="width: 60px; height: 60px;">
                                </a>

                                <div class="media-body top-news-right-text">
                                    <a href="http://efarmnews.efarmvn.com/baiviet/{{$new->title_slug}}">{{$new->title}}</a>  
                                </div>
                            </div>
                            @endforeach
                            <hr>

                        </div>  
                    </div>
                    <div class="row adsleft d-none d-lg-block">
                        <img src="{{asset('public/img/bannerqcvuong.png')}}">
                    </div>
                    <div class="row efarmfood">
                        <div class="col-12">
                            <div class="title-content-left">
                                <i class="fas fa-utensils"></i><span> Sổ Tay Nấu Ăn</span>
                            </div>
                            <hr>
                            <div class="media top-news-right">
                                <a class="pull-left top-news-right-img" href="#">
                                    <img class="media-object" alt="64x64" src="{{asset('public/img/img-blue.png')}}" style="width: 60px; height: 60px;">
                                </a>

                                <div class="media-body top-news-right-text">
                                    <a href="">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo.</a>  
                                </div>
                            </div>
                            <div class="media top-news-right">
                                <a class="pull-left top-news-right-img" href="#">
                                    <img class="media-object" alt="64x64" src="{{asset('public/img/img-blue.png')}}" style="width: 60px; height: 60px;">
                                </a>

                                <div class="media-body top-news-right-text">
                                    <a href="">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo.</a>  
                                </div>
                            </div>
                            <div class="media top-news-right">
                                <a class="pull-left top-news-right-img" href="#">
                                    <img class="media-object" alt="64x64" src="{{asset('public/img/img-blue.png')}}" style="width: 60px; height: 60px;">
                                </a>

                                <div class="media-body top-news-right-text">
                                    <a href="">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo.</a>  
                                </div>
                            </div>
                            <hr>

                        </div>  
                    </div>
                    <div class="row efarmfood">
                        <div class="col-12">
                            <div class="title-content-left">
                                <i class="fas fa-users"></i><span>  Việc Làm Nông Nghiệp</span>
                            </div>
                            <hr>
                            <div class="media top-news-right">
                                <a class="pull-left top-news-right-img" href="#">
                                    <img class="media-object" alt="64x64" src="{{asset('public/img/img-blue.png')}}" style="width: 60px; height: 60px;">
                                </a>

                                <div class="media-body top-news-right-text">
                                    <a href="">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo.</a>  
                                </div>
                            </div>
                            <div class="media top-news-right">
                                <a class="pull-left top-news-right-img" href="#">
                                    <img class="media-object" alt="64x64" src="{{asset('public/img/img-blue.png')}}" style="width: 60px; height: 60px;">
                                </a>

                                <div class="media-body top-news-right-text">
                                    <a href="">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo.</a>  
                                </div>
                            </div>
                            <div class="media top-news-right">
                                <a class="pull-left top-news-right-img" href="#">
                                    <img class="media-object" alt="64x64" src="{{asset('public/img/img-blue.png')}}" style="width: 60px; height: 60px;">
                                </a>

                                <div class="media-body top-news-right-text">
                                    <a href="">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo.</a>  
                                </div>
                            </div>
                            <hr>
                        </div>  
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End content-->
    @endsection
