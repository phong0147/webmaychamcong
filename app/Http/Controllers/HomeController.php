<?php

namespace App\Http\Controllers;
use DB;
use App\Models\erp_menu;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function test(){
        $data='269';
        $user= DB::select('select * from hr_staff where staff_id = '.$data.'');
        var_dump($user);
    }
     public function index(){
        $parents_menu= erp_menu::where('module_id','hr')->where('up_menu_id','hr')->where('active_yn','Y')->get();
        $employs_menu = erp_menu::where('module_id','hr')->where('up_menu_id','hrs')->where('active_yn','Y')->get();
        $word_menu = erp_menu::where('module_id','hr')->where('up_menu_id','hrt')->where('active_yn','Y')->get();
        $setting_qlcc = erp_menu::where('module_id','hr')->where('up_menu_id','qlcc_setup')->where('active_yn','Y')->get();
        $setting_qltl = erp_menu::where('module_id','hr')->where('up_menu_id','qltl_setup')->where('active_yn','Y')->get();
        $setting_qlnv = erp_menu::where('module_id','hr')->where('up_menu_id','hr_setup')->where('active_yn','Y')->get();
        $salary_menu = erp_menu::where('module_id','hr')->where('up_menu_id','hrp')->where('active_yn','Y')->get();
        return view('layouts.index',compact('parents_menu','employs_menu','word_menu','salary_menu','setting_qlcc','setting_qltl','setting_qlnv'));
    }
   


}
