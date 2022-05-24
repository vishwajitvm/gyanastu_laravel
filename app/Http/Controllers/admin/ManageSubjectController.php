<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\subject ;

class ManageSubjectController extends Controller
{
    //addsubject
    public function addSubjectController() {
        return view('backend.subject.add') ;
    }

    //store
    public function StoreSubjectController(Request $request) {
        $data = new subject() ;
        $data->subject_name = $request->subject_name ;
        $data->subject_status = $request->subject_status ;
        $data->save() ;
        $notification = array(
            'message' => "$request->subject_name Subject Added Successfully",
            'alert-type' => 'success'
        ) ;
        return redirect()->route('admin-subject.view')->with($notification) ;
    }

    //view
    public function viewSubjectController() {
        $data = subject::latest()->get() ;
        return view('backend.subject.view' ,compact(['data'])) ;
    }

    //delete
    public function DeleteSubjectController($id) {
        $user = subject::find($id) ;
        $user->delete() ;
        $notification = array(
            'message' => 'Subject Deleted Successfully',
            'alert-type' => 'info'
        ) ;
        return redirect()->route('admin-subject.view')->with($notification) ;

    }
}
