@extends('Layout.matter')
@section('meta')
@foreach($news as $new)
    <title>{{$new->title}}</title><!--Tiêu đề trang web chứa từ khóa và không quá 70 kí tự-->
    <meta charset=”utf-8″ />
    <meta name=”description” content=”{{$new->review}}” /> <!--Mô tả trang không quá 160 ký tự-->
    <meta name=”keywords” content=”{{$new->keyword}}” /><!--Từ khóa tìm kiếm nên để 20 từ khóa-->
    <meta name=”robots” content=”all” /><!--all -  cho phép google index, lập chỉ mục và đi theo các liên kết có trong bài viết.-->
    <meta name=”geo.position” content=”21.022525;105.823363″ /> <!--Meta Geo là thẻ đánh dấu địa điểm website của bạn, nói cách khác là đánh dấu địa điểm bạn có thể cung cấp dịch vụ thông qua website.-->

    <!--Bắt đầu meta facebook-->
    <meta property="og:image" content="https://www.efarmvn.com/public/back_end/img/{{$new->image}}" />
    <meta property="og:image:secure_url" content="https://www.efarmvn.com/public/back_end/img/{{$new->image}}" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image:width" content="400" />
    <meta property="og:image:height" content="300" />
    <meta property="og:image:alt" content="{!!$new->title_slug!!}" />
    <meta property="og:url" content="http://efarmnews.efarmvn.com/baiviet/{!!$new->title_slug!!}" />
    <meta property="og:title" content="{{$new->title}}" />
    <meta property="og:type" content="article" />
    <meta property="og:description" content="{{$new->review}}" />
    <!--Kết thúc meta facebook-->
@endforeach
@endsection
@Section('content')
	<!-- Begin content-->
	<div class="content">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 content-single">
					@foreach($news as $new)
					<div class="content-single-items">
						<img src="https://www.efarmvn.com/public/back_end/img/{{$new->image}}" alt="{!!$new->title_slug!!}">
						<h1>{{$new->title}}</h1>
						<h2><i>{{$new->review}}</i> </h2>
						<p>{!!$new->content!!}</p>
					</div>
					<div class="share">
						<div class="row">
							<div class="col-3 share-title">
								<strong>Chia sẻ bài viết: </strong>
							</div>
							<div class="col-9 share-content" >
								<a class="btn btn-primary btn-sm" href="https://www.facebook.com/sharer/sharer.php?u=http://efarmnews.efarmvn.com/baiviet/{!!$new->title_slug!!}" role="button"><i class="fab fa-facebook-f"> </i> Facebook</a>
							</div>
						</div>
					</div>
					
					<div class="comment">
						<div class="comment-title">
							Bình Luận: 
						</div>
						@foreach($binhluan as $bl)
						<div class="comment-content">
							<div class="media">
					        	<img class="media-object" data-src="holder.js/64x64" alt="64x64" src="{{asset('public/img/user.jpg')}}" style="width: 64px; height: 64px;">
						     	<div class="media-body">
						        	<h5 class="media-heading">{{$bl->name}}</h5>
						        	{{$bl->content}}
						      	</div>
						    </div>
						    <hr>
						</div>	
						@endforeach	
					</div>

					<div class="form-comment">
						<form class="needs-validation" novalidate="" method="post" action="{{route('binhluan',$new->id)}}">
							{{ csrf_field() }}
					        <div class="row">
						        <div class="col-md-6 mb-3">
						            <label for="firstName">Họ Tên</label>
						            <input type="text" class="form-control" id="firstName" name="name" placeholder="" value="" required="">
						        </div>
						        <div class="col-md-6 mb-3">
						            <label for="lastName">Số Điện Thoại</label>
						            <input type="text" class="form-control" id="lastName" name="phone" placeholder="" value="" required="">
						        </div>
					        </div>
					        <div class="mb-3">
					          	<label for="email">Email </span></label>
					          	<input type="email" class="form-control" id="email" name="email" placeholder="you@example.com">
					        </div>
					        <div class="mb-3">
					          	<label for="address">Nội dung bình luận</label>
					         	<textarea class="form-control" id="exampleFormControlTextarea1"  name="content" rows="5"></textarea>
					        </div>
					        <button class="btn btn-primary btn-lg btn-block" type="submit">Gửi Bình Luận</button>
					    </form>
					</div>
					@endforeach	
					<hr>
					<div class="row title-type">
						<i class="fas fa-align-justify"></i> <h2>Bài Viết Liên Quan</h2>
					</div>
					<div class="row content-type">
						@foreach($news_dm as $news)
				        <div class="media col-12 top-news-right">
					      	<a class="pull-left top-news-right-img" href="#" >
					        	<img class="media-object"  alt="{!!$new->title_slug!!}" src="https://www.efarmvn.com/public/back_end/img/{{$news->image}}" style="width: 80px; height: 80px;" >
					      	</a>
					      	<div class="media-body top-news-right-text">
						        <a href="{{route('baiviet',$news->title_slug)}}">{{$news->title}}</a>  
					      	</div>
					    </div>
					    @endforeach
					</div>
					<ul class="pagination justify-content-center">
					    {!!$news_dm->links()!!}
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