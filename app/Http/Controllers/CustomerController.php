<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer; //importing the customer model from the models
class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
    $data=Customer::all();
       return view('customer.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->hasFile('photo')){
            $img_path=$request->file('photo')->store('public/imgs');
        }else{
            $img_path="null";
        }
        $data=new Customer;
        $data->full_name=$request->full_name;
        $data->email=$request->email;
        $data->password=sha1($request->password);
        $data->mobile=$request->mobile;
        $data->address=$request->address;
        $data->photo=$img_path;
        $data->save();
        $ref=$request->ref;
        if($ref=='front'){
            return redirect('/')->with('success','Data has been added');
        }else{

        
        return redirect('admin/customer')->with('success','Data has been added');
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
    function login(){
        return view('frontlogin');
    }
    function register(){
        return view('register');
    }
    function cslogin(Request $request){
        $email=$request->email;
        $password=sha1($request->password); 
        $detail=Customer::where(['email'=>$email,'password'=>$password])->count();
        if($detail>0){
            $detail=Customer::where(['email'=>$email,'password'=>$password])->get();

            session(['customerlogin'=>true,'data'=>$detail]);
            return redirect('/');
        }else{
            return redirect('frontlogin')->with('error',"Invalid credentials");
        }
    }
    function logout(){
        session()->forget(['customerlogin','data']);
        return redirect('login');
    }
}
