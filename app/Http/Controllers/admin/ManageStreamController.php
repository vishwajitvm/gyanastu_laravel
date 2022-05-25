<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Stream ;

class ManageStreamController extends Controller
{
    //add
    public function AddStreamController() {
        return view('backend.stream.add') ;
    }

    //store
    public function StoreStreamController(Request $request) {
        $data = new Stream() ;
        $data->stream_name = $request->stream_name ;
        $data->stream_status = $request->stream_status ;
        $data->save() ;
        $notification = array(
            'message' => "$request->stream_name  Added Successfully",
            'alert-type' => 'success'
        ) ;
        return redirect()->route('admin-stream.view')->with($notification) ;

    }

    //view
    public function ViewStreamController() {
        $data = Stream::latest()->get() ;
        return view('backend.stream.view' , compact(['data'])) ;
    }

    //delete 
    public function DeleteStreamController($id) {
        $user = Stream::find($id) ;
        $user->delete() ;
        $notification = array(
            'message' => 'Stream Deleted Successfully',
            'alert-type' => 'info'
        ) ;
        return redirect()->route('admin-stream.view')->with($notification) ;

    }

}
