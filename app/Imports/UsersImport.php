<?php

namespace App\Imports;
   

use App\Models\Customers;
use App\User;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
    
class UsersImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {

        return new Customers([
            'name'     => $row['name'],
            'contact'   => $row['contact'],
            'email'    => $row['email'], 
            'address'   => $row['address'],
            'city'  => $row['city'],
            'state' => $row['state'],
            'password' => \Hash::make($row['password']),
        ]);
    }
}

