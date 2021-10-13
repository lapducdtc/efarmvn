@extends('back_end.matter')
@Section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Bài Viết</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Bài viết</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-sm-6 text-center" style="color: red">
          {{session('thongbao')}}
        </div>
        <div class="col-sm-6 text-right">
          <button type="button" class="btn btn-success" data-toggle="modal" data-target=".btnadd">Thêm Sách</button>
          <div class="modal fade btnadd text-left" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-content">
                  <div class="card card-info">
                    <div class="card-header">
                      <h3 class="card-title">Thêm bài viết</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{route('addbook')}}" method="post" class="form-horizontal" enctype="multipart/form-data">
                      {{ csrf_field() }}
                      <div class="card-body">
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Danh mục</label>
                          <div class="col-sm-10">
                            <select class="form-control" name="id_type">
                              <option value="">Chọn danh mục sách</option>
                              @foreach($type_book as $type)
                              <option value="{{$type->id}}">{{$type->name}}</option>
                              @endforeach
                            </select>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Tiêu đề bài viết</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" name="Title" placeholder="Tên danh mục tin tức">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputPassword3" class="col-sm-2 col-form-label">Mô tả bài viết</label>
                          <div class="col-sm-10">
                          <textarea name="review" class="form-control" rows="4"></textarea>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputPassword3" class="col-sm-2 col-form-label">Nội dung bài viết</label>
                          <div class="col-sm-10">
                              <textarea name="content" class="textarea" placeholder="Place some text here"
                                        style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputPassword3" class="col-sm-2 col-form-label">Hình ảnh</label>
                          <div class="col-sm-10">
                            <div class="custom-file ">
                              <input type="file" name="img"  class="custom-file-input" id="customFile" multiple value="">
                              <label class="custom-file-label" for="customFile">Chọn hình ảnh từ máy tính của bạn</label>
                            </div>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputPassword3" class="col-sm-2 col-form-label">Từ khóa</label>
                          <div class="col-sm-10">
                          <textarea name="keyword" class="form-control" rows="4"></textarea>
                          </div>
                        </div>
                        
                      </div>
                      <!-- /.card-body -->
                      <div class="card-footer">
                        <button type="submit" class="btn btn btn-success">Thêm mới</button>
                        <button type="button" class="btn btn-default float-right" data-dismiss="modal">Thoát</button>
                      </div>
                      <!-- /.card-footer -->
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <br>
      <div class="container-fluid">
        <div class="card">
              
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-striped">
                  <thead>
                    <tr class="text-center">
                      <th style="width: 10px">#</th>
                      <th>Hình ảnh</th>
                      <th>Tiêu đề sách</th>
                      <th>Giới thiệu sách</th>
                      <th> 
                        
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($book as $b)
                    <tr class="text-center">
                      <td>{{$b->id}}</td>
                      <td>
                        <img src="{{asset('public/back_end/img')}}/{{$b->img}}" width="50" height="50">
                      </td>
                      <td>
                         {{$b->Title}}
                      </td>
                      <td>{{$b->review}}</td>
                      <td>
                        <button class="btn btn-app" data-toggle="modal" data-target=".btnedit{{$b->id}}"><i class="fas fa-edit"></i></button>
                        <div class="modal fade btnedit{{$b->id}} text-left" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">

                          <div class="modal-dialog modal-lg">

                            <div class="modal-content">
                              <div class="card card-info">
                                <div class="card-header">
                                  <h3 class="card-title">Sửa danh mục tin tức</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->

                                <form action="{{route('editbook',$b->id)}}" method="post" class="form-horizontal" enctype="multipart/form-data">
                                  {{ csrf_field() }}
                                  <div class="card-body">
                                    <div class="form-group row">
                                      <label class="col-sm-2 col-form-label">Danh mục</label>
                                      <div class="col-sm-10">
                                        <select class="form-control">
                                          <option value="{{$b->id_type}}">Chọn lại sách nếu sửa</option>
                                          @foreach($type_book as $type)
                                          <option value="{{$type->id}}">{{$type->name}}</option>
                                          @endforeach
                                        </select>
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <label class="col-sm-2 col-form-label">Tiêu đề bài viết</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" name="title" value="{{$b->Title}}" placeholder="Tên danh mục tin tức">
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <label for="inputPassword3" class="col-sm-2 col-form-label">Mô tả bài viết</label>
                                      <div class="col-sm-10">
                                      <textarea value="" name="review" class="form-control" rows="4">{{$b->review}}</textarea>
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <label for="inputPassword3" class="col-sm-2 col-form-label">Nội dung bài viết</label>
                                      <div class="col-sm-10">
                                          <textarea value="" name="content" class="textarea" placeholder="Place some text here"
                                                    style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{$b->content}}</textarea>
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <label for="inputPassword3" class="col-sm-2 col-form-label">Hình ảnh</label>
                                      <div class="col-sm-10">
                                        <div class="custom-file ">
                                          <input type="file" name="imgnews" class="custom-file-input" id="customFile" value="{{$b->image}}">
                                          <label class="custom-file-label" for="customFile">Chọn hình ảnh từ máy tính của bạn</label>
                                        </div>
                                      </div>
                                    </div>
                                     <div class="form-group row">
                                      <label for="inputPassword3" class="col-sm-2 col-form-label">Từ khóa</label>
                                      <div class="col-sm-10">
                                      <textarea name="keyword" class="form-control" rows="4">{{$b->keyword}}</textarea>
                                      </div>
                                    </div>
                                  </div>
                                  <!-- /.card-body -->
                                  <div class="card-footer">
                                    <button type="submit" class="btn btn btn-success">Sửa</button>
                                    <button type="button" class="btn btn-default float-right" data-dismiss="modal">Thoát</button>
                                  </div>
                                  <!-- /.card-footer -->
                                </form>
                              </div>
                            </div>

                          </div>

                        </div>
                        <button class="btn btn-app" data-toggle="modal" data-target=".btndelete{{$b->id}}"><i class="fas fa-trash-alt"></i></button>
                        <div class="modal fade btndelete{{$b->id}} text-left" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">

                          <div class="modal-dialog">

                            <div class="modal-content">

                              <div class="card-footer ">
                                  <p class="text-center">Bạn có thực sự muốn xóa bài viết này?</p> 
                                  <br>
                                    <button type="submit" class="btn btn-danger"><a href="{{route('deletebook',$b->id)}}">Xóa</a></button>
                                    <button type="button" class="btn btn-default float-right" data-dismiss="modal">Thoát</button>
                                  </div>

                            </div>

                          </div>

                        </div>

                        <button class="btn btn-app" data-toggle="modal" data-target=".btnchitiet"><i class="fas fa-newspaper"></i></button>
                        <div class="modal fade btnchitiet text-left" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">

                          <div class="modal-dialog">

                            <div class="modal-content">

                              <div class="card-footer ">
                                  Chi tiết bài viet

                            </div>

                          </div>

                        </div>

                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
  