<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use File;

class TelecallerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $result = DB::table('telecaller_data')
                ->get();
        return view('admin_files/telecaller_list',compact('result'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('admin_files/add_telecaller');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         if($request->hasfile('image')){
            $destinationPath = public_path( 'images/user' );
            if ( ! File::exists( $destinationPath ) ) {
                File::makeDirectory( $destinationPath, 0777, true, true );
              }
             
                $image = $request['image'];
               // $title = $image->getClientOriginalName();
                $extension = $image->getClientOriginalExtension(); 
                $fileName = time().'.'.$extension; 
                $image->move($destinationPath, $fileName);
            }else{
                $fileName = Null;
            }
            

            

         $array = [
            'name' =>  $request->name,
             'email' =>  $request->email,
             'contact' =>  $request->contact,
              'address' =>  $request->address,
               'user_id' =>  $request->user_id,
                'password' =>  $request->password,
                 'user_image' =>   $fileName,
                  'id_proof' =>  $request->id_proof,
                   
         ];
        DB::table('telecaller_data')->insert($array);
        return redirect('');
    
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
         $result = DB::table('telecaller_data')
                ->where('id','=',$id)
                ->first();
        return view('admin_files/telecaller_edit',compact('result'));
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
            'name' =>  $request->name,
             'email' =>  $request->email,
             'contact' =>  $request->contact,
              'address' =>  $request->address,
               'user_id' =>  $request->user_id,
                   ];
         DB::table('telecaller_data')
            ->where('id',$id)
            ->update($array);
        return redirect('telecaller_list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         DB::table('telecaller_data')
        ->where('id',$id)
        ->delete();
        return redirect('telecaller_list');
    }
}
