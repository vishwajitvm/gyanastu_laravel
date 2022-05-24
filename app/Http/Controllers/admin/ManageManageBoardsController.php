<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User ;
use App\Models\board ;
use App\Models\medium ;

class ManageManageBoardsController extends Controller
{
    //Add booard 
    public function AddBoardController() {
        return view('backend.board.add') ;
    }

    //Store
    public function StoreBoardController(Request $request) {
        $data = new board() ;
        $data->board_name = $request->board_name ;
        $data->board_status = $request->board_status ;
        $data->save() ;
        $notification = array(
            'message' => "$request->board_name Board Added Successfully",
            'alert-type' => 'success'
        ) ;
        return redirect()->route('admin-board.view')->with($notification) ;
    }

    //view
    public function ViewBoardController() {
        $data = board::latest()->get() ;
        return view('backend.board.view' ,compact(['data'])) ;
    }

    //delete
    public function DeleteBoardController($id) {
        $user = board::find($id) ;
        $user->delete() ;
        $notification = array(
            'message' => 'Board Deleted Successfully',
            'alert-type' => 'info'
        ) ;
        return redirect()->route('admin-board.view')->with($notification) ;

    }
}
