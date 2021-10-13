@extends('back_end.matter')
@Section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Bình Luận</h1>
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
                      <th>id bai viết</th>
                      <th>Tên người bình luận</th>
                      <th>Nội dung</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($binhluan as $bl)
                    <tr class="text-center">
                      <td>{{$bl->id_news}}</td>
                      <td>
                         {{$bl->name}}
                      </td>
                      <td>{{$bl->content}}</td>

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
  