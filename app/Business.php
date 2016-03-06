<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    protected $fillable = [
        'name', 'street', 'plz', 'city', 'tel', 'fax', 'mobil', 'email', 'info_email'
    ];

}
