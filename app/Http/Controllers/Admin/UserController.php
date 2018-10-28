<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;

class UserController extends Controller
{
    public function index(Request $request)
    {

        // $ip = $request->ip();
        // $fhandle = fopen('./a.txt', "a");
        // fwrite($fhandle, $ip."\r\n");
        // fclose($fhandle);
        // $fhandle = fopen('./a.txt', "r");
        // while (!feof($fhandle)) {
        //     echo fgets($fhandle).'<br>';
        // }
        // //$res = fread($fhandle,filesize("./a.txt"));
        // fclose($fhandle);
        //$res = file_get_contents('./a.txt');
        //echo $res;

        //递归目录
        //readDirs('../');

        //return view('index');
        $request->session()->put('dsfds',123);
        $request->session()->put('dfdf',123);
        $data = $request->session()->all();
        dd($data);



    }
    public function show(Request $request)
    {
    	//$m =  $request->method();
    	//$m =  $request->isMethod('post');
    	//$m = $request->path();
    	//$m = $request->url();
    	//$m = $request->ip();
    	//$m = $request->getPort();

        $request->session()->put('sss',123);
    	$data = $request->session()->all();
        dd($data);
    }


    public function login()
    {
    	return view('login');
    }

    function dologin(Request $request)
    {
    	$this->validate($request, [
    	    'username' => 'required|unique:blog_users,user_name|min:10|max:20',
    	    'password' => 'required',
    	    'captcha' => 'required|captcha',
    	]);
		$data = $request->all();
	    dd($data);
    }

}
