<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use App\Models\Center ;

class ManageCentersController extends Controller
{
    //add
    public function AddCenterController() {
        $states  = array(
        'Andaman and Nicobar Islands',
        'Andhra Pradesh',
        'Arunachal Pradesh',
        'Assam',
        'Bihar',
        'Chandigarh',
        'Chhattisgarh',
        'Dadra and Nagar Haveli and Daman and Diu',
        'Goa',
        'Gujurat',
        'Haryana',
        'Himachal Pradesh',
        'Jammu and Kashmir',
        'Jharkhand',
        'Karnataka',
        'Kerela',
        'Ladakh',
        'Lakshadweep',
        'Madhya Pradesh',
        'Maharashtra',
        'Manipur',
        'Meghalaya',
        'Mizoram',
        'Nagaland',
        'NCT of Delhi',
        'Odisha',
        'Puducherry',
        'Punjab',
        'Rajasthan',
        'Sikkim',
        'Tamil Nadu',
        'Telangana',
        'Tripura',
        'Uttarakhand',
        'Uttar Pradesh',
        'West Bengal'
        ) ;
        return view('backend.center.add' , compact(['states'])) ;
    }

    //store
    public function StoreCenterController(Request $request) {
        $data = new Center() ;
        $data->center_state = $request->center_state ;
        $data->center_name = $request->center_name ;
        $data->center_status = $request->center_status ;
        $data->save() ;
        $notification = array(
            'message' => "$request->board_name Board Added Successfully",
            'alert-type' => 'success'
        ) ;
        return redirect()->route('admin-center.view')->with($notification) ;
    }

    //view
    public function ViewCenterController() {
        $data = Center::latest()->get() ;
        return view('backend.center.view' , compact(['data'])) ;
    }

    //delete
    public function DeleteCenterController($id) {
        $user = Center::find($id) ;
        $user->delete() ;
        $notification = array(
            'message' => 'Center Deleted Successfully',
            'alert-type' => 'info'
        ) ;
        return redirect()->route('admin-center.view')->with($notification) ;

    }
    
}
