<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use DB;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result = DB::table('customer')
                ->get();
        return view('admin_files/customer_list',compact('result'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin_files/add_customer');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          $responce['status'] = false;
        $responce['message'] = 'Something went wrong';
       $array = [
            'customer_name' =>  $request->customer_name,
            'contact' => $request->contact,
            'email' => $request->email,
            'address' => $request->address,
            'city' => $request->city,
            'state' => $request->state,
            'password' => Hash::make($request->password),

        ];
        
        $save =DB::table('customer')->insert($array);
         if($save){
            $responce['status'] = true;
             $responce['message'] = 'added successfully';
         }
       return  $responce;
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
        $result = DB::table('customer')
                ->where('id','=',$id)
                ->first();
        return view('admin_files/customer_edit',compact('result'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
         $id = $request->id;
         $array = [
            'customer_name' =>  $request->customer_name,
            'contact' => $request->contact,
            'email' => $request->email,
            'address' => $request->address,
            'city' => $request->city,
            'state' => $request->state,
            'password' => $request->password,
            
        ];
         DB::table('customer')
            ->where('id',$id)
            ->update($array);
        return redirect('customer_list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         DB::table('customer')
        ->where('id',$id)
        ->delete();
        return redirect('customer_list');
    } 
    
}
 