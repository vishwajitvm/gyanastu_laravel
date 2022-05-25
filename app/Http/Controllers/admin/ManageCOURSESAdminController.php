<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\board ;
use App\Models\medium ;
use App\Models\Stream ;
use App\Models\subject ;
use App\Models\Center ;
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
        $centers = Center::all() ;
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
}
