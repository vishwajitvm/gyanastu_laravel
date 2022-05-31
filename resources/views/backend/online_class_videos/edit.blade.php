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
                 <h4 class="box-title">Edit  courses</h4>
                 <a href=" {{ route('admin-online-videos.view') }} " class="btn btn-rounded btn-success md-5" style="float: right"> View Lectures </a>

               </div>
               <!-- /.box-header -->

               <div class="box-body">
                 <div class="row">
                   <div class="col">
                            <!--error handling-->
                            @if ($errors->any())
                                <div class="my-3">
                                    @foreach ($errors->all() as $err)
                                        <li class="font-weight-bold text-danger "> {{ $err }} </li>
                                    @endforeach
                                </div>
                            @endif
                            <!--error handling-->
                       <form novalidate method="POST" action=" {{Route('admin-online-videos.update',$data->id)}}" enctype="multipart/form-data"> <!--form-->
                        @csrf
                         <div class="row">
                           <div class="col-12">	

                            <!--row Stared here-->
                            <div class="row">
                                <div class="col-md-6"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <h5>Select Class <span style="color: red">*</span></h5>
                                        <div class="controls">
                                            <select name="classs_videos"  class="form-control" id="course_class">
                                                <option selected="" disabled>Select Class</option>
                                                    <option value="9" {{ $data->classs_videos == "9"?"selected":"" }} > 9th class </option>
                                                    <option value="10" {{ $data->classs_videos == "10"?"selected":"" }}> 10th class </option>
                                                    <option value="11" {{ $data->classs_videos == "11"?"selected":"" }}> 11th class </option>
                                                    <option value="12" {{ $data->classs_videos == "12"?"selected":"" }}> 12th class </option>
                                            </select>
                                        </div>
                                    </div>
                                </div><!--col-6 Ended here-->

                                <div class="col-md-6"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <h5>Select Course <span style="color: red">*</span></h5>
                                        <div class="controls">
                                            <select name="course_name_from_courses"   class="form-control" id="course_names_data">
                                                <option selected="" disabled>Select Course</option>
                                                @foreach ($coursedata as $row)
                                                    <option value="{{ $row->id }}" {{ $data->course_name_from_courses == $row->id?"selected":"" }}> {{ $row->course_name }} </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div><!--col-6 Ended here-->

                                <div class="col-md-12"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <h5>Lecture Topic <span style="color: red">*</span> </h5>
                                        <div class="controls">
                                            <input type="text" name="lecture_topics" value="{{ $data->lecture_topics }}"   class="form-control" required />
                                        </div>
                                    </div>
                                </div><!--col-6 Ended here-->


                                <div class="col-md-12"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <h5>Select Mode of Upload </h5>
                                        <div class="controls">
                                            <select name="mode_of_upload" id="select"  class="form-control" onchange="classModeChecker(this);">
                                                <option selected="" >Select Mode of Lecture</option>
                                                <option value="VideoUpload" {{ $data->mode_of_upload == "VideoUpload"?"selected":"" }}>Video Upload</option>
                                                <option value="url" {{ $data->mode_of_upload == "url"?"selected":"" }}>Youtube Url</option>
                                                <option value="pdf" {{ $data->mode_of_upload == "pdf"?"selected":"" }}>Class Pdf</option>
                                            </select>
                                        </div>
                                    </div>
                                </div><!--col-6 Ended here-->
                            </div>
                            <!--row Ended here-->

                            <div class="row" id="video_upload_data" style="display: none">
                                <div class="col-md-12"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <h5>Upload Lecture </h5>
                                        <div class="controls">
                                            <input type="file" name="leactures_videos[]" value="{{ $data->leactures_videos }}" multiple  class="form-control" accept="video/mp4,video/x-m4v,video/*" >
                                        </div>
                                    </div>
                                </div><!--col-6 Ended here-->
                            </div>

                            <div class="row" id="video_urls_data" style="display: none">
                                <div class="col-md-12"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <h5>Upload Video Urls <span class="text-warning"> [YOUTUBE URLS] </span></h5>
                                        <div class="controls">
                                            <input type="url" name="lecture_url" value="{{ $data->lecture_url }}"  class="form-control" placeholder="Http://" aria-invalid="false"> </div>
                                    </div>
                                </div><!--col-6 Ended here-->
                            </div>

                            <div class="row" id="upload_lecture_data" style="display: none">
                                <div class="col-md-12"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <h5>Upload Lecture Pdf <span class="text-warning"> [PDF] </span> </h5>
                                        <div class="controls">
                                            <input type="file" name="study_materials[]" value="{{ $data->study_materials }}" multiple  class="form-control" accept="application/pdf,application/vnd.ms-excel" >
                                        </div>
                                    </div>
                                </div><!--col-6 Ended here-->
                            </div>

                            <div class="row">
                                <div class="col-md-6"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <h5>Todays Date</h5>
                                        <div class="controls">
                                            <input type="date" name="video_uploaded_date" value="{{ $data->video_uploaded_date }}"  class="form-control"  aria-invalid="false"> </div>
                                    </div>
                                </div><!--col-6 Ended here-->

                                <div class="col-md-6"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <h5>Select Date Until Video is Online</h5>
                                        <div class="controls">
                                            <input type="date" name="video_availabel_upto_date" value="{{ $data->video_availabel_upto_date }}"  class="form-control"  aria-invalid="false"> </div>
                                    </div>
                                </div><!--col-6 Ended here-->
                            </div>


                            <!--row Stared here-->
                            <div class="row">
                                <div class="col-md-12"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <h5>Lecture Status </h5>
                                        <div class="controls">
                                            <select name="lecture_status"  class="form-control">
                                                <option selected="" disabled>Select Lecture Status</option>
                                                <option value="active" {{ $data->lecture_status == "active"?"selected":"" }} >Active</option>
                                                <option value="inactive" {{ $data->lecture_status == "inactive"?"selected":"" }}>Inactive</option>
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

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script>
    $(document).ready(function() {
        $("#course_class").change(function() {
            let classdata = $(this).val() ;
            jQuery.ajax({
                url: '/ajax-get-course-name-data',
                type: 'post',
                data: 'classdata='+classdata+'&_token={{ csrf_token() }}',
                success: function(result){
                    jQuery('#course_names_data').html(result) ;
                }
            })
        })
    })
</script>

<script>
    function classModeChecker(that) {
        if (that.value == 'VideoUpload') {
            document.getElementById("video_upload_data").style.display = "block";
        }
        else{
            document.getElementById("video_upload_data").style.display = "none";
        }

        if (that.value == 'url') {
            document.getElementById("video_urls_data").style.display = "block";
        }
        else{
            document.getElementById("video_urls_data").style.display = "none";
        }

        if (that.value == 'pdf') {
            document.getElementById("upload_lecture_data").style.display = "block";
        }
        else{
            document.getElementById("upload_lecture_data").style.display = "none";
        }
    }
</script>

@endsection
