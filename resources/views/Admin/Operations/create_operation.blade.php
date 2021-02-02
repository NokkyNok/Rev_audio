@extends('Admin.base')

@section('content')
<div class="content-wrapper">
<div class="card card-info">
    <div class="card-header">
    <h3 class="card-title">Add Operation</h3>
    </div>
    <div class="card-body">
    <form action="{{route('admin.operations.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="input-group mb-3">
        <div class="input-group-prepend">
        <span class="input-group-text">Title</span>
        </div>
        <input type="text"  name="operation_name" class="form-control" placeholder="Title Name">
    </div>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
        <span class="input-group-text">Detail</span>
        </div>
        <input type="text" name="operation_detail" class="form-control" placeholder="Title Detail">
    </div>
    <div class="input-group mb-3">
        
        <input type="file" name="marketing_image" class="form-control" id="inputGroupFile03" aria-describedby="inputGroupFileAddon03" aria-label="Upload">
    </div>
    
    <input type= "submit" class="btn btn-secondary" value="Upload New operation">

    </form>

    </div>
    <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>

@endsection