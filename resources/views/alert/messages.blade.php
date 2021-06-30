@if ($errors->any())
    @foreach ($errors->all() as $error)
    <div class="alert alert-danger alert alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
         <strong>Error!</strong>{{$error}}
    </div>
    @endforeach
@endif