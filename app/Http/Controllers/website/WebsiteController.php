<?php

namespace App\Http\Controllers\website;

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


class WebsiteController extends Controller
{
    public function checkAuthentication() {
        if(!Auth::user()) {
            return redirect()->route('login') ;
        }
        else{
            $id = Auth::user()->id ;
            $user = User::find($id) ;
            if($user->usertype == 'admin') {
                return redirect()->route('dashboard') ;
            }
            else if($user->usertype == 'user') {
                return redirect()->route('userdashboard') ;
            }
            else{
                return redirect()->route('login') ;
            }
        }
    }

    //about us
    public function aboutus() {
        return view('website.pages.aboutus') ;
    }

    //contact us
    public function ContactUs() {
        return view('website.pages.contactus') ;
    }

    //Course List online
    public function CourseList() {
        $data = Course::all()->where('mode_of_class' , 'online')->where('course_status' , 'active') ;
        return view('website.pages.course.allcourse' , compact(['data'])) ;
    }

    //Course lIst Virtual Clases
    public function CourseListVirtual() {
        $data = Course::all()->where('mode_of_class' , 'virtual')->where('course_status' , 'active') ;
        return view('website.pages.course.allcourse' , compact(['data'])) ;

    }

    //single course
    public function SingleCourse($id) {
        $data = Course::find($id) ;
        return view('website.pages.course.singlecourse' , compact(['data'])) ;
    }

    //gallery 
    public function Gallery() {
        return view('website.pages.gallery') ;
    }

    //Admission
    public function Admission() {
        return view('website.pages.admission') ;
    }

    //Testimonials
    public function Testimonials() {
        return view('website.pages.testimonials') ;
    }

    //terms and conditions
    public function TermsAndConditions() {
        return view('website.pages.terms_conditions') ;
    }

    //Privacy policys
    public function PrivacyPolicy() {
        return view('website.pages.privacy_policy') ;  
    }
}
