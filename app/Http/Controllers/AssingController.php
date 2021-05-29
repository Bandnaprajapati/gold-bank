<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class AssingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
              $result = DB::table('assing_data')
                ->get();
        return view('admin_files/assing_data_list',compact('result'));   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin_files/assing_data');
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
            'start_id' =>  $request->start_id,
             'end_id' =>  $request->end_id,
             'employee_name' =>  $request->employee_name,
            
            
            
        ];
        DB::table('assing_data')->insert($array);
        return redirect('assing_data');
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
         $result = DB::table('assing_data')
                ->where('id','=',$id)
                ->first();
        return view('admin_files/assingdata_edit',compact('result'));
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
            'start_id' =>  $request->start_id,
            'end_id' => $request->end_id,
            'employee_name' => $request->employee_name,
                   
        ];
         DB::table('assing_data')
            ->where('id',$id)
            ->update($array);
        return redirect('assing_data_list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         DB::table('assing_data')
        ->where('id',$id)
        ->delete();
        return redirect('assing_data_list');
    }
}
