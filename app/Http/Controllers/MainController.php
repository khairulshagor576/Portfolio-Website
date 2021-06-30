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

    public function update(Request $request)
    {
       $this->validate($request,[
            'title'=>'required|string',
            'subtitle'=>'required|string',
        ]);

        $main=Main::first();

        $main->title    = $request->title;
        $main->subtitle = $request->subtitle;

        if($request->file('bc_img'))
        {
            $img_file=$request->file('bc_img');
            $img_file->storeAs('public/img/',"bc_img.".$img_file->getClientOriginalExtension());
            $main->bc_img='storage/img/bc_img.'.$img_file->getClientOriginalExtension();
        }

        if($request->file('resume'))
        {
            $pdf_file=$request->file('resume');
            $pdf_file->storeAs('public/pdf/',"resume.".$pdf_file->getClientOriginalExtension());
            $main->resume='storage/pdf/resume.'.$pdf_file->getClientOriginalExtension();
        }

        $main->save();

        //return redirect()->route('admin.main')->se
    }
}
