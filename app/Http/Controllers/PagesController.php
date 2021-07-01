<?php

namespace App\Http\Controllers;

use App\Main;
use App\Service;
use Illuminate\Http\Request;

class PagesController extends Controller
{
   public function index()
   {
       $main = Main::first();
       $services=Service::all();
       return view('pages.index',['main'=>$main,'services'=>$services]);
   }

    public function dashbord()
    {
        return view('pages.layout');
    }
}
