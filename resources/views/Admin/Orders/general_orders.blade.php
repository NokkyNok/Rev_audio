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
            <th >Order_No-</th>
            <th>Status</th>
            <th>Client</th>
            <th >File_count</th>
            <th >Grand_total</th>
            <th >Date_submitted</th>
            <th >Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($orders  as $orders)
        <tr>
        
            <td>{{$orders->Order_number}}</td>
            <td>{{$orders->status}}</td>
            <td>
            {{$orders->user_email}}
            </td>
            <td>{{$orders->item_count}}</td>
            <td>{{$orders->grand_total}}</td>
            <td>{{$orders->created_at}}</td>
            <td><a href="" class="btn btn-dark btn-sm" >View order</a></td>
        
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
