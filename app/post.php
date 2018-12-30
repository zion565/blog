<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class post extends Model
{
    //table name
    protected $table = 'posts';
    //primary kay
    public $primaryKey = 'id';
    //timestamp
    public $timestamp = true;

    public function user(){
        return $this->belongsTo('App\User');
    }
}
