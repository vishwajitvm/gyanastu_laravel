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
                 <h4 class="box-title">Edit Course ( {{ Str::upper($data->course_name) }} ) </h4>
                 <a href=" {{ route('admin-course.view') }} " class="btn btn-rounded btn-success md-5" style="float: right"> View Board </a>

               </div>
               <!-- /.box-header -->

               <div class="box-body">
                 <div class="row">
                   <div class="col">
                       @if ($errors->any())
                           <div class="my-3">
                                @foreach ($errors->all() as $err)
                                    <li class="font-weight-bold text-danger "> {{ $err }} </li>
                                @endforeach
                           </div>
                       @endif
                       <form  method="POST" action="{{Route('admin-course.update',$data->id)}}"  enctype="multipart/form-data"> <!--form  -->
                        @csrf
                         <div class="row">
                           <div class="col-12">	

                            <!--row Stared here-->
                            <div class="row">
                                <div class="col-md-6"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <h5>Your Name </h5>
                                        <div class="controls">
                                            <input type="text" name="publisher_name" value="{{ $user->name }}" class="form-control"  readonly aria-invalid="false"> </div>
                                    </div>
                                </div><!--col-6 Ended here-->

                                <div class="col-md-6"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <h5>Your Email</h5>
                                        <div class="controls">
                                            <input type="text" name="publisher_email" value=" {{ $user->email }} " class="form-control" readonly  aria-invalid="false"> </div>
                                    </div>
                                </div><!--col-6 Ended here-->

                                <div class="col-md-12"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <h5>Course Name
                                             {{-- <span class="float-right text-danger font-weight-bold">
                                                  @error('course_name')
                                                    {{ $message }}
                                                  @enderror
                                             </span> --}}
                                            </h5>
                                        <div class="controls">
                                            <input type="text" name="course_name" value="{{ $data->course_name }}"  class="form-control"   aria-invalid="false"> </div>
                                    </div>
                                </div><!--col-6 Ended here-->
                                

                                <div class="col-md-6"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <h5>Type Of Course
                                            {{-- <span class="float-right text-danger font-weight-bold">
                                                @error('type_of_course')
                                                  {{ $message }}
                                                @enderror
                                           </span> --}}
                                        </h5>
                                        <div class="controls">
                                            <select name="type_of_course"   class="form-control">
                                                <option selected="" disabled>Select Course type</option>
                                                <option value="Single" {{ $data->type_of_course=="Single"?"selected":"" }}>Single Subject</option>
                                                <option value="Package" {{ $data->type_of_course=="Package"?"selected":"" }}>Package Subjects</option>
                                            </select>
                                        </div>
                                    </div>
                                </div><!--col-6 Ended here-->

                                <div class="col-md-6"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <h5>Select Board </h5>
                                        <div class="controls">
                                            <select name="board_type"   class="form-control">
                                                <option selected="" disabled>Select Board</option>
                                                @foreach ($board as $item1)
                                                    <option value="{{ $item1->board_name }}" {{ $data->board_type==$item1->board_name?"selected":"" }} > {{ Str::upper($item1->board_name) }} </option>
                                                @endforeach

                                            </select>
                                        </div>
                                    </div>
                                </div><!--col-6 Ended here-->

                                <div class="col-md-12"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <h5>Select Class </h5>
                                        <div class="controls">
                                            <select name="course_class"   class="form-control">
                                                <option selected="" disabled>Select Class</option>
                                                    <option value="9" {{ $data->course_class == "9"?"selected":"" }} > 9th class </option>
                                                    <option value="10" {{ $data->course_class == "10"?"selected":"" }}> 10th class </option>
                                                    <option value="11" {{ $data->course_class == "11"?"selected":"" }}> 11th class </option>
                                                    <option value="12" {{ $data->course_class == "12"?"selected":"" }}> 12th class </option>

                                            </select>
                                        </div>
                                    </div>
                                </div><!--col-6 Ended here-->


                                <div class="col-md-6"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <h5>Select Medium </h5>
                                        <div class="controls">
                                            <select name="medium_type" id="select"  class="form-control">
                                                <option selected="" disabled>Select Medium</option>
                                                @foreach ($language as $item2)
                                                    <option value="{{ $item2->medium_name }}" {{ $data->medium_type==$item2->medium_name?"selected":"" }}> {{ Str::upper($item2->medium_name ) }} </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div><!--col-6 Ended here-->

                                <div class="col-md-6"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <h5>Select Stream </h5>
                                        <div class="controls">
                                            <select name="stream_type" id="select"  class="form-control">
                                                <option selected="" disabled>Select Stream</option>
                                                @foreach ($courseStream as $item3)
                                                    <option value="{{ $item3->stream_name }}"  {{ $data->stream_type==$item3->stream_name?"selected":"" }}> {{ Str::upper($item3->stream_name ) }} </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div><!--col-6 Ended here-->


                            </div>
                            <!--row Ended here-->

                            @foreach ( $data->subject_selected  as $itemsss)
                                {{ $itemsss }}
                            @endforeach
     

                            <div class="row">
                                <div class="col-md-6 ">
                                    <div class="form-group">
                                      <h5>Select Subjects
                                        {{-- <span class="float-right text-danger font-weight-bold">
                                            @error('subject_selected')
                                              {{ $message }}
                                            @enderror
                                       </span> --}}
                                      </h5>
                                      <select class="form-control select2" name="subject_selected[]" multiple="multiple" data-placeholder="Select Subjects" style="width: 100%;">
                                        
                                        @foreach ($subjects as $item4)
                                            <option value="{{ $item4->subject_name }}" 
                                                @foreach ( $data->subject_selected  as $itemsss)
                                                {{ $itemsss == $item4->subject_name?"selected":"" }}
                                                @endforeach
                                                >{{ Str::upper($item4->subject_name) }}</option>
                                        @endforeach
                                      </select>
                                    </div>
                                </div><!--col 6-->

                                <div class="col-md-6"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <h5>Select Mode of Class </h5>
                                        <div class="controls">
                                            <select name="mode_of_class" id="select"  class="form-control" onchange="classModeChecker(this);">
                                                <option selected="" >Select Mode of Class</option>
                                                <option value="virtual" {{ $data->mode_of_class == "virtual"?"selected":""  }} >Virtual or Offline Classes</option>
                                                <option value="online" {{ $data->mode_of_class == "online"?"selected":""  }} >Online Classes</option>
                                            </select>
                                        </div>
                                    </div>
                                </div><!--col-6 Ended here-->
                            </div>

                            <div class="row" id="online_course_row" style="display: none;"> <!--Online Classes section Start-->
                                
                                <div class="col-md-12"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <h5>Meeting Name</h5>
                                        <div class="controls">
                                            <input type="text" name="meeting_name" value="{{ $data->meeting_name }}"  class="form-control"  aria-invalid="false"> </div>
                                    </div>
                                </div><!--col-6 Ended here-->

                                <div class="col-md-12"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <h5>Meeting description</h5>
                                        <div class="controls">
                                            <textarea name="meeting_description"  class="form-control" cols="30" rows="3">{{ $data->meeting_description }}</textarea>
                                        </div>
                                    </div>
                                </div><!--col-6 Ended here-->

                                <div class="col-md-12"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <h5>Meeting Link</h5>
                                        <div class="controls">
                                            <input type="url" name="meeting_link" value="{{ $data->meeting_link }}"  class="form-control" placeholder="Http://" aria-invalid="false"> </div>
                                    </div>
                                </div><!--col-6 Ended here-->
                            </div> <!--Online Classes section end-->

                            <div class="row" id="virtual_class_row" style="display: none;">

                                <div class="col-md-12"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <h5>Select State of Virtual Class </h5>
                                        <div class="controls">
                                            <select name="sel_state" id="select_state_of_virtualclass"  class="form-control">
                                                <option selected="" disabled>Select State of Virtual Class</option>
                                                @foreach ($centers as $item5)
                                                    <option value="{{ $item5->center_state }}" {{ $data->sel_state == $item5->center_state?"selected":"" }} >{{ $item5->center_state }}</option>
                                                @endforeach

                                            </select>
                                        </div>
                                    </div>
                                </div><!--col-6 Ended here-->

                                <div class="col-md-12"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <h5>Select Center Name of Virtual Class </h5>
                                        <div class="controls">
                                            <select name="sel_center_name" id="virtualclass_center"  class="form-control">
                                                <option selected="" disabled>Select Center Name of Virtual Class</option>
                                                @foreach ($center2 as $item6)
                                                    <option value="{{ $item6->center_name }}" {{ $data->sel_center_name = $item6->center_name?"selected":"" }}>{{ $item6->center_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div><!--col-6 Ended here-->

                            </div>

                            <div class="row">
                                
                                <div class="col-md-6"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <h5>Course Banner Images</h5>
                                        <div class="controls">
                                            <input type="file" name="course_banner_image" value="{{ $data->course_banner_image }}"  class="form-control" accept="image/*">
                                        </div>
                                    </div>
                                </div><!--col-6 Ended here-->

                                <div class="col-md-6"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <h5>Course Brocher PDF</h5>
                                        <div class="controls">
                                            <input type="file" name="course_broucher" value="{{ $data->course_broucher }}" class="form-control"  accept="application/pdf,application/vnd.ms-excel">
                                        </div>
                                    </div>
                                </div><!--col-6 Ended here-->

                                <div class="col-md-6"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <h5>Sample Video Upload</h5>
                                        <div class="controls">
                                            <input type="file" name="course_sample_video[]" multiple value="{{ $data->course_sample_video }}"  class="form-control" accept="video/mp4,video/x-m4v,video/*" >
                                        </div>
                                    </div>
                                </div><!--col-6 Ended here-->

                                <div class="col-md-6"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <h5>Sample Study Material Upload</h5>
                                        <div class="controls">
                                            <input type="file" name="course_sample_pdf[]" multiple value="{{ $data->course_sample_pdf }}" class="form-control" accept="application/pdf,application/vnd.ms-excel" >
                                        </div>
                                    </div>
                                </div><!--col-6 Ended here-->

                                
                                <div class="col-md-12"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <h5>Course Short description</h5>
                                        <div class="controls">
                                            <textarea  class="form-control" name="short_description"  cols="30" rows="4">{{$data->short_description}}</textarea>
                                        </div>
                                    </div>
                                </div><!--col-6 Ended here-->

                                <div class="col-md-6"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <h5>Course Base Price</h5>
                                        <div class="controls">
                                            <input type="number" name="course_base_price" value="{{ $data->course_base_price }}" id="total_couse_price" onkeyup="getPrice()"  class="form-control" placeholder="₹" >
                                        </div>
                                    </div>
                                </div><!--col-6 Ended here-->

                                <div class="col-md-6"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <h5>Course Discount in Percentage(%)</h5>
                                        <div class="controls">
                                            <input type="number" name="course_discount" value="{{ $data->course_discount }}" id="total_discount_percentage" onkeyup="getPrice()"  class="form-control"  >
                                        </div>
                                    </div>
                                </div><!--col-6 Ended here-->

                                <div class="col-md-12"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <h5>Course Discount price in ₹
                                            {{-- <span class="float-right text-danger font-weight-bold">
                                                @error('course_total_price')
                                                  {{ $message }}
                                                @enderror
                                           </span> --}}
                                        </h5>
                                        <div class="controls">
                                            <input type="number"  name="course_total_price" value="{{ $data->course_total_price }}" id="total_price_with_discount"  class="form-control"  readonly>
                                        </div>
                                    </div>
                                </div><!--col-6 Ended here-->

                            </div>

                            <!--row Stared here-->
                            <div class="row">
                                <div class="col-md-12"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <h5>Course Status </h5>
                                        <div class="controls">
                                            <select name="course_status" id="select"  class="form-control">
                                                <option selected="" disabled>Select Status</option>
                                                <option value="active" {{ $data->course_status == "active"?"selected":"" }} >Active</option>
                                                <option value="inactive" {{ $data->course_status == "inactive"?"selected":"" }}>Inactive</option>

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

<script>
    getPrice = function() {
  var numVal1 = Number(document.getElementById("total_couse_price").value);
  var numVal2 = Number(document.getElementById("total_discount_percentage").value) / 100;

  var totalValue = numVal1 - (numVal1 * numVal2)
  document.getElementById("total_price_with_discount").value = totalValue.toFixed(2);
}
</script>

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

<script>
    function classModeChecker(that) {
        if (that.value == 'virtual') {
            document.getElementById("virtual_class_row").style.display = "block";
        }
        else{
            document.getElementById("virtual_class_row").style.display = "none";
        }

        if (that.value == 'online') {
            document.getElementById("online_course_row").style.display = "block";
        }
        else{
            document.getElementById("online_course_row").style.display = "none";
        }

    }
</script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {
        $("#select_state_of_virtualclass").change(function() {
            let stateData = $(this).val() ;
            jQuery.ajax({
                url: '/ajax-get-state-center-data',
                type: 'post',
                data: 'stateData='+stateData+'&_token={{ csrf_token() }}',
                success: function(result){
                    jQuery('#virtualclass_center').html(result) ;
                }
            })
        })
    })
</script>





@endsection
