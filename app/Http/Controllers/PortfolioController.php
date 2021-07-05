<?php

namespace App\Http\Controllers;

use App\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PortfolioController extends Controller
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
       return view('pages.portfolios.create');
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
            'title'=>'required|string',
            'sub_title'=>'required|string',
            'big_image'=>'required|image',
            'small_image'=>'required|image',
            'description'=>'required|string',
            'client'=>'required|string',
            'category'=>'required|string',
        ]);

        $portfolio=new Portfolio();
        $portfolio->title       = $request->title;
        $portfolio->sub_title   = $request->sub_title;
        $portfolio->description = $request->description;
        $portfolio->client      = $request->client;
        $portfolio->category    = $request->category;

        $big_image=$request->file('big_image');
        Storage::putFile('public/img/',$big_image);
        $portfolio->big_image="storage/img/".$big_image->hashName();

        $small_image=$request->file('small_image');
        Storage::putFile('public/img/',$small_image);
        $portfolio->small_image="storage/img/".$small_image->hashName();
        $portfolio->save();

        return redirect()->route('admin.portfolio.create')->with('success','New Portfolio Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $portfolio=Portfolio::all();
        return view('pages.portfolios.list',['portfolios'=>$portfolio]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $portfolio=Portfolio::find($id);
        return view('pages.portfolios.edit',['portfolio'=>$portfolio]);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
