<?php

namespace App\Http\Controllers;

use App\Business_Models\Farmer;
use App\SContract;
use Illuminate\Http\Request;

class SContractController extends Controller
{
    public function index()
    {
        $data = SContract::get();
        return view('contract.index', compact('data'));
    }
    public function create()
    {
        return view('contract.create');
    }

    public function store(Request $request)
    {
        $dd = $this->validate($request, [
            'name'    =>  'required|alpha',
            'cnic'     =>  'required',
            'manager_name' => 'required',
            'water_resources' => 'required',
        ]);
        $contract = new SContract();
        $data=array(
            'name'    =>  $request->get('name'),
            'file1'    =>  $request->get('file1'),
            'file2'    =>  $request->get('file2'),
            'cnic'     =>  $request->get('cnic'),
            'phone1' => $request->get('phone1'),
            'phone2' => $request->get('phone2'),
            'manager_name'    =>  $request->get('manager_name'),
            'experience' => $request->get('experience'),
            'area' => $request->get('area'),
            'address' => $request->get('address'),
            'seed_variety' => $request->get('seed_variety'),
            'seed_price' => $request->get('seed_price'),
            'owned_acreage'     =>  $request->get('owned_acreage'),
            'leased_acreage'     =>  $request->get('leased_acreage'),
            'total_acreage'     =>  $request->get('total_acreage'),
            'sanifa_acreage' => $request->get('sanifa_acreage'),
            'water_resources' => $request->get('water_resources'),
            'is_deleted' =>'n',
            'created_at'=>now()
        );
        $contract->contractInfoInsert($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SContract  $sContract
     * @return \Illuminate\Http\Response
     */
    public function show(SContract $sContract)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SContract  $sContract
     * @return \Illuminate\Http\Response
     */
    public function edit(SContract $sContract)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SContract  $sContract
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SContract $sContract)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SContract  $sContract
     * @return \Illuminate\Http\Response
     */
    public function destroy(SContract $sContract)
    {
    }
}
