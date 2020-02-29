<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\device_info;
use App\Business_Models\DeviceInfo;


class DeviceController extends Base_Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $device_infos = new DeviceInfo();
        $device_info=$device_infos->deviceInfo();
        return view('devices.index', compact('device_info'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('devices.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
         $this->validate($request, [
            'devicename'    =>  'required|alpha',
            'imei'     =>  'required',
            'model'     =>  'required',
            'issueto'     =>  'required',  
        ]);
        $device_infos = new DeviceInfo();
        $data=array(
            'devicename'    =>  $request->get('devicename'),
            'imei'     =>  $request->get('imei'),
            'model'     =>  $request->get('model'),
            'issue_to'     =>  $request->get('issueto'),
            'issue_by' =>  $request->user()->id,
            'is_deleted' =>'n',
            'created_at'=>now()
        );
        $device_infos->deviceInfoInsert($data);
        // $device_info = new device_info([
        //     'devicename'    =>  $request->get('devicename'),
        //     'imei'     =>  $request->get('imei'),
        //     'model'     =>  $request->get('model'),
        //     'issue_to'     =>  $request->get('issueto'),
        //     'issue_by' =>  $request->user()->id,
        //     'is_deleted' =>'n'
        // ]);
        //  $device_info->save();
        return redirect()->route('devices.create')->with('success', 'Data Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $device_infos = new DeviceInfo();
        $device_info=$device_infos->deviceInfoEdit($id);
        // $device_info =device_info::find($id);
        return view('devices.edit', compact('device_info', 'id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
         $this->validate($request, [
            'devicename'    =>  'required',
            'imei'     =>  'required',
            'model'     =>  'required', 
            'issueto'     =>  'required',   
        ]);
        $device_infos = new DeviceInfo();
        $data=array(
            'devicename'    =>  $request->get('devicename'),
            'imei'     =>  $request->get('imei'),
            'model'     =>  $request->get('model'),
            'issue_to'     =>  $request->get('issueto'),
            'issue_by' =>  $request->user()->id,
            'is_deleted' =>'n',
            'updated_at'=> now()
        );
        $device_infos->updateDeviceInfo($id,$data);
        // $device_info =device_info::find($id);
        // $device_info->devicename = $request->get('devicename');
        // $device_info->imei = $request->get('imei');
        // $device_info->model = $request->get('model');
        // $device_info->issue_to = $request->get('issueto');
        // $device_info->issue_by=$request->user()->id;
        // $device_info->is_deleted ='n';
        // $device_info->save();
        return redirect()->route('devices.index')->with('success', 'Data Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
        // $device_info =device_info::find($id);
        //  $device_info->is_deleted ='y';
        //  $device_info->save();
       $device_infos = new DeviceInfo();
        // $data=array('is_deleted' => 'y');
       $device_infos->deleteDeviceInfo($id, array("is_deleted" => 'y'));
         return redirect()->route('devices.index')->with('success', 'Data Deleted');
    }
}
