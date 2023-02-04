<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use Session;
use App\Models\erp_menu;
class UsersController extends Controller
{
    public function __construct()
    {
      $this->middleware('checklogin')->only(['list_user','user_id']);
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
    return $name;
    
    $p = 'NV200834';
   $users= DB::select("select * from hr_staff  ");
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
    function login(){
      return view('authen.login');
    }
    function action_login(Request $request){
      $user_name=$request->user_name;
      $password=$request->password;
        $result= DB::select("select *
       from erp_user
       where upper(ERP_USER.user_code) = upper('$user_name') 
       and erp_user.password = encrypt('$password') 
       and ERP_USER.active_yn = 'Y' ");
       ///$result= DB::table('admin')->where('email',$email,'password',$password)->first();

       if($result != null){
        Session::put('name',$result[0]->user_code);
        Session::put('id',$result[0]->user_id);
        return redirect('list_user');
       }else{
        Session::put('message','Sai Tài Khản Mk');
        return redirect('/login')->with('status','Sai Tài Khoản Mật Khẩu');

       }
    }
    public function logout(){
      Session::put('name',null);
      Session::put('id',null);
      return redirect::to('/login');
  }
}
