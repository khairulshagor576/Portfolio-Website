<?php

namespace App\Http\Controllers;

use App\About;
use App\Main;
use App\Portfolio;
use App\Service;
use Illuminate\Http\Request;

class PagesController extends Controller
{
   public function index()
   {
       $main = Main::first();
       $services=Service::all();
       $portfolios=Portfolio::all();
       $abouts=About::all();
       return view('pages.index',['main'=>$main,'services'=>$services,'portfolios'=>$portfolios,'abouts'=>$abouts]);
   }

    public function dashbord()
    {
        return view('pages.layout');
    }
}
