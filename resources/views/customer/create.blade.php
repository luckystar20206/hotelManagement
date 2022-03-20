@extends('layout')
@section('content')
<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Customer tables</h6>
            <a href="{{url('admin/customer')}}" class="float-right btn btn-success btn-sm">Back</a>
        </div>
        <div class="card-body">           
            <div class="table-responsive">
                <form action="{{url('admin/customer')}}" method="post" enctype="multipart/form-data">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"> 
                    <tr>
                        @csrf
                        <th>Full Name</th>
                        <td>                 
                       <input type="text" placeholder="Enter full name" name="full_name" class="form-control" >
                        </td>
                        </tr>
                        <tr>  
                            <th>
                                Email address  
                            </th>  
                            <td>  
                                <input type="email" placeholder="Enter your email address" name="email" class="form-control">
                            </td>  
                        </tr>         
                        <tr>  
                            <th>
                                Password
                            </th>  
                            <td>  
                                <input type="password" placeholder="Enter your password" name="password" class="form-control">
                            </td>  
                        </tr>  
                        <tr>  
                            <th>
                                Mobile
                            </th>  
                            <td>  
                                <input type="number" placeholder="Enter your mobile" name="mobile" class="form-control">
                            </td>  
                        </tr>  
                        <tr>  
                            <th>
                                Address 
                            </th>  
                            <td>  
                                <input type="text" placeholder="Enter your email address" name="address" class="form-control">
                            </td>  
                        </tr> 
                        <tr>  
                            <th>
                                Photo
                            </th>  
                            <td>  
                                <input type="file" placeholder="Enter your email address" name="photo" class="form-control">
                            </td>  
                        </tr>           
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