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
                 <h4 class="box-title">Add Medium</h4>
                 <a href=" {{ route('admin-medium.view') }} " class="btn btn-rounded btn-success md-5" style="float: right"> View Medium </a>

               </div>
               <!-- /.box-header -->

               <div class="box-body">
                 <div class="row">
                   <div class="col">
                       <form  method="POST" action=" {{Route('admin-medium.store')}} "> <!--form-->
                        @csrf
                         <div class="row">
                           <div class="col-12">	

                            <!--row Stared here-->
                            <div class="row">
                                <div class="col-md-12"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <h5>Medium Name<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="medium_name" class="form-control" required="" aria-invalid="false"> </div>
                                    </div>
                                </div><!--col-6 Ended here-->
                            </div>
                            <!--row Ended here-->

                            <!--row Stared here-->
                            <div class="row">
                                <div class="col-md-12"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <h5>Medium Status </h5>
                                        <div class="controls">
                                            <select name="medium_status" id="select"  class="form-control">
                                                <option selected="" disabled>Select Medium Status</option>
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
