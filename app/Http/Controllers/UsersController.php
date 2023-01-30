<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use DB;
use App\Models\erp_menu;
class UsersController extends Controller
{
    public function __construct()
    {
      //its just a dummy data object.
      $parents_menu= erp_menu::where('module_id','hr')->where('up_menu_id','hr')->where('active_yn','Y')->get();
      $employs_menu = erp_menu::where('module_id','hr')->where('up_menu_id','hrs')->where('active_yn','Y')->get();
      $word_menu = erp_menu::where('module_id','hr')->where('up_menu_id','hrt')->where('active_yn','Y')->get();
      $setting_qlcc = erp_menu::where('module_id','hr')->where('up_menu_id','qlcc_setup')->where('active_yn','Y')->get();
      $setting_qltl = erp_menu::where('module_id','hr')->where('up_menu_id','qltl_setup')->where('active_yn','Y')->get();
      $setting_qlnv = erp_menu::where('module_id','hr')->where('up_menu_id','hr_setup')->where('active_yn','Y')->get();
      $salary_menu = erp_menu::where('module_id','hr')->where('up_menu_id','hrp')->where('active_yn','Y')->get();
  
      // Sharing is caring
      View::share('parents_menu',$parents_menu);
      View::share('employs_menu',$employs_menu);
      View::share('word_menu',$word_menu);
      View::share('setting_qlcc',$setting_qlcc);
      View::share('setting_qltl',$setting_qltl);
      View::share('setting_qlnv',$setting_qlnv);
      View::share('salary_menu',$salary_menu);
    }
    
   function list_user(){
   $users= DB::select('select * from hr_staff ');
    return view('users.list_users',compact('users'));
   //return $users;
    }
    function user_id(){
        $id_ns = $_GET['id_ns'];
        $users= DB::select('select * from hr_staff where staff_id ='.$id_ns.' ');
        return response()->json([
            'data'=>$users,
            
       ]);
    }
}
