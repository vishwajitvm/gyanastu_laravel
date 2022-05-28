<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\board ;
use App\Models\medium ;
use App\Models\Stream ;
use App\Models\subject ;
use App\Models\Center ;
use App\Models\Course;
use App\Models\User ;
use Illuminate\Support\Facades\Auth ;

class ManageCOURSESAdminController extends Controller
{
    //Add Course here
    public function AddCourse() {
        $board = board::all() ;
        $language = medium::all() ;
        $courseStream = Stream::all() ;
        $subjects = subject::all() ;
        $centers = Center::all()->unique('center_state') ;
        $id = Auth::user()->id ;
        $user = User::find($id) ;

        return view('backend.courses.add' , compact(['board' , 'language' , 'courseStream' , 'subjects' , 'centers' , 'user'])) ;
    }

    //AJAX REQUEST FOR GETTING THE STATE CENTER DATA HERE
    public function AJAXREQUESTToGETCENTERSDATA(Request $request) {
        $stateData = $request->post('stateData') ;  //patient name
        $data = Center::all()->where('center_state' , $stateData) ;
        foreach ($data as $key=>$centers) {
            $html = '<option value="'. $centers->center_name .'" > '. $centers->center_name .' </option>' ;
            echo $html;
        }
    }

    //Store all data
    public function StoreCourse(Request $request) {
        //validation
        $validation = $request->validate([
            'publisher_name'=>'required',
            'publisher_email'=>'required',
            'course_name'=>'required',
            'type_of_course'=>'required',
            'subject_selected'=>'required',
            'course_total_price'=>'required',
        ]) ;

        $data = new Course() ;
        $data->publisher_name = $request->publisher_name ;
        $data->publisher_email = $request->publisher_email ;
        $data->course_name = $request->course_name ;
        $data->type_of_course = $request->type_of_course ;
        $data->board_type = $request->board_type ;
        $data->course_class = $request->course_class ;
        $data->medium_type = $request->medium_type ;
        $data->stream_type = $request->stream_type ;
        $data->subject_selected = $request->subject_selected ;
        $data->mode_of_class = $request->mode_of_class ;
        $data->sel_state = $request->sel_state ;
        $data->sel_center_name = $request->sel_center_name ;
        $data->center_address = $request->center_address ;
        $data->meeting_name = $request->meeting_name ;
        $data->meeting_description = $request->meeting_description ;
        $data->meeting_link = $request->meeting_link ;
        //banner image
        if($request->file('course_banner_image')) {
            $file = $request->file('course_banner_image') ;
            @unlink(public_path('upload/banner_image/'.$data->course_banner_image)) ;
            //now we have to generate the name for images
            $filename = date('YmdHi').$file->getClientOriginalName() ;
            $file->move(public_path('upload/banner_image'),$filename) ;
            $data['course_banner_image'] = $filename ;
        }
        //course_broucher
        if($request->file('course_broucher')) {
            $file = $request->file('course_broucher') ;
            @unlink(public_path('upload/course_brochers/'.$data->course_broucher)) ;
            //now we have to generate the name for images
            $filename = date('YmdHi').$file->getClientOriginalName() ;
            $file->move(public_path('upload/course_brochers'),$filename) ;
            $data['course_broucher'] = $filename ;
        }
        //Course Sample Video [course_sample_video]
        $course_sample_video = array() ;
        if($multi_image_filess = $request->file('course_sample_video')) {
            foreach($multi_image_filess as $multi_image_file) {
                $multi_image_name = md5(rand(1000 , 10000)) ;
                $ext = strtolower($multi_image_file->getClientOriginalExtension()) ;
                $multi_image_full_name = $multi_image_name.'.'.$ext ;
                // $upload_path = 'public/multiple_image/' ;
                $upload_path = 'upload/course_sample_videos/' ;

                $multi_image_url = $upload_path.$multi_image_full_name ;
                $multi_image_file->move(public_path('upload/course_sample_videos/'),$multi_image_full_name)  ;
                $course_sample_video[] = $multi_image_url ;
                $data->course_sample_video = implode('|' , $course_sample_video) ;
            }
        }
        //Course sample pdf file to real upload here
        $course_sample_pdf = array() ;
        if($multi_image_filess = $request->file('course_sample_pdf')) {
            foreach($multi_image_filess as $multi_image_file) {
                $multi_image_name = md5(rand(1000 , 10000)) ;
                $ext = strtolower($multi_image_file->getClientOriginalExtension()) ;
                $multi_image_full_name = $multi_image_name.'.'.$ext ;
                // $upload_path = 'public/multiple_image/' ;
                $upload_path = 'upload/course_sample_pdf/' ;

                $multi_image_url = $upload_path.$multi_image_full_name ;
                $multi_image_file->move(public_path('upload/course_sample_pdf/'),$multi_image_full_name)  ;
                $course_sample_pdf[] = $multi_image_url ;
                $data->course_sample_pdf = implode('|' , $course_sample_pdf) ;
            }
        }
        //upload brochure end here
        $data->short_description = $request->short_description ;
        $data->course_base_price = $request->course_base_price ;
        $data->course_discount = $request->course_discount ;
        $data->course_total_price = $request->course_total_price ;
        $data->course_status = $request->course_status ;
        $data->save();
        $notification = array(
            'message' => "$request->course_name Created Successfully",
            'alert-type' => 'success'
        ) ;
        return redirect()->route('admin-course.add')->with($notification) ;
    }

