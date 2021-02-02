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
            
            <th>Operation_title</th>
            <th>Operation_description</th>
            <th >Cover_image</th>
            <th >Update</th>
        </tr>
        </thead>
        <tbody>
        @foreach($operation  as $operation)
        <tr>
        
            <td>{{$operation->operation_name}}</td>
            <td>{{$operation->operation_detail}}</</td>
            <td>
            {{$operation->marketing_image}}</
            </td>
            <td>
                	<form id="delete-form-{{ $operation->id }}" method="post" action="{{ route('admin.operations.destroy',$operation->id) }}" style="display: none">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                              </form>
                	<a href="" onclick="if(confirm('Are you sure, You Want to delete this?'))
                	                    {
                                     event.preventDefault();
                                       document.getElementById('delete-form-{{ $operation->id }}').submit();
                                         }
                                         else{
                                          event.preventDefault();
                                        }"


                	 class="btn btn-danger">Delete</a>
                </td>
        
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
