<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
class WhatYouWatchingController extends Controller
{
    //
    public function getRegister() {
        return view('register');
    }

    public function postRegister(Request $request) {
        $this->validate($request, [
            'email' => 'required|unique:users,email|max:255',
            'password' => 'required',
            'repassword' => 'required',
            'businessname' => 'required',
            'location' => 'required',
        ]);
        
        DB::table('users')->insert([
            'email' => $_POST['email'],
            'password' => bcrypt($_POST['password']),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        return redirect('/');
    }
    
    public function getProfile() {
        return view('profile');
    }

    public function getAddNewShowDate() {
        return view('addNewShowDate');
    }
}
