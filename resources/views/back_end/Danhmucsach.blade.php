@extends('back_end.matter')
@Section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Danh mục Sách</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Danh mục Sách</li>
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
          <button type="button" class="btn btn-success" data-toggle="modal" data-target=".btnadd">Thêm mới</button>
          <div class="modal fade btnadd text-left" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">

            <div class="modal-dialog modal-lg">

              <div class="modal-content">

                <div class="modal-content">
                  <div class="card card-info">
                    <div class="card-header">
                      <h3 class="card-title">Thêm danh mục Sách</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{route('addtypebook')}}" method="post" class="form-horizontal">
                       {{ csrf_field() }}   
                      <div class="card-body">
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Tên danh mục</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" name="name" placeholder="Tên danh mục tin tức">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputPassword3" class="col-sm-2 col-form-label">Mô tả danh mục</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" name="description" placeholder="Mô tả danh mục tin tức">
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
                      <th style="width: 10px">id</th>
                      <th>Tên danh mục</th>
                      <th>Mô tả danh mục</th>
                      <th> 
                        
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($type_book as $dms)
                    <tr class="text-center">
                      <td>{{$dms->id}}</td>
                      <td>{{$dms->name}}</td>
                      <td>
                        {{$dms->description}} 
                      </td>
                      <td>
                        <button class="btn btn-app" data-toggle="modal" data-target=".btnedit{{$dms->id}}"><i class="fas fa-edit"></i></button>
                        <div class="modal fade btnedit{{$dms->id}} text-left" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">

                          <div class="modal-dialog modal-lg">

                            <div class="modal-content">
                              <div class="card card-info">
                                <div class="card-header">
                                  <h3 class="card-title">Sửa danh mục sach</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form action="{{route('edittypebook',$dms->id)}}" method="POST" class="form-horizontal">
                                  {{ csrf_field() }} 
                                  <div class="card-body">
                                    <div class="form-group row">
                                      <label class="col-sm-2 col-form-label">Tên danh mục</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" name="name"  value="{{$dms->name}}" required>
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <label for="inputPassword3" class="col-sm-2 col-form-label">Mô tả danh mục</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" name="description" value="{{$dms->description}}" required>
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
                        <button class="btn btn-app" data-toggle="modal" data-target=".btndelete{{$dms->id}}"><i class="fas fa-trash-alt"></i></button>
                        <div class="modal fade btndelete{{$dms->id}} text-left" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">

                          <div class="modal-dialog">

                            <div class="modal-content">

                              <div class="card-footer ">
                                  <p class="text-center">Bạn có thực sự muốn xóa danh mục này?</p> 
                                  <br>
                                    <button type="submit" class="btn btn-danger"><a href="{{route('deletetypebook',$dms->id)}}">Xóa</a> </button>
                                    <button type="button" class="btn btn-default float-right" data-dismiss="modal">Thoát</button>
                                  </div>

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