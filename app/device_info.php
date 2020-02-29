<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class device_info extends Model
{
    //
     protected $table='device_infos';
     protected $fillable=['devicename','imei','model','issue_to','issue_by','is_deleted'];
}
