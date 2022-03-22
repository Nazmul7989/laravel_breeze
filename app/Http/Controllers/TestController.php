<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        try {
            return view('welcome');
        }catch (\Exception $exception){
            return $exception->getMessage();
        }
    }

    public function user()
    {
//        try {
            $users = User::all();
            return view('users',compact('users'));
//        }catch (\Exception $exception){
//            return $exception->getMessage();
//        }
    }
}
