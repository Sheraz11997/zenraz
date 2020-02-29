<?php

namespace App\Business_Models;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class DeviceInfo extends Model
{
    //
    public function deviceInfoInsert($data){
        DB::table('device_infos')->insert([$data]);
    }
    public function deviceInfo(){
        $table='device_infos';
        $device_info =DB::table('device_infos')
                    ->select('id','devicename','imei','model','issue_to')
                    ->where('is_deleted', '=', 'n')->get();
        return($device_info);
    }
    public function deviceInfoEdit($id){
        $table='device_infos';
        $device_info =DB::table('device_infos')
                    ->select('id','devicename','imei','model','issue_to')
                    ->where('id', '=', $id)->get();
        return($device_info);
    }
    public function updateDeviceInfo($id,$data){
        DB::table('device_infos')
            ->where('id',$id)
            ->update($data);
    }
    public function deleteDeviceInfo($id){
        $table='device_infos';
                    DB::table('device_infos')
                    ->where('id',$id)
                    ->update(["is_deleted"=>'y']);            
    }
}
