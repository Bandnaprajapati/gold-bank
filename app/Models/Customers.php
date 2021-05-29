<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    protected $fillable = [
        'name', 'email', 'password','contact','address','city','state'
    ];


    protected $table = 'customer';
    public $timestamps = false;

}
