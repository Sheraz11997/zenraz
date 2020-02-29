<?php

namespace App\Farmers\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class search extends Model
{
    public function find($id){
        $table='farmers';
        $formar_profile= DB::table('farmers')
            ->select('id','name','cnic','territorry','owned_acreage','leased_acreage','total_acreage','sanifa_acreage','water_resources')
            ->where('id', '=', $id)->get();
        return($formar_profile);
    }
}
