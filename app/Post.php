<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // Table Name by default is Post but if need change can declare here
    protected $table = 'posts';

    // Primary Key - can change primary key field
    public $primaryKey = 'id';

    // Timestamps - change to false to avoid timestamp
    public $timestamps = true;

    public function user(){
        return $this->belongsTo('App\User');
    }
}
