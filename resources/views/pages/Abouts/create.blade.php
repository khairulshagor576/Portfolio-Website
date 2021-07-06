@extends('layouts.admin_layout')
@section('content')
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Create</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{route('admin.dashbord')}}">Dashboard</a></li>
                <li class="breadcrumb-item active">Create</li>
            </ol>
            <form action="{{route('admin.about.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                {{method_field('PUT')}}
                <div class="row">
                    <div class=" col-md-3">
                        <h4>Image</h4>
                        <img style="height: 30vh;" class="img-thumbnail" src="">
                        <input class="mt-2" type="file" id="image" name="image">
                    </div>
                    <div class="form-group col-md-4">
                        <div>
                            <label><h4>Title One</h4></label>
                            <input type="text" class="form-control" name="title_one" id="title_one">
                        </div>
                        <div>
                            <label><h4>Title Two</h4></label>
                            <input type="text" class="form-control" name="title_two" id="title_two">
                        </div>
                        <div>
                            <label><h4>Description</h4></label>
                            <textarea type="text" class="form-control" name="description" id="description"></textarea>
                        </div>
                    </div>
                </div>
                <input type="submit" class="btn btn-primary mt-2">
            </form>
        </div>
    </main>
@endsection