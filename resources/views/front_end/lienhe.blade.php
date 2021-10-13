@extends('front_end.LayoutHome.matter')
@Section('content')
<section class="ftco-section contact-section bg-light">
  <div class="container">
  	<div class="row d-flex mb-5 contact-info">
      <div class="w-100"></div>
      <div class="col-md-3 d-flex">
      	<div class="info bg-white p-4">
            <p><span>Địa chỉ:</span> TP. Phủ Lý, Tỉnh Hà Nam, Việt Nam</p>
          </div>
      </div>
      <div class="col-md-3 d-flex">
      	<div class="info bg-white p-4">
            <p><span>SĐT:</span> <a href="tel://1234567920">+ 84 346 449 533</a></p>
          </div>
      </div>
      <div class="col-md-3 d-flex">
      	<div class="info bg-white p-4">
            <p><span>Email:</span> <a href="mailto:info@yoursite.com">lienhe@efarmvn.com</a></p>
          </div>
      </div>
      <div class="col-md-3 d-flex">
      	<div class="info bg-white p-4">
            <p><span>Website</span> <a href="#">efarmvn.com</a></p>
          </div>
      </div>
    </div>
    <div class="row block-9">
      <div class="col-md-12 order-md-last d-flex">
        <form action="{{route('contact')}}" method="post" class="bg-white p-5 contact-form">
          {{ csrf_field() }}
          <div class="form-group">
            <input type="text" class="form-control" name="name" placeholder="Họ và tên">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="email" placeholder="Email">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="phone" placeholder="Số điện thoại">
          </div>
          <div class="form-group">
            <textarea id="" cols="30" rows="7" name="content" class="form-control" placeholder="Nội dung"></textarea>
          </div>
          <div class="form-group">
            <input type="submit" value="Gửi" class="btn btn-primary py-3 px-5">
          </div>
        </form>
      
      </div>

      <div class="col-md-6 d-flex">

      </div>
    </div>
  </div>
</section>
		

@endSection