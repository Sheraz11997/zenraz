<?php

namespace App\Farmers\Services;

use App\Farmers\Models\Farmer;
use Illuminate\Database\Eloquent\Collection;

class FarmerService
{
    public function getAll(): Collection
    {
        return Farmer::all();
    }
}
