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
            <th >Order id</th>
            <th>File</th>
            <th>Price</th>
            <th >Quantity</th>
            <th>Play</th>
            <th>Download</th>

            
        </tr>
        </thead>
        <tbody>
        @foreach($details  as $orders)
        <tr>
        
            <td>{{$orders->order_id}}</td>
            <td>{{$orders->Filename}}</td>
            <td>
            {{$orders->price}}
            </td>
            <td>{{$orders->quantity}}</td>
            <td><audio controls>
              <source src="/storage/{{$orders->Filename}}" type="audio/mpeg"> 
            </audio></td>
            <td><a href="/storage/{{$orders->Filename}}" download class="btn btn-primary btn-sm">download</a></td>
            
        
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
