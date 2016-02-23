<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Html;



class WelcomeController extends Controller
{

    public function index() {
        // redirect to welcome.blade.php
        return view('welcome');
    }
    /**
     * Show the Welcome page of Laravel framework.
     *
     * @param  int  $id
     * @return Response
     */
    public function showProfile($id)
    {
        return view('welcome');
//        return view('welcome')->with($data);
    }

    public function create() {
        return view('create');
    }
}