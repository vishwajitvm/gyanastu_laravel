@extends('admin.admin_master')
@section('admin')

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <div class="container-full">
      <!-- Content Header (Page header) -->


      <!-- Main content -->
      <section class="content">
        <div class="row">
            
 

          <div class="col-12">

           <div class="box">
              <div class="box-header with-border">
                <h3 class="box-title">Lectures List</h3>
                <a href=" {{ route('admin-course.add') }} " class="btn btn-rounded btn-success md-5" style="float: right"> Add Course </a>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                  <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                          <tr>
                              <th width="5%">SL</th>
                              <th>Topics Name</th>
                              <th> Lecture Date </th>
                              <th> Available Upto </th>
                              <th >Action</th>
                          </tr>
                      </thead>
                      <tbody>
                        @foreach ($data as $key=>$item)
                          <tr>
                              <td> {{$key+1}}  </td>
                              <td> {{ $item->lecture_topics }} </td>
                              <td> <span class="bg-info px-1 py-1">{{ date('jS F Y' , strToTime($item->video_uploaded_date)) }}</span> </td>
                              <td>  <span class="bg-danger px-1 py-1"> {{ date('jS F Y' , strToTime($item->video_availabel_upto_date)) }} </span> </td>
                              <td>
                                <a class="btn btn-primary my-2" href=" {{Route('admin-online-videos.lectures',$item->id)}}" >Watch Lectures</a>
                                &nbsp;&nbsp;
                                <a class="btn btn-primary my-2" href=" {{Route('admin-online-videos.study-material',$item->id)}}">View Study Materials</a>
                                &nbsp;&nbsp;
                                <a class="btn btn-success my-2" href=" {{Route('admin-online-videos.edit',$item->id)}}" id="edit">Edit </a>
                                &nbsp;&nbsp;
                                <a class="btn btn-danger my-2" href=" {{Route('admin-online-videos.delete',$item->id)}}" id="delete">Delete</a>
                              </td>
                
                          </tr>
                          @endforeach

                      </tbody>

                    </table>
                  </div>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->

            
            <!-- /.box -->          
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </section>
      <!-- /.content -->
    
    </div>
</div>
<!-- /.content-wrapper -->

@endsection
