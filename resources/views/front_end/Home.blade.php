@extends('front_end.LayoutHome.matter')
@Section('content')
    <section id="home-section" class="hero">
		<div class="home-slider owl-carousel">
	      <div class="slider-item" style="background-image: url({{asset('public/front_end/images/bg_1.jpg')}});">
	      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

	            <div class="col-md-12 ftco-animate text-center">
	              <h1 class="mb-2">Hệ sinh thái nông nghiệp EFARMVN</h1>
	              <h2 class="subheading mb-4">Đồng hành cùng nông dân phát triển</h2>
	              <p><a href="" class="btn btn-primary">Xem ngay</a></p>
	            </div>

	          </div>
	        </div>
	      </div>

	      <div class="slider-item" style="background-image: url({{asset('public/front_end/images/bg_1.jpg')}});">
	      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">
	          </div>
	        </div>
	      </div>
	    </div>
    </section>
    <section id="Menu" class="ftco-section">
		<div class="container">
			<div class="row no-gutters ftco-services">
	          <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
	            <div class="media block-6 services mb-md-0 mb-4">
	              <div class="icon bg-color-1 active d-flex justify-content-center align-items-center mb-2">
	            		<span class="flaticon-shipped"></span>
	              </div>
	              <div class="media-body">
	                <h3 class="heading">kỹ thuật</h3>
	                <span>Cung cấp kỹ thuật nông nghiệp</span>

	              </div>
	            </div>      
	          </div>
	          <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
	            <div class="media block-6 services mb-md-0 mb-4">
	              <div class="icon bg-color-2 d-flex justify-content-center align-items-center mb-2">
	            		<span class="flaticon-diet"></span>
	              </div>
	              <div class="media-body">
	                <h3 class="heading">Công nghệ</h3>
	                <span>Ứng dụng công nghệ trong nông nghiệp</span>
	              </div>
	            </div>    
	          </div>
	          <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
	            <div class="media block-6 services mb-md-0 mb-4">
	              <div class="icon bg-color-3 d-flex justify-content-center align-items-center mb-2">
	            		<span class="flaticon-award"></span>
	              </div>
	              <div class="media-body">
	                <h3 class="heading">Đầu ra</h3>
	                <span>Tạo đầu ra cho nông sản Việt</span>
	              </div>
	            </div>      
	          </div>
	          <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
	            <div class="media block-6 services mb-md-0 mb-4">
	              <div class="icon bg-color-4 d-flex justify-content-center align-items-center mb-2">
	            		<span class="flaticon-customer-service"></span>
	              </div>
	              <div class="media-body">
	                <h3 class="heading">Hỗ trợ vốn</h3>
	                <span>Hỗ trợ nông dân vay vốn</span>
	              </div>
	            </div>      
	          </div>
	        </div>
		</div>
	</section>

	<section class="ftco-section ftco-category ftco-no-pt">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<div class="row">
						<div class="col-md-6 order-md-last align-items-stretch d-flex">
							<div class="category-wrap-2 ftco-animate img align-self-stretch d-flex" style="background-image: url({{asset('public/front_end/images/category.jpg')}});">
								<div class="text text-center">
									<h2>Efarm market</h2>
									<p>Trang thương mại điện tử nông nghiệp</p>
									<p><a href="#" class="btn btn-primary">Mua ngay</a></p>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="category-wrap ftco-animate img mb-4 d-flex align-items-end" style="background-image: url({{asset('public/front_end/images/category-1.jpg')}});">
								<div class="text px-3 py-1">
									<h2 class="mb-0"><a href="#">Efarm news</a></h2>
								</div>
							</div>
							<div class="category-wrap ftco-animate img d-flex align-items-end" style="background-image: url({{asset('public/front_end/images/category-2.jpg')}});">
								<div class="text px-3 py-1">
									<h2 class="mb-0"><a href="#">Efarm foods</a></h2>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-4">
					<div class="category-wrap ftco-animate img mb-4 d-flex align-items-end" style="background-image: url({{asset('public/front_end/images/category-3.jpg')}});">
						<div class="text px-3 py-1">
							<h2 class="mb-0"><a href="#">Efarm book</a></h2>
						</div>		
					</div>
					<div class="category-wrap ftco-animate img d-flex align-items-end" style="background-image: url({{asset('public/front_end/images/category-4.jpg')}});">
						<div class="text px-3 py-1">
							<h2 class="mb-0"><a href="#">Efarm job</a></h2>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

    <section class="ftco-section testimony-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
          	<span class="subheading">Phản hồi</span>
            <h2 class="mb-4">Khách hàng đã nói gì</h2>
            <p>Efarm việt nam là một hệ sinh thái nông nghiệp, mà ở đó bạn được cung cấp kỹ thuật, công nghệ, đầu ra cho nông sản, tiếp cận vốn đầu tư để giúp cho nông nghiệp việt nam ngày càng phát triển theo hướng công nghệ cao.</p>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel">
            	<div class="item">
	                <div class="testimony-wrap p-4 pb-5">
	                  <div class="user-img mb-5" style="background-image: url({{asset('public/front_end/images/person_1.jpg)')}}">
	                    <span class="quote d-flex align-items-center justify-content-center">
	                      <i class="icon-quote-left"></i>
	                    </span>
	                  </div>
	                  <div class="text text-center">
	                    <p class="mb-5 pl-4 line">Cảm ơn Efarmvn! Bạn đã đem đến cho tôi những kiến thức bổ ích trong nông nghiệp, giúp tôi có thể phát triển lớn mạnh trong ngành chăn nuôi hiện nay</p>
	                    <p class="name">Nguyễn Minh Trí</p>
	                    <span class="position">Chủ trang trại tại hòa bình</span>
	                  </div>
	                </div>
              	</div>
            	<div class="item">
	                <div class="testimony-wrap p-4 pb-5">
	                  <div class="user-img mb-5" style="background-image: url({{asset('public/front_end/images/person_3.jpg')}})">
	                    <span class="quote d-flex align-items-center justify-content-center">
	                      <i class="icon-quote-left"></i>
	                    </span>
	                  </div>
	                  <div class="text text-center">
	                    <p class="mb-5 pl-4 line">Cảm ơn Efarmvn! Bạn đã hỗ trợ tôi vay vốn kịp thời, giúp tôi có thể đứng vững đến ngày hôm nay. Chúc Efarmvn ngày càng lớn mạnh.</p>
	                    <p class="name">Phạm Văn Thái</p>
	                    <span class="position">Chủ trang trại tại Khánh Hòa</span>
	                  </div>
	                </div>
              	</div>

              	<div class="item">
	                <div class="testimony-wrap p-4 pb-5">
	                  <div class="user-img mb-5" style="background-image: url({{asset('public/front_end/images/person_2.jpg')}})">
	                    <span class="quote d-flex align-items-center justify-content-center">
	                      <i class="icon-quote-left"></i>
	                    </span>
	                  </div>
	                  <div class="text text-center">
	                    <p class="mb-5 pl-4 line">Cảm ơn Efarmvn! Bạn đã đem đến cho tôi những giải pháp công nghệ thật tuyệt vời, giúp tôi giảm chi phí nhân công, thời gian thu hoạch được rút ngắn và năng xuất lại tăng cao. Chúc Efarmvn ngày càng phát triển.</p>
	                    <p class="name">Phạm Hoài Nam</p>
	                    <span class="position">Chủ Nông trại rau sạch tại Đà Lạt</span>
	                  </div>
	                </div>
              	</div>
              
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection