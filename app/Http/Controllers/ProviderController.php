<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ProviderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result = DB::table('provider')
                ->get();
        return view('admin_files/provider_list',compact('result'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin_files/provider_create');
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
            'manager_name' =>  $request->manager_name,
             'bank_name' =>  $request->bank_name,
             'ifsc_code' =>  $request->ifsc_code,
             'branch' =>  $request->branch,
             'city' =>  $request->city,
             'contact' =>  $request->contact,
            'email' => $request->email,
            'state' => $request->state,
            
        ];
        DB::table('provider')->insert($array);
        return redirect('provider_list');
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
        $result = DB::table('provider')
                ->where('id','=',$id)
                ->first();
        return view('admin_files/provider_edit',compact('result'));
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
            'manager_name' =>  $request->manager_name,
             'bank_name' =>  $request->bank_name,
             'ifsc_code' =>  $request->ifsc_code,
             'branch' =>  $request->branch,
             'city' =>  $request->city,
             'contact' =>  $request->contact,
            'email' => $request->email,
            'state' => $request->state,
            
        ];
         DB::table('provider')
            ->where('id',$id)
            ->update($array);
        return redirect('provider_list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         DB::table('provider')
        ->where('id',$id)
        ->delete();
        return redirect('provider_list');
    }
}
