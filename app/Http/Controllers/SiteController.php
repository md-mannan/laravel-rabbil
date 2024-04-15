<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiteController extends Controller
{
    function ShowHome()
    {
        return view('home');
    }
    function ShowAbout()
    {
        return view('about');
    }
    function ShowService()
    {
        return view('service');
    }
    function ShowProtfolio()
    {
        return view('protfolio');
    }
    function ShowData()
    {
        $jsonData =  DB::select('select * from users');
        $jsonEncode = json_encode($jsonData);
        $data = json_decode($jsonEncode);
        return view('UserTable', ['dataKey' => $data]);
    }
    function onInsert(Request $req)
    {
        $name = $req->input('name');
        $email = $req->input('email');
        $phone = $req->input('phone');

        $result = DB::insert('insert into users(name,email,phone) values(?,?,?)', [$name, $email, $phone]);
        if ($result == true) {
            return 'Success';
        } else {
            return 'Failed';
        }
    }
}
