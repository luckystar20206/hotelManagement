<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RoomType;
use App\Models\Roomtypeimage;
class HomeController extends Controller
{
    function home(){
        $data=RoomType::all();
        return view('home',['data'=>$data]);
    }
}
