<?php

namespace App\Http\Controllers;

use App\Main;
use Illuminate\Http\Request;

class MainController extends Controller
{
   public function main()
   {
       $main = Main::first();
       return view('pages.main',['main'=>$main]);
   }
}
