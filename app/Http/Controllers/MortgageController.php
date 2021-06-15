<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class MortgageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result = DB::table('mortgage_data')
                ->get();
        return view('admin_files/mortgage_list',compact('result'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin_files/add_mortgage');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
 $array = [
            'customer_type' =>  $request->customer_type,
             'metal_type' =>  $request->metal_type,
             'product_condition' =>  $request->product_condition,
              'customer_name' =>  $request->customer_name,
               'customer_contact' =>  $request->customer_contact,
                'customer_address' =>  $request->customer_address,
                 'qty' =>  $request->qty,
                  'rate' =>  $request->rate,
                   
                   'given_amount' =>  $request->given_amount,
                   'rate_of_interest' =>  $request->rate_of_interest,
                   'tolal_emi' =>  $request->tolal_emi,
                   'monthly_emi' =>  $request->monthly_emi,
                   'received_amount' =>  $request->received_amount,

                    'remaining_amount' =>  $request->remaining_amount,
                  'date' =>  $request->date,
                   'remark' =>  $request->remark,
            
            
            
        ];
        DB::table('mortgage_data')->insert($array);
        return redirect('mortgage_list');
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
          $result = DB::table('mortgage_data')
                ->where('id','=',$id)
                ->first();
        return view('admin_files/mortgage_edit',compact('result'));
    
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
                     'customer_type' =>  $request->customer_type,
             'metal_type' =>  $request->metal_type,
             'product_condition' =>  $request->product_condition,
              'customer_name' =>  $request->customer_name,
               'customer_contact' =>  $request->customer_contact,
                'customer_address' =>  $request->customer_address,
                 'qty' =>  $request->qty,
                  'rate' =>  $request->rate,
                   
                   'given_amount' =>  $request->given_amount,
                   'rate_of_interest' =>  $request->rate_of_interest,
                   'tolal_emi' =>  $request->tolal_emi,
                   'monthly_emi' =>  $request->monthly_emi,
                   'received_amount' =>  $request->received_amount,
                   
                    'remaining_amount' =>  $request->remaining_amount,
                  'date' =>  $request->date,
                   'remark' =>  $request->remark,
                    ];
         DB::table('mortgage_data')
            ->where('id',$id)
            ->update($array);
        return redirect('mortgage_list');
                  
         
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
  DB::table('mortgage_data')
        ->where('id',$id)
        ->delete();
        return redirect('mortgage_list');
    }
}
