@extends('Admin.base')

@section('content')
<div class="content-wrapper">
<div class="card m-3">
  <div class="card-header">
                
    </div>
    <!-- /.card-header -->
    <div class="card-body p-0">
    <table class="table table-sm">
        <thead>
        <tr>
            <th ></th>
            <th>User</th>
            <th>Format</th>
            <th >Active_Upload</th>
            <th >Time(seconds)</th>
            <th >Cost</th>
        </tr>
        </thead>
        <tbody>
        @foreach($uploads  as $uploads)
        <tr>
        
            <td>{{$uploads->id}}</td>
            <td>{{$uploads->User}}</td>
            <td>
            {{$uploads->format}}
            </td>
            <td>{{$uploads->file}}</td>
            <td>{{$uploads->duration}}</td>
            <td>{{$uploads->cost}}</td>
            <td><span class="badge bg-info">Active</span></td>
        
        </tr>
        @endforeach
        </tbody>
    </table>
    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->

</div>

@endsection
