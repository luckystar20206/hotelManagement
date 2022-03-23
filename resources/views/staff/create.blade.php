@extends('layout')
@section('content')
<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Add department</h6>
            <a href="{{url('admin/staff')}}" class="float-right btn btn-success btn-sm">Back</a>
        </div>
        <div class="card-body">           
            <div class="table-responsive">
                <form action="{{url('admin/staff')}}" method="post" enctype="multipart/form-data">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"> 
                    <tr>
                        @csrf
                        <th>Full Name</th>
                        <td>                 
                       <input type="text" placeholder="Enter Full Name" name="full_name" class="form-control" >
                        </td>
                        </tr>
                        <tr>  
                            <th>
                                Department
                            </th>  
                             <td>
                            <select name="department_id" id="" class="form-control">
                                <option value="">Choose the department</option>
                                @foreach ($data as $item)
                              
                                <option value="{{$item->id}}">{{$item['title']}}</option>
                                @endforeach
                                
                            </select>    
                            </td>   
                        </tr>
                        <tr>
                            <th>Photo</th>
                            <td>                 
                           <input type="file" placeholder="Enter Department Title" name="photo" class="form-control" >
                            </td>
                            </tr>       
                            <tr>
                                <th>Bio</th>
                                <td>                 
                               <textarea name="bio" class="form-control"></textarea>
                                </td>
                                </tr>     
                                <tr>
                                    <th>Salary Type</th>
                                    <td>                 
                                   <input type="radio" name="salary_type" value="daily" >daily
                                   <input type="radio" name="salary_type" value="weekly">weekly
                                   <input type="radio" name="salary_type" value="fortnightly" >fortnightly
                                   <input type="radio" name="salary_type" value="monthly" >monthly
                                   <input type="radio" name="salary_type" value="contract" >contract
                                    </td>
                                    </tr>    
                                    <tr>
                                        <th>Salary Amt</th>
                                        <td>                 
                                       <input type="number" placeholder="Enter Salary amount" name="salary_amt" class="form-control" >
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