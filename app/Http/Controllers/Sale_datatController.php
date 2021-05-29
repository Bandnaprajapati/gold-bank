<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class Sale_datatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $result = DB::table('sale_database')
                ->get();
        return view('admin_files/sale_list',compact('result'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('admin_files/add_sale_data');
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
            'buyer_type' =>  $request->buyer_type,
             'metal_type' =>  $request->metal_type,
             'product_condition' =>  $request->product_condition,
              'buyer_name' =>  $request->buyer_name,
               'buyer_contact' =>  $request->buyer_contact,
                'buyer_address' =>  $request->buyer_address,
                 'qty' =>  $request->qty,
                  'rate' =>  $request->rate,
                   'total_amount' =>  $request->total_amount,
             'payment_type' =>  $request->payment_type,
            'book_amount' =>  $request->book_amount,
            'emi_count' =>  $request->emi_count,
            'rate_of_interest' =>  $request->rate_of_interest,
            'emi_amount' =>  $request->emi_amount,
            'received_amount' =>  $request->emi_amount,
            'received_amount' =>  $request->received_amount,

                    'remaining_amount' =>  $request->remaining_amount,
                  'date' =>  $request->date,
                   'remark' =>  $request->remark,
               ];
               
        DB::table('sale_database')->insert($array);
        return redirect('add_sale_data');
       
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
        $result = DB::table('sale_database')
                ->where('id','=',$id)
                ->first();
        return view('admin_files/sale_data_edit',compact('result'));
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
            'buyer_type' =>  $request->buyer_type,
             'metal_type' =>  $request->metal_type,
             'product_condition' =>  $request->product_condition,
              'buyer_name' =>  $request->buyer_name,
               'buyer_contact' =>  $request->buyer_contact,
                'buyer_address' =>  $request->buyer_address,
                 'qty' =>  $request->qty,
                  'rate' =>  $request->rate,
                   'total_amount' =>  $request->total_amount,
                   'payment_type' => $request->payment_type,
                   'book_amount' => $request->book_amount,
                   'emi_count' => $request->emi_count,
                   'rate_of_interest' => $request->rate_of_interest,
                   'emi_amount' => $request->emi_amount,
                   'received_amount' => $request->received_amount,
                    'remaining_amount' =>  $request->remaining_amount,
                  'date' =>  $request->date,
                  'remark' =>  $request->remark,
                   ];
         DB::table('sale_database')
            ->where('id',$id)
            ->update($array);
        return redirect('sale_list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         DB::table('sale_database')
        ->where('id',$id)
        ->delete();
        return redirect('sale_list');
    
    }
}
