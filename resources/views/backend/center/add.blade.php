@extends('admin.admin_master')
@section('admin')

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <div class="container-full">
      

        <!-- Main content -->
		<section class="content">

            <!-- Basic Forms -->
             <div class="box">
               <div class="box-header with-border">
                 <h4 class="box-title">Add Centers</h4>
                 <a href=" {{ route('admin-center.view') }} " class="btn btn-rounded btn-success md-5" style="float: right"> View Centers </a>

               </div>
               <!-- /.box-header -->

               <div class="box-body">
                 <div class="row">
                   <div class="col">
                       <form novalidate method="POST" action=" {{Route('admin-center.store')}} "> <!--form-->
                        @csrf
                         <div class="row">
                           <div class="col-12">	

                            <div class="row">
                                <div class="col-md-12"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <h5>Select Center State or UT<span class="text-danger">*</span> </h5>
                                        <div class="controls">
                                            <select name="center_state" id="select"  class="form-control">
                                                <option selected="" disabled>Select Center State </option>
                                                @foreach ($states as $item)
                                                    <option value="{{ $item }}"> {{ $item }} </option>
                                                @endforeach

                                            </select>
                                        </div>
                                    </div>
                                </div><!--col-6 Ended here-->
                            </div>


                            <!--row Stared here-->
                            <div class="row">
                                <div class="col-md-12"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <h5>Center Name<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="center_name" class="form-control" required="" aria-invalid="false"> </div>
                                    </div>
                                </div><!--col-6 Ended here-->
                            </div>
                            <!--row Ended here-->

                            <!--row Stared here-->
                            <div class="row">
                                <div class="col-md-12"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <h5>Center Status </h5>
                                        <div class="controls">
                                            <select name="center_status" id="select"  class="form-control">
                                                <option selected="" disabled>Select Status</option>
                                                <option value="active">Active</option>
                                                <option value="inactive">Inactive</option>

                                            </select>
                                        </div>
                                    </div>
                                </div><!--col-6 Ended here-->
                            </div>
                            <!--row Ended here-->

                           </div>
                         </div>
                           
                           
                           
                           <div class="text-xs-right">
                               <input type="submit" class="btn btn-rounded btn-info" value="Submit">
                           </div>
                       </form><!--form-->
   
                   </div>
                   <!-- /.col -->
                 </div>
                 <!-- /.row -->
               </div>
               <!-- /.box-body -->
             </div>
             <!-- /.box -->
   
           </section>
           <!-- /.content -->

   
    
    </div>
</div>
<!-- /.content-wrapper -->
<script type="text/javascript">
    $(document).ready(function(){
        $('#image').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImage').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>



@endsection
