<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class UserController extends Controller
{
    public function index()
    {
    	$result = DB::table('users')
    			->get();
    	return view('user',compact('result'));
    }

    public function show($id)
    {
       $result = DB::table('users')
       			->where('id','=',$id)
    			->first();
		return view('user_show',compact('result'));
    }

    public function create(){
        return view('user-create');
    }

    public function store(Request $request){
        $array = [
            'name' =>  $request->name,
            'email' => $request->email,
            'contact' => $request->contact,
            
        ];
        DB::table('users')->insert($array);
        return redirect('user');
    }

    public function edit($id)
    {
       $result = DB::table('users')
                ->where('id','=',$id)
                ->first();
        return view('user-edit',compact('result'));
    }

    public function update(Request $request){
        $id = $request->id;
        $array = [
            'name' =>  $request->name,
            'email' => $request->email,
            'contact'=> $request->contact
        ];
        DB::table('users')
            ->where('id',$id)
            ->update($array);
        return redirect('user');
    }


    public function destroy($id){
        DB::table('users')
        ->where('id',$id)
        ->delete();
        return redirect('user');
    }
}
