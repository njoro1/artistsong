<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Songs extends Model
{
    // // Table Name
    // protected $table = 'songs';
    // // Primary Key
    // public $primaryKey = 'song_id';
    // // Timestamps
    // public $timestamps = true;
    protected $fillable = [

    	'id','user_id','title','genre','embed_code'];

    public function user(){
        return $this->hasOne('App\User ,id, user_id');
    }
}
