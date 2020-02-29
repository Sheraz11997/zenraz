<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user_profile extends Model
{
    //
     protected $table='user_profiles';
     protected $fillable=['name','fname','cnic','gender','phone','city','profession','image','is_deleted'];
}
