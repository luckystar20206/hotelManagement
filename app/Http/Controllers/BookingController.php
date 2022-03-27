<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Customer;
use App\Models\RoomType;
class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data= Booking::all();
        return view('booking.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $customers=Customer::all();
    return view('booking.create',['data'=>$customers]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'customer_id'=>'required',
            'room_id'=>'required',
            'checkin_date'=>'required',
            'checkout_date'=>'required',
            'total_adults'=>'required'
        ]);
        $data=new Booking;
        $data->customer_id=$request->customer_id;
        $data->room_id=$request->room_id;
        $data->checkin_date=$request->checkin_date;
        $data->checkout_date=$request->checkout_date;
        $data->total_adults=$request->total_adults;
        $data->total_childrens=$request->total_childrens;
        $data->save();
        $ref=$request->ref;
        if($ref=="front"){
            return redirect('booking')->with('success','Booking has been made');

        }else{
            return redirect('admin/booking')->with('success','Data has been added');

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    function available_rooms(Request $request,$checkindate){
        $arroms=DB::SELECT("SELECT * FROM rooms WHERE id NOT IN (SELECT room_id FROM bookings WHERE '$checkindate' BETWEEN checkin_date AND checkout_date)");
       $data=[];
       foreach($arroms as $room){
$roomTypes=RoomType::find($room->room_type_id);
$data[]=['room'=>$room, 'romtype'=>$roomTypes];
       }
        return response()->json(['data'=>$data]);
    } 
    public function front_booking(){
        
        return view('front-booking');
    }
}