    //View the courses 
    public function ViewCourse() {
        $data = Course::latest()->get() ;
        return view('backend.courses.view' , compact(['data'])) ;
    }

    //edit
    public function EditCourse($id) {
        $data = Course::find($id) ;
        $board = board::all() ;
        $language = medium::all() ;
        $courseStream = Stream::all() ;
        $subjects = subject::all() ;
        $centers = Center::all()->unique('center_state') ;
        $center2 = Center::all() ;
        $id = Auth::user()->id ;
        $user = User::find($id) ;

        return view('backend.courses.edit' , compact(['data' ,'board' , 'language' , 'courseStream' , 'subjects' , 'centers' , 'user' , 'center2'])) ;
    }

    //Update course data here
    public function UpdateCourse(Request $request,$id) {
                //validation
                $validation = $request->validate([
                    // 'publisher_name'=>'required',
                    // 'publisher_email'=>'required',
                    'course_name'=>'required',
                    'type_of_course'=>'required',
                    'course_class'=>'required',
                    'subject_selected'=>'required',
                    'course_total_price'=>'required',
                ]) ;
        
                $data = Course::find($id) ;
                $data->publisher_name = $request->publisher_name ;
                $data->publisher_email = $request->publisher_email ;
                $data->course_name = $request->course_name ;
                $data->type_of_course = $request->type_of_course ;
                $data->board_type = $request->board_type ;
                $data->course_class = $request->course_class ;
                $data->medium_type = $request->medium_type ;
                $data->stream_type = $request->stream_type ;
                $data->subject_selected = $request->subject_selected ;
                $data->mode_of_class = $request->mode_of_class ;
                $data->sel_state = $request->sel_state ;
                $data->sel_center_name = $request->sel_center_name ;
                $data->center_address = $request->center_address ;
                $data->meeting_name = $request->meeting_name ;
                $data->meeting_description = $request->meeting_description ;
                $data->meeting_link = $request->meeting_link ;
                //banner image
                if($request->file('course_banner_image')) {
                    $file = $request->file('course_banner_image') ;
                    @unlink(public_path('upload/banner_image/'.$data->course_banner_image)) ;
                    //now we have to generate the name for images
                    $filename = date('YmdHi').$file->getClientOriginalName() ;
                    $file->move(public_path('upload/banner_image'),$filename) ;
                    $data['course_banner_image'] = $filename ;
                }
                //course_broucher
                if($request->file('course_broucher')) {
                    $file = $request->file('course_broucher') ;
                    @unlink(public_path('upload/course_brochers/'.$data->course_broucher)) ;
                    //now we have to generate the name for images
                    $filename = date('YmdHi').$file->getClientOriginalName() ;
                    $file->move(public_path('upload/course_brochers'),$filename) ;
                    $data['course_broucher'] = $filename ;
                }
                //Course Sample Video [course_sample_video]
                $course_sample_video = array() ;
                if($multi_image_filess = $request->file('course_sample_video')) {
                    foreach($multi_image_filess as $multi_image_file) {
                        $multi_image_name = md5(rand(1000 , 10000)) ;
                        $ext = strtolower($multi_image_file->getClientOriginalExtension()) ;
                        $multi_image_full_name = $multi_image_name.'.'.$ext ;
                        // $upload_path = 'public/multiple_image/' ;
                        $upload_path = 'upload/course_sample_videos/' ;
        
                        $multi_image_url = $upload_path.$multi_image_full_name ;
                        $multi_image_file->move(public_path('upload/course_sample_videos/'),$multi_image_full_name)  ;
                        $course_sample_video[] = $multi_image_url ;
                        $data->course_sample_video = implode('|' , $course_sample_video) ;
                    }
                }
                //Course sample pdf file to real upload here
                $course_sample_pdf = array() ;
                if($multi_image_filess = $request->file('course_sample_pdf')) {
                    foreach($multi_image_filess as $multi_image_file) {
                        $multi_image_name = md5(rand(1000 , 10000)) ;
                        $ext = strtolower($multi_image_file->getClientOriginalExtension()) ;
                        $multi_image_full_name = $multi_image_name.'.'.$ext ;
                        // $upload_path = 'public/multiple_image/' ;
                        $upload_path = 'upload/course_sample_pdf/' ;
        
                        $multi_image_url = $upload_path.$multi_image_full_name ;
                        $multi_image_file->move(public_path('upload/course_sample_pdf/'),$multi_image_full_name)  ;
                        $course_sample_pdf[] = $multi_image_url ;
                        $data->course_sample_pdf = implode('|' , $course_sample_pdf) ;
                    }
                }
                //upload brochure end here
                $data->short_description = $request->short_description ;
                $data->course_base_price = $request->course_base_price ;
                $data->course_discount = $request->course_discount ;
                $data->course_total_price = $request->course_total_price ;
                $data->course_status = $request->course_status ;
                $data->save();
                $notification = array(
                    'message' => "$request->course_name Updated Successfully",
                    'alert-type' => 'success'
                ) ;
                return redirect()->route('admin-course.view')->with($notification) ;
    }

    //delete
    public function DeleteCourse($id) {
        $user = Course::find($id) ;
        $user->delete() ;
        $notification = array(
            'message' => 'Course Deleted Successfully',
            'alert-type' => 'info'
        ) ;
        return redirect()->route('admin-course.view')->with($notification) ;

    }
}
