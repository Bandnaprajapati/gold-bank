<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CallhistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $result = DB::table('call_history')
                ->get();
        return view('admin_files/customer_call_list',compact('result'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin_files/add_callhistory');
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
            'date' =>  $request->date,
             'time' =>  $request->time,
             'telecaller_name' =>  $request->telecaller_name,
             'contact_name' =>  $request->contact_name,
             'contact' =>  $request->contact,
             'email' =>  $request->email,
             'remark' =>  $request->remark,
             
            
            
        ];
        DB::table('call_history')->insert($array);
        return redirect('callhistory_list');
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
        $result = DB::table('call_history')
                ->where('id','=',$id)
                ->first();
        return view('admin_files/edit_call_history',compact('result'));
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
             'date' =>  $request->date,
             'time' =>  $request->time,
             'telecaller_name' =>  $request->telecaller_name,
             'contact_name' =>  $request->contact_name,
             'contact' =>  $request->contact,
             'email' =>  $request->email,
             'remark' =>  $request->remark,
           
            
        ];
         DB::table('call_history')
            ->where('id',$id)
            ->update($array);
        return redirect('call_history');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
 DB::table('call_history')
        ->where('id',$id)
        ->delete();
        return redirect('callhistory_list');
    }
}
