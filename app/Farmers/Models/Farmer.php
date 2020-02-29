<?php

namespace App\Farmers\Models;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Farmer extends Model
{
    protected $fillable = [
        'name',
        'cnic',
        'mobile_number',
        'secondary_mobile_number',
        'farm_address',
        'res_address',
        'territory',
        'avatar',
        'seed_production_expr',
        'owned_acreage',
        'leased_acreage',
        'total_acreage',
        'sanifa_acreage',
        'water_source',
        'manager_name',
        'manager_relation_type',
    ];

    public static $waterSources = [
        0 => 'No Selection',
        1 => 'Canal',
        2 => 'Tube Well',
        3 => 'Canal + Tube well'
    ];

    public function farmerInfoInsert($data){
        DB::table('farmers')->insert([$data]);
    }
    public function farmerProfile(){
        $table='farmers';
        $formar_profile= DB::table('farmers')
            ->select('id','name','cnic','territorry','owned_acreage','leased_acreage','total_acreage','sanifa_acreage','water_resources')
            ->where('is_deleted', '=', 'n')->get();
        return($formar_profile);
    }
    public function farmerProfileEdit($id){
        $table='farmers';
        $formar_profile= DB::table('farmers')
            ->select('id','name','cnic','territorry','owned_acreage','leased_acreage','total_acreage','sanifa_acreage','water_resources')
            ->where('id', '=', $id)->get();
        return($formar_profile);
    }
    public function updateFarmerInfo($id,$data){
        DB::table('farmers')
            ->where('id',$id)
            ->update($data);
    }

    public function farmerProfileSearch($cnic){
        $table='farmers';
        $formar_profile= DB::table('farmers')
            ->select('id','name','cnic','territorry','owned_acreage','leased_acreage','total_acreage','sanifa_acreage','water_resources')
            ->where('cnic', '=', $cnic)->get();
        return($formar_profile);
    }

    public function deleteFarmerProfile($id){
        $table='farmers';
        DB::table('farmers')
            ->where('id',$id)
            ->update(["is_deleted"=>'y']);

    }
}
