<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Business_Models\Farmer;
use App\Http\Requests\StoreBlogPost;

class FarmerController
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $farmer_profiles = new Farmer();
        $farmer_profile=$farmer_profiles->farmerProfile();
        return view('farmer.index', compact('farmer_profile'));
    }

    public function create()
    {
         return view('farmer/create');
    }

    public function store(StoreBlogPost $request)
    {
         $FarmerProfile = new Farmer();
         $data=array(
             'name'    =>  $request->get('name'),
            'cnic'     =>  $request->get('cnic'),
            'territorry' => $request->get('territorry'),
             'owned_acreage'     =>  $request->get('owned_acreage'),
             'leased_acreage'     =>  $request->get('leased_acreage'),
             'total_acreage'     =>  $request->get('total_acreage'),
             'sanifa_acreage' => $request->get('sanifa_acreage'),
            'water_resources' => $request->get('water_resources'),
            'is_deleted' =>'n',
            'created_at'=>now()
         );
        $FarmerProfile->farmerInfoInsert($data);
        return redirect()->route('farmer.index')->with('success', 'Data Added');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,$cnic)
    {
        //
        $cnic=$request->input('cnic');
        $farmer_profiles = new Farmer();
        $farmer_profile= $farmer_profiles->farmerProfileSearch($cnic);
        echo json_encode($farmer_profile);

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
        $farmer_profiles = new Farmer();
        $farmer_profile= $farmer_profiles->farmerProfileEdit($id);
        return view('farmer.edit', compact('farmer_profile', 'id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreBlogPost $request, $id)
    {
        $FarmerProfile  = Farmer::find($id);
        $FarmerProfile->update($request->all());
        return redirect()->route('farmer.index')->with('success','Data Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $FarmerProfile = new Farmer();
        $FarmerProfile->deleteFarmerProfile($id);
         return redirect()->route('farmer.index')->with('success', 'Data Deleted');
    }
}
