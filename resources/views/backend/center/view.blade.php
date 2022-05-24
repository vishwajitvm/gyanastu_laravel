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
                <h3 class="box-title">Boards List</h3>
                <a href=" {{ route('admin-center.add') }} " class="btn btn-rounded btn-success md-5" style="float: right"> Add Center </a>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                  <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                          <tr>
                              <th width="5%">SL</th>
                              <th>Center State</th>
                              <th> Center Name </th>
                              <th width="15%"> Center Status </th>
                              <th width="15%">Action</th>
                          </tr>
                      </thead>
                      <tbody>
                        @foreach ($data as $key => $item)
                          <tr>
                              <td> {{$key+1}} </td>
                              <td> {{$item->center_state}} </td>
                              <td> {{ $item->center_name }} </td>
                              <td  style="{{($item->center_status =='active')?'color:green':'color:red' }} ; font-size:18px"> {{$item->center_status}} </td>

                              <td>
                                {{-- <a class="btn btn-info" href=" {{Route('admin-board.delete',$item->id)}}" id="delete">Edit</a>
                                &nbsp;&nbsp; --}}
                                <a class="btn btn-danger" href=" {{Route('admin-center.delete',$item->id)}}" id="delete">Delete</a>
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
