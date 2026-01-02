<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    protected $table="phones";
    protected $fillable = ['id','code','phone','user_id'];
    protected $hidden = ['created_at','updated_at','user_id'];
    public $timestamps = false;

    
public function user(){
    
    
    return $this ->belongsTo(User::class,'user_id');
}







}

