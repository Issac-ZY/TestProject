<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

define("dev","dev");

class WelcomeController extends Controller
{
   public function index(){
      # return make::View('welcome.index'); 
      # return view('welcome');
	#return view('welcome.index');
	$user = new \App\User;
	$user->name = 'tom';
	$user->email = 'xxxxxx@xxx.com';
	$user->password = '11';
	$user->id = 1;
	$user->delete();

	$cat = new \App\cat;
	$cat->name = "jack";
	$cat->password = '123456';
	$cat->save();
	
	$cats = DB::select('select * from cats', [1]);
	return view('welcome',['catsss'=>$cats]);
    } //
    public function show(){
	$students = DB::select('select * from student',[1]);
        return view('welcome.index',['stuList'=>$students]);
    }
}
