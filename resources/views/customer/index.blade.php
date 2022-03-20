@extends('layout')
@section('content')
<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Room Types</h6>
            <a href="{{url('admin/customer/create')}}" class="float-right btn btn-success btn-sm">Add New</a>
        </div>
        <div class="card-body">           
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        
                        <tr>
                            <th>#</th>
                            <th>Full Name</th>
                            <th>Email</th>
                            <th>Mobile</th>
                            
                            <th>Address</th>
                            <th>Photo</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                 
                    <tbody>     
                    @foreach ($data as $item)
                        <tr>
                         <td>{{$item['id']}}</td>
                           <td>{{$item['full_name']}}</td>
                           <td>{{$item['email']}}</td>
                           <td>{{$item['mobile']}}</td>
                           <td>{{$item['address']}}</td>
                          <td>
                             <img src="{{asset($item->photo)}}"  />
                            </td>
                    
                                <td>
                                    <a href=""><i class="btn btn-info btn-sm fas fa-edit"></i></a>
                                    <a href=""><i class="btn btn-info btn-sm fas fa-eye"></i></a>
                                    <a href="" class="btn btn-danger btn-sm "><i class="fa fa-trash"></i></a>

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