<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    //
    protected $fillable = [
        'name', 'phone', 'email', 'month','day','year','address1','address2'
    ];
}
