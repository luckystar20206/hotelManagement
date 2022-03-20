@extends('layout')
@section('content')
<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Room Types</h6>
            <a href="{{url('admin/roomtype')}}" class="float-right btn btn-success btn-sm">View</a>

        </div>
        <div class="card-body">
            @if(Session::has('success'))
<p class="text-success">{{session('success')}}</p>
            @endif
            <div class="table-responsive">
                <form action="{{url('admin/roomtype/'.$data->id)}}" method="post">
                    @method('put')
                <table class="table table-bordered">
                    <tr>
                        <th>Title</th>
                        @csrf
                        <td><input type="text" value="{{$data->title}}" name="title" class="form-control"></td>
                    </tr>
                    <tr>
                    <th>Detials</th>
                    <td><textarea  name="details" name="detail" class="form-control" id="" cols="30" rows="10">{{$data->detail}} </textarea></td>
                </tr>
                <tr>
                    <th>Price</th>
                    <td><input type="number" value="{{$data->price}}" name="price" class="form-control"></td>
                </tr>
                <tr>
                    <td>
                        Gallery Images
                    </td>
                    <td>
                        <table class="table table-bordered">
                            <tr>
                                @foreach ($data->roomtypeimgs as $img)
                                    <td>
                                        <img width="200" src="{{asset('my_custom_symlink_1/'.$img->img_src)}}" >
                                        {{-- <img src="{{asset('storage/'.$img->img_src)}}" alt="img"> --}}
                                    </td>
                                @endforeach
                            </tr>
                        </table>
                    </td>
                </tr>
                    <td colspan="2">
                   <input type="submit" name="submit" class="btn btn-primary">
               </td>
                </table>
            </form>
            </div>
        </div>
    </div>

</div>
@endsection