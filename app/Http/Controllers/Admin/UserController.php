<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;

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


    public function login()
    {
        return view('login');
    }


    public function dologin(Request $request)
    {
        //dd($request->all());
        $this->validate($request, [
            'username' => 'required|unique:blog_users,user_name|min:4|max:20',
            'password' => 'required',
            'captcha' => 'required|captcha',
        ]);

    }

    public function register()
    {
        return view('register');
    }

    public function doreg(Request $request)
    {
        //dd($request->all());
        $this->validate($request, [
            'username' => 'required|unique:blog_users,user_name|min:4|max:20',
            'password' => 'required|confirmed|min:6',
            'password_confirmation' => 'required|min:6',
            'email' => 'required|email|unique:blog_users,email',
            'captcha' => 'required|captcha',
        ]);

        dd($request->all());
    }








}
