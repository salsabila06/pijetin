<?php

namespace App\Http\Controllers;

use App\Models\data;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('Login.Index');
    }

    public function showdata()
    {

        $data=data::all();
        dump($data);
        return view('Login.Index',['data'=>$data]);
    }
    //
}
