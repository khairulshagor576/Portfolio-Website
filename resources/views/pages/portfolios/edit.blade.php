@extends('layouts.admin_layout')
@section('content')
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Edit</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{route('admin.dashbord')}}">Dashboard</a></li>
                <li class="breadcrumb-item active">Edit</li>
            </ol>
            <form action="{{route('admin.portfolio.update',$portfolio->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class=" col-md-3">
                        <h4>Big Image</h4>
                        <img style="height: 30vh;" class="img-thumbnail" src="{{url($portfolio->big_image)}}">
                        <input class="mt-2" type="file" id="big_image" name="big_image" >
                    </div>
                    <div class=" col-md-3">
                        <h4>Small Image</h4>
                        <img style="height: 20vh;" class="img-thumbnail" src="{{url($portfolio->small_image)}}">
                        <input class="mt-2" type="file" id="small_image" name="small_image">
                    </div>
                    <div class="form-group col-md-4">
                        <div>
                            <label><h4>Title</h4></label>
                            <input type="text" class="form-control" name="title" id="title" value="{{$portfolio->title}}">
                        </div>
                        <div>
                            <label><h4>Sub Title</h4></label>
                            <input type="text" class="form-control" name="sub_title" id="sub_title" value="{{$portfolio->sub_title}}">
                        </div>
                        <div>
                            <label><h4>Description</h4></label>
                            <textarea type="text" class="form-control" name="description" id="description">{{$portfolio->description}}</textarea>
                        </div>
                        <div>
                            <label><h4>Client</h4></label>
                            <input type="text" class="form-control" name="client" id="client" value="{{$portfolio->client}}">
                        </div>
                        <div>
                            <label><h4>Category</h4></label>
                            <input type="text" class="form-control" name="category" id="category" value="{{$portfolio->category}}">
                        </div>
                    </div>
                </div>
                <input type="submit" class="btn btn-primary mt-3" value="update">
            </form>
        </div>
    </main>
@endsection