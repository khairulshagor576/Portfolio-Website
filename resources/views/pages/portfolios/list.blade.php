@extends('layouts.admin_layout')
@section('content')
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">List of Portfolio</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{route('admin.dashbord')}}">Dashboard</a></li>
                <li class="breadcrumb-item active">List of Services</li>
            </ol>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#sl</th>
                    <th scope="col">Title</th>
                    <th scope="col">Sub Title</th>
                    <th scope="col">Big Image</th>
                    <th scope="col">Small Image</th>
                    <th scope="col">Description</th>
                    <th scope="col">Client</th>
                    <th scope="col">Category</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                <?php $sl=1;?>
                @foreach($portfolios as $portfolio)
                <tr>
                    <th>{{$sl++}}</th>
                    <td>{{$portfolio->title}}</td>
                    <td>{{$portfolio->sub_title}}</td>
                    <td><img style="height: 10vh" src="{{url($portfolio->big_image)}}"></td>
                    <td><img style="height: 10vh" src="{{url($portfolio->small_image)}}"></td>
                    <td>{{Str::limit(strip_tags($portfolio->description),20)}}</td>
                    <td>{{$portfolio->client}}</td>
                    <td>{{$portfolio->category}}</td>
                    <td>
                        <div class="row">
                            <div>
                                <a href="{{route('admin.portfolio.edit',$portfolio->id)}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                            </div>
                            <div>
                                <a href="{{route('admin.portfolio.delete',$portfolio->id)}}" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
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