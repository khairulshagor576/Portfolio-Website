@extends('layouts.admin_layout')
@section('content')
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">List of Abouts</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{route('admin.dashbord')}}">Dashboard</a></li>
                <li class="breadcrumb-item active">Abouts</li>
            </ol>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#sl</th>
                    <th scope="col">Title One</th>
                    <th scope="col">Title Two</th>
                    <th scope="col">Image</th>
                    <th scope="col">Description</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                <?php $sl=1;?>
                @foreach($abouts as $about)
                <tr>
                    <th>{{$sl++}}</th>
                    <td>{{$about->title_one}}</td>
                    <td>{{$about->title_two}}</td>
                    <td><img style="height: 10vh" src="{{url($about->image)}}"></td>
                    <td>{{Str::limit(strip_tags($about->description),20)}}</td>
                    <td>
                        <div class="row">
                            <div>
                                <a href="{{route('admin.about.edit',$about->id)}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                            </div>
                            <div>
                                <a href="{{route('admin.about.delete',$about->id)}}" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </main>
@endsection