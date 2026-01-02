<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class addproperty extends Model
{
        protected $fillable = ['id','Property_Title','Description','Price','Property_Type','Street_Address','phone_num','floor','Bedrooms','Bathrooms','Square_Feet','Status','Image','updated_at','created_at'];

    protected $hidden = ['created_at','updated_at'];

}
