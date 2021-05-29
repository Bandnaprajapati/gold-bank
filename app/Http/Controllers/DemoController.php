<?php

namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Exports\CustomerExport;
use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;
  
class DemoController extends Controller
{
    
    public function importExportView()
    {
       return view('admin_files.import');
    }
   
    public function export() 
    {
        return Excel::download(new CustomerExport, 'Customers.xlsx');
    }
   
    public function import() 
    {
        Excel::import(new UsersImport,request()->file('file'));
           
        return redirect()->back();
    }
}