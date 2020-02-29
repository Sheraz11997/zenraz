<?php

namespace App\Business_Models;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    //
    protected $table='postions';
    protected $fillable=['name','po_id','user_id','status','is_deleted'];

    public function positionInsert($data){
        $data->save();
    }
    
}
