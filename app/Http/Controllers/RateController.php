<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class RateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result = DB::table('rate')
                ->get();
        return view('admin_files/rate_list',compact('result'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('admin_files/rate_create');
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
            'item' =>  $request->item,
            'amount' => $request->amount,
            'status' => $request->status,
 
            
        ];
        DB::table('rate')->insert($array);
        return redirect('rate_create');
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
        $result = DB::table('rate')
                ->where('id','=',$id)
                ->first();
        return view('admin_files/rate_edite',compact('result'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, )
    {
         $id = $request->id;
         $array = [
            'item' =>  $request->item,
            'amount' => $request->amount,
             'status' => $request->status,
           
            
        ];
         DB::table('rate')
            ->where('id',$id)
            ->update($array);
        return redirect('rate_list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         DB::table('rate')
        ->where('id',$id)
        ->delete();
        return redirect('rate_list');
    }
}
