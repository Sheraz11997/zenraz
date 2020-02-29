<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class SContract extends Model
{
//    protected $table = 'contracts';
    public function contractInfoInsert($data){
        DB::table('contracts')->insert([$data]);
    }
}
