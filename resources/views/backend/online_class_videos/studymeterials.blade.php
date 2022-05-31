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

                <div class="row">
                    @php
                    $studymaterial_pdf = explode('|' , $data->study_materials)
                @endphp

                    @foreach ($studymaterial_pdf as $item)
                    @if ($item != null)
                    <div class="col-md-3 mx-1 my-2 " style="list-style: none">
                        <li class="bg-danger">
                            <span class="mailbox-attachment-icon"><i class="fa fa-file-pdf-o "></i></span>
          
                            <div class="mailbox-attachment-info">
                              <a href="{{ URL::to($item) }}" target="_blank" class="mailbox-attachment-name"><i class="fa fa-paperclip"></i> {{ $data->lecture_topics }} </a>
                                  <span class="mailbox-attachment-size">
                                    
                                    <a href="{{ URL::to($item) }}" target="_blank" class="btn btn-default btn-xs pull-right"><i class="fa fa-cloud-download"></i></a>
                                  </span>
                            </div>
                          </li>
                    </div>
                    @else
                        <h4 class="pl-4"> Study Material for <span class="text-danger">{{ $data->lecture_topics }}</span> is not Available </h4>
                    @endif
                    @endforeach
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
