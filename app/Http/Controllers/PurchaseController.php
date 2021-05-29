<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PurchaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $result = DB::table('purchase_data')
                ->get();
        return view('admin_files/purchase_list',compact('result'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin_files/add_purchase_data');
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
            'seller_type' =>  $request->seller_type,
             'metal_type' =>  $request->metal_type,
             'gold_condition' =>  $request->gold_condition,
              'seller_name' =>  $request->seller_name,
               'seller_contact' =>  $request->seller_contact,
                'seller_address' =>  $request->seller_address,
                 'qty' =>  $request->qty,
                  'rate' =>  $request->rate,
                   'given_amount' =>  $request->given_amount,
                    'remaining_amount' =>  $request->remaining_amount,
                  'date' =>  $request->date,
                   'remark' =>  $request->remark,
            
            
            
        ];
        DB::table('purchase_data')->insert($array);
        return redirect('purchase_list');
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
        $result = DB::table('purchase_data')
                ->where('id','=',$id)
                ->first();
        return view('admin_files/purchase_edit',compact('result'));
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
            'seller_type' =>  $request->seller_type,
             'metal_type' =>  $request->metal_type,
             'gold_condition' =>  $request->gold_condition,
              'seller_name' =>  $request->seller_name,
               'seller_contact' =>  $request->seller_contact,
                'seller_address' =>  $request->seller_address,
                 'qty' =>  $request->qty,
                  'rate' =>  $request->rate,
                   'given_amount' =>  $request->given_amount,
                    'remaining_amount' =>  $request->remaining_amount,
                  'date' =>  $request->date,
                  'remark' =>  $request->remark,
                   ];
         DB::table('purchase_data')
            ->where('id',$id)
            ->update($array);
        return redirect('purchase_list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          DB::table('purchase_data')
        ->where('id',$id)
        ->delete();
        return redirect('purchase_list');
    }
}
