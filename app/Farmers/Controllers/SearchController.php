<?php


namespace App\Farmers\Controllers;
use App\Farmers\Models\Farmer;
use League\Fractal\Manager;
use League\Fractal\Resource\collection;

class SearchController
{

    public function search($wSource)
    { $fractal=new Manager();
        $farmers = Farmer::where('water_source', '=', $wSource)->get();
        $resource = new Collection($farmers,function(Farmer $farmer) {
               return ['id' => (int) $farmer['id'],
                       'name'=>$farmer['name'],
                       'cnic'=> $farmer['cnic'],
//                'mobile_number'=>$farmer['mobile_number'],
//                'secondary_mobile_number'=>$farmer['secondary_mobile_number'],
//                'farm_address'=>$farmer['farm_address'],
//                'res_address'=>$farmer['res_address'],
//                'territory'=>$farmer['territory'],
//                'seed_production_expr'=>$farmer['seed_production_expr'],
//                'leased_acreage'=>$farmer['leased_acreage'],
//                'total_acreage'=>$farmer['total_acreage'],
//                'sanifa_acreage'=>$farmer['sanifa_acreage'],
//                'water_source'=>$farmer['sanifa_acreage'],
//                'manager_name'=>$farmer['manager_name'],
//                'manager_phone'=>$farmer['manager_phone'],
               ];});
        $array = $fractal->createData($resource)->toArray();
        dd($fractal->createData($resource)->toJson());


    }}
