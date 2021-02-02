@extends('Admin.base')

@section('content')
<div class="content-wrapper">
<div class="card">
  <div class="card-header">
                
    </div>
    <!-- /.card-header -->
    <div class="card-body p-0">
    <table class="table table-sm">
        <thead>
        <tr>
            <th ></th>
            <th>User </th>
            <th>email</th>
            <th >Acc.status</th>
            <th >staff.Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
        <tr>
        
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>
            {{$user->email}}
            </td>
            <td><span class="badge bg-success">active</span></td>
            <td><span class="badge bg-danger">Delete</span></td>
            <td><span class="badge bg-info">Update</span></td>
        
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
