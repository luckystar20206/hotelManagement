@extends('layout')
@section('content')
<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Room Types</h6>
            <a href="{{url('admin/room')}}" class="float-right btn btn-success btn-sm">Back</a>
        </div>
        <div class="card-body">           
            <div class="table-responsive">
                <form action="{{url('admin/room')}}" method="post">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"> 
                    <tr>
                        @csrf
                        <th>Title</th>
                        <td>                 
                       <input type="text" placeholder="Enter title" name="title" class="form-control" >
                        </td>
                        </tr>
                        <tr>  
                            <th>
                                Room Type    
                            </th>  
                            <td>
                                <select name="room_type_id" class="form-control" id="">
                                    <option value="0">Default</option>
                                    @foreach ($data as $item)
                                    <option value="{{$item['id']}}">{{$item['title']}}</option>
                                    @endforeach
                                </select>
                                
                            </td>                   
                </table>
                <button type="submit" name="submit" class="btn btn-primary btn-lg">Submit</button>
                </form>
            </div>
        </div>
    </div>

</div>
@section('scripts')

<link href="{{asset('vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
<script src="{{asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

<!-- Page level custom scripts -->
<script src="{{asset('js/demo/datatables-demo.js')}}"></script>

@endsection

@endsection