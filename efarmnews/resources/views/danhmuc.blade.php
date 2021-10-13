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
@Section('content')
    <!-- Begin content-->
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 content-type">
                    <div class="row title-type">
                        <i class="fas fa-align-justify"></i> <h2>{{$name_dm}}</h2>
                    </div>
                    <div class="row content-type">
                        @foreach($news_top as $new)
                        <div class="card col-12 mb-4 shadow-sm content-type-top">
                            <img class="bd-placeholder-img card-img-top"  width="100%" height="340px" src="https://www.efarmvn.com/public/back_end/img/{{$new->image}}" focusable="false" role="img" aria-label="Placeholder: Thumbnail" alt="{!!$new->title_slug!!}"></img>
                            <div class="card-body content-type-title" >
                                <h1 class="card-text"><a href="{{route('baiviet',$new->title_slug)}}" style="color: #000000; text-decoration-line: none;">{{$new->title}}</a></h1>
                            </div>
                        </div>
                        @endforeach
                        @foreach($news as $new)
                        <div class="media col-12 top-news-right">
                            <a class="pull-left top-news-right-img" href="#" >
                                <img class="media-object"  alt="64x64" src="https://www.efarmvn.com/public/back_end/img/{{$new->image}}" style="width: 80px; height: 80px;" alt="{!!$new->title_slug!!}">
                            </a>

                            <div class="media-body top-news-right-text">
                                <a href="{{route('baiviet',$new->title_slug)}}">{{$new->title}}</a>  
                            </div>
                        </div>
                        @endforeach
                       
                    </div>
                    <ul class="pagination justify-content-center">
                        {!!$news->links()!!}
                    </ul>
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
                        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
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
                    <div class="row adsleft d-none d-lg-block">
                        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
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
                </div>
            </div>
        </div>
    </div>
    <!--End content-->
@endsection