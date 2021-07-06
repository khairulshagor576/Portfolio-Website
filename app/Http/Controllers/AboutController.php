<?php

namespace App\Http\Controllers;

use App\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('pages.abouts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $this->validate($request,[
           'title_one'=>'required|string',
           'title_two'=>'required|string',
           'image'=>'required|image',
           'description'=>'required|string',
       ]);

       $about=new About();
       $about->title_one=$request->title_one;
       $about->title_two=$request->title_two;
       $about->description=$request->description;

        $image_file=$request->file('image');
        Storage::putFile('public/img',$image_file);
        $about->image='storage/img/'.$image_file->hashName();
        $about->save();

        return redirect()->route('admin.about.create')->with('success','New About Data Inserted Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $abouts=About::all();
       return view('pages.abouts.list',['abouts'=>$abouts]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $about=About::find($id);
        return view('pages.abouts.edit',['about'=>$about]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'title_one'=>'required|string',
            'title_two'=>'required|string',
            'description'=>'required|string',
        ]);

        $about=About::find($id);
        $about->title_one=$request->title_one;
        $about->title_two=$request->title_two;
        $about->description=$request->description;

        if($request->file('image'))
        {
            $image_file=$request->file('image');
            Storage::putFile('public/img',$image_file);
            $about->image='storage/img/'.$image_file->hashName();
        }
        $about->save();

        return redirect()->route('admin.about.list')->with('success','About Data Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $about=About::find($id);
        $about->delete();
        return redirect()->route('admin.about.list')->with('success','Data Deleted Successfully');
    }
}
