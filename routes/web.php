<?php
//Profile management of user and admin
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\backend\UserController;
use App\Http\Controllers\backend\ProfileController;
use App\Http\Controllers\userdashboardController ;
use App\Http\Controllers\userProfileController ;
use Illuminate\Support\Facades\Auth ;
//models
use App\Models\User ;
use Illuminate\Support\Facades\Artisan;
use App\Models\board ;
use App\Models\medium ;
//admin Controller
use App\Http\Controllers\admin\ManageManageBoardsController ;
use App\Http\Controllers\admin\ManageMediumController ;
use App\Http\Controllers\admin\ManageSubjectController ;
use App\Http\Controllers\admin\ManageCentersController ;
use App\Http\Controllers\admin\ManageStreamController ;
use App\Http\Controllers\admin\ManageCOURSESAdminController ;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::group(['middleware' => 'prevent-back-history'],function(){
    // Auth::routes();
    // Route::get('/home', 'HomeController@index');

  /*
||
||
back rout end here
||
||
*/

//redirect route after login
Route::get('redirects' , [AdminController::class , 'loginRedirects'])->middleware('admin') ;



Route::get('/', function () {
    return view('auth.login');
});

//authentication
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    // return view('dashboard');
    return view('admin.index');
})->name('dashboard')->middleware('admin');


Route::get('dashboard' ,
function() {
    $userDataDashboard = User::all()->where('usertype' , 'user')->count() ;
    return view('admin.index' , compact(['userDataDashboard'])) ;
}
)->name('dashboard')->middleware('admin') ;


//Logout functionality here--
Route::get('/admin/logout' , [AdminController::class , 'Logout'])->name('admin.logout') ;


//  USER MANAGMENT ALL ROUTES WILL BE HERE
//group for users
Route::prefix('users')->group(function() {
    //view Route for Users
    Route::get('/view' , [UserController::class , 'UserView'])->name('user.view') ;   //user view

    //ADD user Group Route
    Route::get('/add' , [UserController::class , 'UserAdd'])->name('users.add') ;   

    Route::post('/store' , [UserController::class , 'UserStore'])->name('users.store') ;  
    
    //view user profile here viewuserprofile
    Route::get('/viewuserprofile/{id}' , [UserController::class , 'UserProfileDetailsData'])->name('users.viewuserprofile') ;   

    //edit users
    Route::get('/edit/{id}' , [UserController::class , 'UserEdit'])->name('users.edit') ;   

    Route::post('/update/{id}' , [UserController::class , 'UserUpdate'])->name('users.update') ;   

    //Delete Users
    Route::get('/delete/{id}' , [UserController::class , 'UserDelete'])->name('users.delete') ;   

    //manage requests here
    Route::get('/managerequest' , [UserController::class , 'UserManageRequsts'])->name('user.managerequest') ; 
    
    //manage inacive users
    Route::get('/inactiveusers' , [UserController::class , 'UserInactiveUsers'])->name('user.inactiveusers') ; 

    //view user approve page here
    Route::get('/userapprove/{id}' , [UserController::class , 'UserApprovalRequestPageView'])->name('users.userapprove') ;   

    //post the data for approving the user userapprovalupdate
    Route::post('/userapprovalupdate/{id}' , [UserController::class , 'UserApprovalRequestUpdate'])->name('users.userapprovalupdate') ;   


}) ;

//
//GROUP FOR YOUR PROFILE AND CHAANGE PASSWORD 
//
Route::prefix('profile')->group(function() {
    //view Route for Users
    Route::get('/view' , [ProfileController::class , 'ProfileView'])->name('profile.view') ; 

    //EDIT profile
    Route::get('/edit' , [ProfileController::class , 'ProfileEdit'])->name('profile.edit') ;   

    Route::post('/store' , [ProfileController::class , 'ProfileStore'])->name('profile.store') ;   

    //Update Password OR change Password
    Route::get('/password/view' , [ProfileController::class , 'PasswordView'])->name('password.view') ;   

    Route::post('/password/update' , [ProfileController::class , 'PasswordUpdate'])->name('password.update') ;   
}) ;

//
//MANAGE BOARDS
//
Route::prefix('admin-board')->group(function() {
    //add boards
    Route::get('/add' , [ManageManageBoardsController::class , 'AddBoardController'])->name('admin-board.add') ; 

    //store board name
    Route::post('/store' , [ManageManageBoardsController::class , 'StoreBoardController'])->name('admin-board.store') ; 

    //view
    Route::get('/view' , [ManageManageBoardsController::class , 'ViewBoardController'])->name('admin-board.view') ; 

    //delete
    Route::get('/delete/{id}' , [ManageManageBoardsController::class , 'DeleteBoardController'])->name('admin-board.delete') ; 
}) ;

