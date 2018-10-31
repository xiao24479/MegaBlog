<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Model\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function login(Request $request)
    {
        //$request->session()->flush();
        return view('login');
    }


    public function dologin(Request $request)
    {
        $this->validate($request, [
            'username' => 'required|min:4|max:20',
            'password' => 'required',
            'captcha' => 'required|captcha',
        ]);

        //去掉两侧空格
        $request_array = array();
        foreach ($request->all() as $key => $value) {
            $request_array[$key] = trim($value);
        }

        $username = $request_array['username'];
        $password = md5($request_array['password']);

        $user = User::select('uid')->where('user_name', $username)->where('password', $password)->first();

        if ($user) {
            $request->session()->push('uid', $user->uid);
            $request->session()->push('username', $username);
            return redirect(route('admin_index'));
        } else {
            return redirect()->back()->withErrors($validator)->withInput();
        }

    }

    public function register()
    {
        return view('register');
    }

    public function doreg(Request $request)
    {

        $this->validate($request, [
            'username' => 'required|unique:users,user_name|min:4|max:20',
            'password' => 'required|confirmed|min:6',
            'password_confirmation' => 'required|min:6',
            'email' => 'required|email|unique:users,email',
            'captcha' => 'required|captcha',
        ]);

        //去掉两侧空格
        $request_array = array();
        foreach ($request->all() as $key => $value) {
            $request_array[$key] = trim($value);
        }

        $user = new User;
        $user->user_name = $request_array['username'];
        $user->password = md5($request_array['password']);
        $user->email = $request_array['email'];
        $user->create_time = time();
        $user->login_time = time();
        $user->status = 1;
        $user->gender = 1;

        if ($user->save()) {

            $uid = $user->uid;
            $username = $user->user_name;

            $request->session()->push('uid', $uid);
            $request->session()->push('username', $username);

            return redirect(route('admin_index'));

        } else {
            return redirect()->back()->withErrors($validator)->withInput();
        }



    }


    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect(route('login'));
    }





}
