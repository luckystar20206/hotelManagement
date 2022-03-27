@extends('frontlayout')
@section('content')
<div class="container my-4">
    <h3 class="text-center">
        Register
    </h3>
    @if(Session::has('error'))
    <p class="text-center text-danger">{{session('success')}}</p>
    @endif
    <form action="{{url('customer/login')}}" method="post">
    <table class="table table-bordered">
    @csrf

<tr>
    <th>Email</th>
    <td><input type="email" class="form-control" name="email"></td>
</tr>
<tr>
    <th>Password</th>
    <td><input type="password" class="form-control" name="password"></td>
</tr>

<tr class="">
<input type="hidden" name="ref" value="front">
    <td colspan="2"><input type="submit" class="btn btn-md btn-danger" name="submit"></td>
</tr>
    </table>
</form>
</div>
@endsection