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
use App\Models\online_course_video ;


class AdminManagesCourseVideosController extends Controller
{
    //AddVideos
    public function AddVideos() {
        return view('backend.online_class_videos.add') ;
    }

    //AJAX REQUEST for getting the course value
    public function AJAXREQUESTOGETCOURSENAMEDATA(Request $request) {
        $classdata = $request->post('classdata') ;  //patient name
        $data = Course::all()->where('course_class' , $classdata)->where('mode_of_class' , 'online')->where('course_status' , 'active') ;
        foreach ($data as $key=>$couse_name) {
            $html = '<option value="'. $couse_name->id .'" > '. $couse_name->course_name .' </option>' ;
            echo $html;
        }
    }

    //Store Lectures
    public function StoreLectures(Request $request) {
        //validations
        $validation = $request->validate([
            'classs_videos'=>'required',
            'course_name_from_courses'=>'required',
            'lecture_topics'=>'required',
        ]) ;

        $data = new online_course_video() ;
        $data->classs_videos = $request->classs_videos ;
        $data->course_name_from_courses = $request->course_name_from_courses ;
        $data->lecture_topics = $request->lecture_topics ;
        $data->mode_of_upload = $request->mode_of_upload ;
        //Lecture Videos [leactures_videos]
        $leactures_videos = array() ;
        if($multi_image_filess = $request->file('leactures_videos')) {
            foreach($multi_image_filess as $multi_image_file) {
                $multi_image_name = md5(rand(1000 , 10000)) ;
                $ext = strtolower($multi_image_file->getClientOriginalExtension()) ;
                $multi_image_full_name = $multi_image_name.'.'.$ext ;
                $upload_path = 'upload/leactures_videos/' ;

                $multi_image_url = $upload_path.$multi_image_full_name ;
                $multi_image_file->move(public_path('upload/leactures_videos/'),$multi_image_full_name)  ;
                $leactures_videos[] = $multi_image_url ;
                $data->leactures_videos = implode('|' , $leactures_videos) ;
            }
        }
        $data->lecture_url = $request->lecture_url ; //urls
        //Lectures pdf file [ study_materials ]
        $study_materials = array() ;
        if($multi_image_filess = $request->file('study_materials')) {
            foreach($multi_image_filess as $multi_image_file) {
                $multi_image_name = md5(rand(1000 , 10000)) ;
                $ext = strtolower($multi_image_file->getClientOriginalExtension()) ;
                $multi_image_full_name = $multi_image_name.'.'.$ext ;
                $upload_path = 'upload/study_materials/' ;

                $multi_image_url = $upload_path.$multi_image_full_name ;
                $multi_image_file->move(public_path('upload/study_materials/'),$multi_image_full_name)  ;
                $study_materials[] = $multi_image_url ;
                $data->study_materials = implode('|' , $study_materials) ;
            }
        }
        //upload brochure end here
        $data->video_uploaded_date = $request->video_uploaded_date ;
        $data->video_availabel_upto_date = $request->video_availabel_upto_date ;
        $data->lecture_status = $request->lecture_status ;
        $data->save() ;
        $notification = array(
            'message' => "Successfull",
            'alert-type' => 'success'
        ) ;
        return redirect()->route('admin-online-videos.add')->with($notification) ;
    }

    //view
    public function ViewLectures() {
        $data = Course::latest()->where('mode_of_class' , 'online')->where('course_status' , 'active')->get() ;
        return view('backend.online_class_videos.view' , compact('data')) ;
    }

    //View All Lectures
    public function ViewDateWiseLEctures($id) {
        $data = online_course_video::orderBy('video_uploaded_date','desc')->where('course_name_from_courses' , $id)->get() ;
        return view('backend.online_class_videos.dateview' , compact(['data'])) ;
    }
}
