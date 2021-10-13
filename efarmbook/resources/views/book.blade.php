    @extends('Layout.matter')
    @section('meta')
    @foreach($book as $b)
    <meta charset=”utf-8″ />
    <title>{{$b->Title}}</title><!--Tiêu đề trang web chứa từ khóa và không quá 70 kí tự-->
    <meta name=”description” content=”{{$b->review}}” /> <!--Mô tả trang không quá 160 ký tự-->
    <meta name=”keywords” content=”{{$b->keyword}}” /><!--Từ khóa tìm kiếm nên để 20 từ khóa-->
    <meta name=”robots” content=”all” /><!--all -  cho phép google index, lập chỉ mục và đi theo các liên kết có trong bài viết.-->
    <meta name=”geo.position” content=”15.998165;108.259347″ /> <!--Meta Geo là thẻ đánh dấu địa điểm website của bạn, nói cách khác là đánh dấu địa điểm bạn có thể cung cấp dịch vụ thông qua website.-->

    <!--Bắt đầu meta facebook-->
    <meta property="og:image" content="https://www.efarmvn.com/public/back_end/img/{{$b->img}}" />
    <meta property="og:image:secure_url" content="https://www.efarmvn.com/public/back_end/img/{{$b->img}}" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image:width" content="400" />
    <meta property="og:image:height" content="300" />
    <meta property="og:image:alt" content="{{$b->Title_slug}}" />
    <meta property="og:url" content="http://efarmbook.efarmvn.com/book/{{$b->Title_slug}}" />
    <meta property="og:title" content="{{$b->Title}}" />
    <meta property="og:type" content="article" />
    <meta property="og:description" content="{{$b->reivew}}" />
    <!--Kết thúc meta facebook-->
    @endforeach
    @endsection

    @section('content')
    <!-- Begin content-->
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 content-left">
                   @foreach($book as $b)
                    <h1 class="text-center">{{$b->Title}}</h1>
                    <h2 class="text-center" style="font-size: 16px;">(<i>{{$b->review}}</i>)</h2>
                    <p>{!!$b->content!!}</p>
                    <div class="share">
                        <div class="row">
                            <div class="col-3 share-title">
                                <strong>Chia sẻ bài viết: </strong>
                            </div>
                            <div class="col-9 share-content" >
                                <a class="btn btn-primary btn-sm" href="https://www.facebook.com/sharer/sharer.php?u=http://efarmbook.efarmvn.com/book/{!!$b->Title_slug!!}" role="button"><i class="fab fa-facebook-f"> </i> Facebook</a>
                            </div>
                        </div>
                    </div>
                   @endforeach
                   <hr>
                    <div class="col-12">
                        <div class="title-content-left">
                            <i class="fas fa-list-ul"></i><span> Có thể bạn muốn xem</span>
                        </div>
                        <hr>
                        @foreach($bookall as $b)
                        <div class="media top-news-right">
                            
                            <a class="pull-left top-news-right-img" href="http://efarmnews.efarmvn.com/baiviet/{{$b->Title_slug}}">
                                <img class="media-object" alt="64x64" src="https://www.efarmvn.com/public/back_end/img/{{$b->img}}" style="width: 60px; height: 60px;">
                            </a>

                            <div class="media-body top-news-right-text">
                                <a href="http://efarmnews.efarmvn.com/baiviet/{{$b->Title_slug}}">{{$b->Title}}</a>  
                            </div>
                        </div>
                        @endforeach
                        <hr>
                    </div> 
                </div>
                <div class="col-lg-4 content-right">
                    <div class="row efarmbook">
                        <div class="col-12">
                            <div class="title-content-left">
                                <i class="fas fa-newspaper"></i><span>Tin tức nông nghiệp</span>
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
    </content>
    <!--end content-->
    <!--Begin QC-->
    <div class="adsgoogle d-none d-lg-block">
        <div class="container text-center">
            <img src="{{asset('public/img/header_card.jpg')}}">
            <hr>
        </div>
    </div>
    <!--End QC-->
    @endsection