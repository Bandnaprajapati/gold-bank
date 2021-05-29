<?php
namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Input;
use App\Post;
use DB;
use Session;

use Excel;

class MaatwebsiteController extends Controller
{
    public function importExport()
    {
        return view('admin_files.importExport');
    }
    public function downloadExcel($type)
    {
        $data = Post::get()->toArray();
        return Excel::create('laravelcode', function($excel) use ($data) {
            $excel->sheet('mySheet', function($sheet) use ($data)
            {
                $sheet->fromArray($data);
            });
        })->download($type);
    }
    public function importExcel(Request $request)
    {
        if($request->hasFile('import_file')){
            $path = $request->file('import_file')->getRealPath();

            if ($request->has('header')) {
                $data = Excel::import($path, function($reader) {})->get();
            } else {
                $data = array_map('str_getcsv', file($path));
            }
          

            if(!empty($data)) {
            //dd($request->file('import_file')->getRealPath());
                foreach ($data as  $row) {
                   //$data['id'] = $row['0'];
                    $date['title'] = $row['1'];
                    $date['description'] = $row['2'];

                   
                    if(!empty($data)) {
                    $isnert =    Post::insert($data);
                        
                    }
                }
            };

        }

        Session::put('success', 'Youe file successfully import in database!!!');

        return back();
    }
}