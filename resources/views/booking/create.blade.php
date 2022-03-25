@extends('layout')
@section('content')
<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Add bookings</h6>
            <a href="{{url('admin/booking')}}" class="float-right btn btn-success btn-sm">Back</a>
        </div>
        <div class="card-body">           
            <div class="table-responsive">
                <form action="{{url('admin/booking')}}" method="post" enctype="multipart/form-data">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"> 
                    <tr>
                        @csrf
                        <th>Customer</th>
                        <td>                 
                       <select name="" class="form-control">
                           <option>--SELECT CUSTOMER--</option>
                           @foreach ($data as $item)
                               <option value="{{$item->id}}">{{$item->full_name}}</option>
                           @endforeach
                       </select>
                        </td>
                        </tr>
                        <tr>  
                            <th>
                                Check IN date
                            </th>  
                            <td>  
                                <input type="date" placeholder="Enter your email address" name="checkin_date" class="form-control checkindate">
                            </td>  
                        </tr>         
                        <tr>  
                            <th>
                                Check out Date
                            </th>  
                            <td>  
                                <input type="date" placeholder="Enter your password" name="checkout_date" class="form-control checkoutdate">
                            </td>  
                        </tr>  
                        <tr>  
                            <th>
                                Total Adults
                            </th>  
                            <td>  
                                <input type="number" placeholder="Total adults" name="total_adults" class="form-control">
                            </td>  
                        </tr>  
                        <tr>  
                            <th>
                                Total children 
                            </th>  
                            <td>  
                                <input type="number" placeholder="Enter your children " name="total_children" class="form-control">
                            </td>  
                        </tr> 
                        <tr>  
                            <th>
                                Available rooms
                            </th>  
                            <td>  
                                <input type="text" placeholder="Enter your email address" name="photo" class="form-control">
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
<script>
    $(document).ready(function(){
        $(".checkindate").on('blur',function(){
            let _checkindate=$(this).val();
            $.ajax({
                url:"{{url('admin/booking')}}/available_rooms/"+ _checkindate,
                dataType:'json',
                success:function(res){
                    console.log(res);
                }
            })
        });
    });
</script>
<link href="{{asset('vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
<script src="{{asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

<!-- Page level custom scripts -->
 <script src="{{asset('js/demo/datatables-demo.js')}}"></script>

@endsection

@endsection