@extends('layout')
@section('content')
<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Room Types</h6>
            <a href="{{url('admin/staff/create')}}" class="float-right btn btn-success btn-sm">Add New</a>
        </div>
        <div class="card-body">           
            @if(Session::has('success'))
            <p class="text-success">{{session('success')}}</p>
            @endif
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Full name</th>
                            <th>id</th>
                            <th>Photo</th>
                            <th>bio</th>
                            <th>salary type</th>
                            <th>salary amt</th>
                            <th>acti0n type</th>
                        </tr>
                    </thead>
                    <tbody>     
                  @foreach ($data as $item)
                        <tr>
                            <td>{{$item['id']}}</td>
                            <td>{{$item['full_name']}}</td>
                            <td>{{$item['department_id']}}</td>
                            <td> <img src="{{asset('my_custom_symlink_1/'.$item->photo)}}" alt=""> </td>
                            <td>{{$item['bio']}}</td>
                            <td>{{$item['salary_type']}}</td>
                            <td>{{$item['salary']}}</td>
                            {{-- <td>{{$item->Roomtype->title}}</td> idk sth was error here --}} 
                           
                                <td>
                                    <a href="{{url('admin/department/'.$item->id).'/edit'}}"><i class="btn btn-info btn-sm fas fa-edit"></i></a>
                                    <a href="{{url('admin/department/'.$item->id)}}"><i class="btn btn-info btn-sm fas fa-eye"></i></a>
                                    <a href="{{url('admin/department/'.$item->id.'/delete')}}" class="btn btn-danger btn-sm "><i class="fa fa-trash"></i></a>

                                </td>
                            
                     </tr>
                     @endforeach
                      
                </tbody>
                </table>
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