@extends('layouts.admin_layout')
@section('content')
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Create</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{route('admin.dashbord')}}">Dashboard</a></li>
                <li class="breadcrumb-item active">Create</li>
            </ol>
            <form action="" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="form-group col-md-4">
                        <div>
                            <label><h4>Font Awesome Icon</h4></label>
                            <input type="text" class="form-control" name="icon" id="icon">
                        </div>
                        <div class="mt-2">
                            <label><h4>Title</h4></label>
                            <input type="text" class="form-control" name="title" id="title">
                        </div>
                        <div class="mt-2">
                            <label><h4>Sercice Description</h4></label>
                            <textarea type="text" class="form-control" name="description" id="description"></textarea>
                        </div>
                    </div>
                </div>
                <input type="submit" class="btn btn-primary mt-3">
            </form>
        </div>
    </main>
@endsection