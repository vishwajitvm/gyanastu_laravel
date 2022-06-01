<?php

namespace App\Http\Controllers\cart;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth ;
use App\Models\cart ;
use App\Models\User ;

class ManageCourseCartController extends Controller
{
    //add to cart course
    public function AddToCart(Request $request) {
        if (Auth::check()) {
            $id = Auth::user()->id ;
            $user = User::find($id) ;
            //store data
            $data = new cart() ;
            $data->user_id = $user->id ;
            $data->course_id = $request->course_id ;
            $data->save() ;
            return redirect()->route('course-list') ;
            
        }
        else{
            return redirect()->route('login') ;
        }
    }

    //Cart Items
    static function CartItems() {
        if (Auth::check()) {
            $id = Auth::user()->id ;
            $user = User::find($id) ;
            return cart::all()->where('user_id' , $user->id)->count() ;
        }
        else{
            return 0 ;
        }
    }
}
