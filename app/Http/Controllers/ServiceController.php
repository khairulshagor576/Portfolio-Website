<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
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
        return view('pages.services.create');
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
            'icon'=>'required|string',
            'title'=>'required|string',
            'description'=>'required|string',
        ]);

        $service=new Service();
        $service->icon       = $request->icon;
        $service->title      = $request->title;
        $service->description= $request->description;
        $service->save();

        return redirect()->route('admin.service.create')->with('success','Data Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $service=Service::all();
        return view('pages.services.list',['services'=>$service]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service=Service::find($id);
        //return $service;
        return view('pages.services.edit',['service'=>$service]);
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
            'icon'=>'required|string',
            'title'=>'required|string',
            'description'=>'required|string',
        ]);

        $service=Service::find($id);

        $service->icon        = $request->icon;
        $service->title       = $request->title;
        $service->description = $request->description;
        $service->save();

        return redirect()->route('admin.service.list')->with('success','Data Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service=Service::find($id);
        $service->delete();
        return redirect()->route('admin.service.list')->with('success','Data Deleted Successfully');
    }
}
