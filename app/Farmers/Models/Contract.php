<?php

namespace App\Farmers\Models;

use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    protected $table = 'contracts';

    protected $fillable =array('farmer_id',
        'file1',
        'file2',
        'seed_price',
        'seed_variety');

}
