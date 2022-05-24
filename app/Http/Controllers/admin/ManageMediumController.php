<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User ;
use App\Models\board ;
use App\Models\medium ;

class ManageMediumController extends Controller
{
    //add
    public function addMediumController() {
        return view('backend.medium.add') ;
    }

    //store
    public function StoreMediumController(Request $request) {
        $data = new medium() ;
        $data->medium_name = $request->medium_name ;
        $data->medium_status = $request->medium_status ;
        $data->save() ;
        $notification = array(
            'message' => "$request->medium_name Added Successfully",
            'alert-type' => 'success'
        ) ;
        return redirect()->route('admin-medium.add')->with($notification) ;
    }

    //view
    public function ViewMediumController() {
        $data = medium::latest()->get() ;
        return view('backend.medium.view' ,compact(['data'])) ;
    }

    //dlete
    public function DeleteMediumController($id) {
        $user = medium::find($id) ;
        $user->delete() ;
        $notification = array(
            'message' => 'Medium Deleted Successfully',
            'alert-type' => 'info'
        ) ;
        return redirect()->route('admin-medium.view')->with($notification) ;

    }
}
