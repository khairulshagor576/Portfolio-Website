@extends('layouts.admin_layout');
@section('content')
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Main</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{route('admin.dashbord')}}">Dashboard</a></li>
                <li class="breadcrumb-item active">Main</li>
            </ol>
            <div class="row">
                 <div class=" col-md-4">
                     <h4>Background Image</h4>
                     <img style="height: 30vh;" class="img-thumbnail" src="{{asset('assets/img/header-bg.jpg')}}">
                     <input type="file" id="bc_img" name="bc_img">
                 </div>
                <div class="form-group col-md-4">
                    <div>
                        <label><h4>Title</h4></label>
                        <input type="text" class="form-control" name="title" id="title">
                    </div>
                    <div>
                        <label><h4>Sub Title</h4></label>
                        <input type="text" class="form-control" name="sub_title" id="sub_title">
                    </div>
                    <div>
                        <h4>File Upload</h4>
                        <input type="file" class="mt-2" name="resume" id="resume">
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection