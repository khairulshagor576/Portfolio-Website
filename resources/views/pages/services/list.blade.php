@extends('layouts.admin_layout')
@section('content')
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">List of Services</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{route('admin.dashbord')}}">Dashboard</a></li>
                <li class="breadcrumb-item active">List of Services</li>
            </ol>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#sl</th>
                    <th scope="col">Icon</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                <?php $sl=1;?>
                @foreach($services as $service)
                <tr>
                    <th>{{$sl++}}</th>
                    <td>{{$service->icon}}</td>
                    <td>{{$service->title}}</td>
                    <td>{{Str::limit(strip_tags($service->description),20)}}</td>
                    <td>
                        <div class="row">
                            <div class="col-md-3">
                                <a href="{{route('admin.service.edit',$service->id)}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                            </div>
                            <div class="col-md-3">
                                <a href="{{route('admin.service.delete',$service->id)}}" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
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