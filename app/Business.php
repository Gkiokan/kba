<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Business extends Model
{

    protected $table = 'business';

    protected $fillable = [
        'user_id', 'name', 'adress', 'plz', 'city', 'tel', 'fax', 'mobil', 'email', 'info_email'
    ];


    public function user(){
        return $this->belongsTo('App\User');
    }
}
