@extends('Layout.matter')
@section('meta')
    <title>Efarm news - Trang tin tức nông nghiệp 24h</title><!--Tiêu đề trang web chứa từ khóa và không quá 70 kí tự-->
    <meta charset=”utf-8″ />
    <meta name=”description” content=”Efarmnews - Cập nhật tin tức nông nghiệp mới nhất, nhanh nhất và chính xác nhất” /> <!--Mô tả trang không quá 160 ký tự-->
    <meta name=”keywords” content=”tin tức nông nghiệp, tin tức nông nghiệp mới nhất, tin tức nông nghiệp chăn nuôi, tin tức nông nghiệp thế giới, tin tức nông nghiệp việt nam, tin tức nông nghiệp tây nguyên, tin tức nông nghiệp sạch, tin tức nông nghiệp hôm nay, tin tức nông nghiệp 24h, tin tức bộ nông nghiệp, tin tức về nông nghiệp nhật bản, tin tức nông nghiệp lâm đồng, tin tức 24 giờ nông nghiệp” /><!--Từ khóa tìm kiếm nên để 20 từ khóa-->
    <meta name=”robots” content=”all” /><!--all -  cho phép google index, lập chỉ mục và đi theo các liên kết có trong bài viết.-->
    <meta name=”geo.position” content=”21.022525;105.823363″ /> <!--Meta Geo là thẻ đánh dấu địa điểm website của bạn, nói cách khác là đánh dấu địa điểm bạn có thể cung cấp dịch vụ thông qua website.-->

    <!--Bắt đầu meta facebook-->
    <meta property="og:image" content="{{asset('public/img/backgroud_efarmnews.jpg')}}" />
    <meta property="og:image:secure_url" content="{{asset('public/img/backgroud_efarmnews.jpg')}}" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image:width" content="400" />
    <meta property="og:image:height" content="300" />
    <meta property="og:image:alt" content="Efarmnews - Trang tin tức nông nghiệp 24h" />
    <meta property="og:url" content="http://efarmnews.efarmvn.com/" />
    <meta property="og:title" content="Efarmnews - Trang tin tức nông nghiệp 24h" />
    <meta property="og:type" content="article" />
    <meta property="og:description" content="Efarmnews - Cập nhật tin tức nông nghiệp mới nhất, nhanh nhất và chính xác nhất" />
    <!--Kết thúc meta facebook-->
@endsection
@section('content')

    <!--Top news-->
    <div class="top-news">
        <div class="container">
            <div class="row">
                <!-- Top left-->
                <div class="col-lg-8 top-news-left">
                    @foreach($trending_top as $news)
                    <div class="carousel-item active">
                        <img class="bd-placeholder-img" width="100%" height="450" src="https://www.efarmvn.com/public/back_end/img/{{$news->image}}" alt="{!!$news->title_slug!!}"><rect width="100%" height="100%" fill="#777"></rect></img>
                          <div class="carousel-caption text-left">
                            <h1><a href="{{route('baiviet',$news->title_slug)}}">{{$news->title}}</a></h1>
                        </div>
                    </div>
                    @endforeach
                </div>
                <!--Top right-->
                <div class="col-lg-4 ">
                    @foreach($trending_right as $news)
                    <div class="media top-news-right">
                        <a class="pull-left top-news-right-img" href="#" >
                            <img class="media-object" data-src="holder.js/64x64" alt="64x64" src="https://www.efarmvn.com/public/back_end/img/{{$news->image}}" style="width: 80px; height: 80px;" alt="{!!$news->title_slug!!}">
                        </a>

                        <div class="media-body top-news-right-text">
                            <a href="{{route('baiviet',$news->title_slug)}}">{{$news->title}}</a>  
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <hr>
        </div>
    </div>
    <!--End top news-->
    
    <!--Top views-->
    <div class="top-views">
        <div class="container">
            <div class="row">
                <div class="col-10 top-views-title">XEM NHIỀU NHẤT</div>
                <div class="col-2 top-views-btn">
                    <ul class="pagination">
                        <li class="page-item">
                            <a class="page-link" aria-label="Previous">
                                <span aria-hidden="true"><i class="fas fa-arrow-left"></i></span>
                                <span class="sr-only">Previous</span>
                            </a>
                        </li>
                        
                        <li class="page-item">
                            <a class="page-link" aria-label="Next">
                                <span aria-hidden="true"><i class="fas fa-arrow-right"></i></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                @foreach($weekly_top as $news)
                <div class="col-lg-4">
                    <div class="card mb-4 shadow-sm weekly-top-content">
                        <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="https://www.efarmvn.com/public/back_end/img/{{$news->image}}" focusable="false" role="img" aria-label="Placeholder: Thumbnail" alt="{!!$news->title_slug!!}"></img>
                        <div class="card-body">
                            <a href="{{route('baiviet',$news->title_slug)}}">{{$news->title}}</a>  
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <hr>
        </div>
    </div>
    <!--End top views-->
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
    <!-- Begin content-->
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 content-left">
                    <div class="row"> 
                        @foreach($danhmuc as $dm) 
                        <div class="col-lg-5 content">
                           
                            <div class="row title-type">
                                <i class="fas fa-align-justify"></i> <h2>{{$dm->name}}</h2>
                            </div>
                            <div class="row content-type">
                                <?php
                                    $i=0;
                                    $j=0;
                                ?>
                                @foreach($news_top as $news)
                                @if($news->id_type == $dm->id && $i<1)
                                <div class="card mb-4 shadow-sm">
                                    <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="https://www.efarmvn.com/public/back_end/img/{{$news->image}}" focusable="false" role="img" aria-label="Placeholder: Thumbnail" alt="{!!$news->title_slug!!}"></img>
                                    <div class="card-body">
                                        <a href="{{route('baiviet',$news->title_slug)}}"><p class="card-text">{{$news->title}}</p></a>
                                    </div>
                                </div>
                                <?php
                                    $i++;
                                ?>
                                @endif
                                @endforeach

                                @foreach($news_all as $news)
                                @if($news->id_type == $dm->id && $j<2)
                                <div class="media top-news-right">
                                    <a class="pull-left top-news-right-img" href="#" >
                                        <img class="media-object"  alt="{!!$news->title_slug!!}" src="https://www.efarmvn.com/public/back_end/img/{{$news->image}}" style="width: 80px; height: 80px;">
                                    </a>

                                    <div class="media-body top-news-right-text">
                                        <a href="{{route('baiviet',$news->title_slug)}}">{{$news->title}}</a>  
                                    </div>
                                </div>
                                <?php
                                    $j++;
                                ?>
                                @endif
                                @endforeach
                            </div>
                        </div>
                        @endforeach
                    </div>  
                </div>
                <div class="col-lg-4 content-right">
                    <div class="row efarmbook">
                        <div class="col-12">
                            <div class="title-content-left">
                                <i class="fas fa-book"></i><span>  Sổ tay nông nghiệp</span>
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
                    <div class="row adsleft d-none d-lg-block">
                        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js">
                            </script>
                            <!-- my ads3 -->
                            <ins class="adsbygoogle"
                                 style="display:block"
                                 data-ad-client="ca-pub-2738622793482635"
                                 data-ad-slot="9028952523"
                                 data-ad-format="auto"
                                 data-full-width-responsive="true"></ins>
                            <script>
                                 (adsbygoogle = window.adsbygoogle || []).push({});
                        </script>
                    </div>
                    <div class="row efarmfood">
                        <div class="col-12">
                            <div class="title-content-left">
                                <i class="fas fa-utensils"></i><span>  Sổ Tay Nấu Ăn</span>
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
@endsection
  