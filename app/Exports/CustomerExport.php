<?php

namespace App\Exports;
  
use App\Models\Customers;
use Maatwebsite\Excel\Concerns\FromCollection;
  
class CustomerExport implements FromCollection
{
   
    public function collection()
    {
        return Customers::all();
    }
}
