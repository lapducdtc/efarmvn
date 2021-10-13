@extends('back_end.matter')
@Section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Reg web</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Reg web</li>
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
          <button type="button" class="btn btn-success" data-toggle="modal" data-target=".btnadd">Thêm web</button>
          <div class="modal fade btnadd text-left" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">

            <div class="modal-dialog modal-lg">

              <div class="modal-content">

                <div class="modal-content">
                  <div class="card card-info">
                    <div class="card-header">
                      <h3 class="card-title">Thêm web</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{route('addweb')}}" method="post" class="form-horizontal" enctype="multipart/form-data">
                      {{ csrf_field() }}
                      <div class="card-body">
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Tên web site</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" name="name" placeholder="Tên danh mục tin tức">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Tiêu đề bài viết</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" name="title" placeholder="Tên danh mục tin tức">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputPassword3" class="col-sm-2 col-form-label">Mô tả bài viết</label>
                          <div class="col-sm-10">
                          <div class="col-sm-10">
                            <input type="text" class="form-control" name="review" placeholder="Tên danh mục tin tức">
                          </div>
                          </div>
                        </div>
                         <div class="form-group row">
                          <label for="inputPassword3" class="col-sm-2 col-form-label">Nội dung bài viết</label>
                          <div class="col-sm-10">
                          <div class="col-sm-10">
                            <input type="text" class="form-control" name="content" placeholder="Tên danh mục tin tức">
                          </div>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputPassword3" class="col-sm-2 col-form-label">Hình ảnh</label>
                          <div class="col-sm-10">
                          <div class="col-sm-10">
                            <input type="text" class="form-control" name="img" placeholder="Tên danh mục tin tức">
                          </div>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Tag</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" name="tag" placeholder="Tên hoặc bút danh người viết">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">author</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" name="author" placeholder="Tên hoặc bút danh người viết">
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
                      <th>website</th>
                      <th>Title</th>
                      <th>review</th>
                      <th>content</th>
                      <th>img</th>
                      <th>tag</th>
                      <th>Tác giả</th>
                      <th> 
                        
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($regweb as $web)
                    <tr class="text-center">
                      <td>{{$web->id}}</td>
                      <td>{{$web->name}}</td>
                      <td>{{$web->title}}</td>
                      <td>{{$web->review}}</td>
                      <td>{{$web->content}}</td>
                      <td>{{$web->img}}</td>
                      <td>{{$web->tag}}</td>
                      <td>{{$web->author}}</td>
                      <td>
                        <button class="btn btn-app" data-toggle="modal" data-target=".btnedit{{$web->id}}"><i class="fas fa-edit"></i></button>
                        <div class="modal fade btnedit{{$web->id}} text-left" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">

                          <div class="modal-dialog modal-lg">

                            <div class="modal-content">
                              <div class="card card-info">
                                <div class="card-header">
                                  <h3 class="card-title">Sửa web reg</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->

                                <form action="{{route('editweb',$web->id)}}" method="post" class="form-horizontal" enctype="multipart/form-data">
                                  {{ csrf_field() }}
                                  <div class="card-body">
                                    <div class="form-group row">
			                          <label class="col-sm-2 col-form-label">Tên web site</label>
			                          <div class="col-sm-10">
			                            <input type="text" class="form-control" name="name" placeholder="Tên danh mục tin tức" value="{{$web->name}}">
			                          </div>
			                        </div>
			                        <div class="form-group row">
			                          <label class="col-sm-2 col-form-label">Tiêu đề bài viết</label>
			                          <div class="col-sm-10">
			                            <input type="text" class="form-control" name="title" placeholder="Tên danh mục tin tức" value="{{$web->title}}">
			                          </div>
			                        </div>
			                        <div class="form-group row">
			                          <label for="inputPassword3" class="col-sm-2 col-form-label">Mô tả bài viết</label>
			                          <div class="col-sm-10">
			                          <div class="col-sm-10">
			                            <input type="text" class="form-control" name="review" placeholder="Tên danh mục tin tức" value="{{$web->review}}">
			                          </div>
			                          </div>
			                        </div>
			                         <div class="form-group row">
			                          <label for="inputPassword3" class="col-sm-2 col-form-label">Nội dung bài viết</label>
			                          <div class="col-sm-10">
			                          <div class="col-sm-10">
			                            <input type="text" class="form-control" name="content" placeholder="Tên danh mục tin tức" value="{{$web->content}}">
			                          </div>
			                          </div>
			                        </div>
			                        <div class="form-group row">
			                          <label for="inputPassword3" class="col-sm-2 col-form-label">Hình ảnh</label>
			                          <div class="col-sm-10">
			                          <div class="col-sm-10">
			                            <input type="text" class="form-control" name="img" placeholder="Tên danh mục tin tức" value="{{$web->img}}">
			                          </div>
			                          </div>
			                        </div>
			                        <div class="form-group row">
			                          <label class="col-sm-2 col-form-label">Tag</label>
			                          <div class="col-sm-10">
			                            <input type="text" class="form-control" name="tag" placeholder="Tên hoặc bút danh người viết" value="{{$web->tag}}">
			                          </div>
			                        </div>
			                        <div class="form-group row">
			                          <label class="col-sm-2 col-form-label">author</label>
			                          <div class="col-sm-10">
			                            <input type="text" class="form-control" name="author" placeholder="Tên hoặc bút danh người viết" value="{{$web->author}}">
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
                        <button class="btn btn-app" data-toggle="modal" data-target=".btndelete{{$web->id}}"><i class="fas fa-trash-alt"></i></button>
                        <div class="modal fade btndelete{{$web->id}} text-left" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">

                          <div class="modal-dialog">

                            <div class="modal-content">

                              <div class="card-footer ">
                                  <p class="text-center">Bạn có thực sự muốn xóa web này?</p> 
                                  <br>
                                    <button type="submit" class="btn btn-danger"><a href="{{route('deleteweb',$web->id)}}">Xóa</a></button>
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
  