//
//MANAGE MEDIUM\
//
Route::prefix('admin-medium')->group(function() {
    //add medium
    Route::get('/add' , [ManageMediumController::class , 'addMediumController'])->name('admin-medium.add') ; 

    //store
    Route::post('/store' , [ManageMediumController::class , 'StoreMediumController'])->name('admin-medium.store') ; 

    //view
    Route::get('/view' , [ManageMediumController::class , 'ViewMediumController'])->name('admin-medium.view') ; 

    //delete
    Route::get('/delete/{id}' , [ManageMediumController::class , 'DeleteMediumController'])->name('admin-medium.delete') ; 

}) ;

//
//MANAGE SUBJECTS
//
Route::prefix('admin-subject')->group(function() {
    //add subject
    Route::get('/add' , [ManageSubjectController::class , 'addSubjectController'])->name('admin-subject.add') ; 

    //store
    Route::post('/store' , [ManageSubjectController::class , 'StoreSubjectController'])->name('admin-subject.store') ; 

    //view
    Route::get('/view' , [ManageSubjectController::class , 'viewSubjectController'])->name('admin-subject.view') ; 

    //delete 
    Route::get('/delete/{id}' , [ManageSubjectController::class , 'DeleteSubjectController'])->name('admin-subject.delete') ; 

}) ;

//
//MANAGE CENTERS 
//
Route::prefix('admin-center')->group(function() {
    //add
    Route::get('/add' , [ManageCentersController::class , 'AddCenterController'])->name('admin-center.add') ; 

    //store
    Route::post('/store' , [ManageCentersController::class , 'StoreCenterController'])->name('admin-center.store') ; 

    //view
    Route::get('/view' , [ManageCentersController::class , 'ViewCenterController'])->name('admin-center.view') ; 

    //delete
    Route::get('/delete/{id}' , [ManageCentersController::class , 'DeleteCenterController'])->name('admin-center.delete') ; 


}) ;

//
//MANAGE STREAM
//
Route::prefix('admin-stream')->group(function() {
    //add
    Route::get('/add' , [ManageStreamController::class , 'AddStreamController'])->name('admin-stream.add') ; 

    //store
    Route::post('/store' , [ManageStreamController::class , 'StoreStreamController'])->name('admin-stream.store') ; 

    //view
    Route::get('/view' , [ManageStreamController::class , 'ViewStreamController'])->name('admin-stream.view') ; 

    //delete
    Route::get('/delete/{id}' , [ManageStreamController::class , 'DeleteStreamController'])->name('admin-stream.delete') ; 

}) ;

//
//MANAGE COURSES HERE**************
//
Route::prefix('admin-course')->group(function() {
    //add course here 
    Route::get('/add' , [ManageCOURSESAdminController::class , 'AddCourse'])->name('admin-course.add') ; 

    //Store
    Route::post('/store' , [ManageCOURSESAdminController::class , 'StoreCourse'])->name('admin-course.store') ; 

    //view
    Route::get('/view' , [ManageCOURSESAdminController::class , 'ViewCourse'])->name('admin-course.view') ; 

    //edit
    Route::get('/edit/{id}' , [ManageCOURSESAdminController::class , 'EditCourse'])->name('admin-course.edit') ;
    
    //updated data store
    Route::post('/update/{id}' , [ManageCOURSESAdminController::class , 'UpdateCourse'])->name('admin-course.update') ; 




}) ;

//AJAX REQUEST FOR STATE CENTER DATA 
Route::post('ajax-get-state-center-data' , [ManageCOURSESAdminController::class , 'AJAXREQUESTToGETCENTERSDATA'])->name('ajax-get-state-center-data') ; 













//************************************************************ *//
////////////////USERS DASHBOARD ROUTING//////////////////////////
//********************************************************* *//

//loading user index page after login as user
Route::get('userdashboard', function () {
    return view('users_dashboard.index');
})->name('userdashboard');

Route::view('calendar' , 'users_dashboard.body.calendar')->name('calendar') ;

Route::get('/userdashboard/logout' , [userdashboardController::class , 'logout'])->name('userdashboard.logout') ;

//
//manage user profile at userdashbord
Route::prefix('userprofile')->group( function() {
    //view the profile of users
    Route::get('/view' , [userProfileController::class , 'userprofileview'])->name('userprofile.view') ;

    //edit user profile
    Route::get('/edit' , [userProfileController::class , 'userprofileEdit'])->name('userprofile.edit') ;

    //updating the profile
    Route::post('/store' , [userProfileController::class , 'userprofileStore'])->name('userprofile.store') ;

    //view the change password page
    Route::get('/userpassword/view' , [userProfileController::class , 'userPasswordView'])->name('userpassword.view') ;

    //updating the password
    Route::post('/userpassword/update' , [userProfileController::class , 'userPasswordUpdate'])->name('userpassword.update') ;
}) ;







//************************************************************ *//
///////////////Finally Website Route here[ARAGMA]////////////////
//********************************************************* *//



// Route::get('/cache' , function() {
//     Artisan::Call('cache:clear') ;
// }) ;
// Route::get('/storage' , function() {
//     Artisan::Call('storage:link') ;
// }) ;





































}); //preventing backlogin here [clearing backhistory here don't delete it and also  make routes under this not out side this closing tags]
