@extends('frontlayout')
@section('content')
<div class="container my-4">
    <h3 class="text-center">
        Register
    </h3>
    <form action="{{url('admin/customer')}}" method="post">
    <table class="table table-bordered">
<tr>
    @csrf
    <th>Full Name</th>
    <td><input type="text" class="form-control" name="full_name"></td>
</tr>
<tr>
    <th>Email</th>
    <td><input type="email" class="form-control" name="email"></td>
</tr>
<tr>
    <th>Password</th>
    <td><input type="password" class="form-control" name="password"></td>
</tr>
<tr>
    <th>Phone Number</th>
    <td><input type="number" class="form-control" name="mobile"></td>
</tr>
<tr>
    <th>Address</th>
    <td><input type="text" class="form-control" name="address"></td>
</tr>
<tr class="">
<input type="hidden" name="ref" value="front">
    <td colspan="2"><input type="submit" class="btn btn-md btn-danger" name="submit"></td>
</tr>
    </table>
</form>
</div>
@endsection