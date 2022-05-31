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
                              <th> Videos </th>
                          </tr>
                      </thead>
                      <tbody>
                          <tr>
                              <td> {{ +1 }}  </td>
                              <td> {{ $data->lecture_topics }} </td>
                              <td>
                                        @php
                                        $videoData = explode('|' , $data->leactures_videos)
                                    @endphp

                                  @foreach ($videoData as $item1)
                                    @if ($item1 != null) 
                                    <video width="320" height="320" controls >
                                        <source src="{{ URL::to($item1) }}" type="video/mp4">
                                        <source src="{{ URL::to($item1) }}" type="video/ogg">
                                    </video> 
                                    @else
                                        Lecture is Not Available
                                    @endif
                                  @endforeach                                  
                              </td>
                              {{-- <td>

                              </td> --}}
                          </tr>

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
