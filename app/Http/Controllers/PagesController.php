<?php

namespace App\Http\Controllers;

use App\Main;
use Illuminate\Http\Request;

class PagesController extends Controller
{
   public function index()
   {
       $main = Main::first();
       return view('pages.index',['main'=>$main]);
   }

    public function dashbord()
    {
        return view('pages.layout');
    }
}
