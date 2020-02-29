<?php

namespace App\Farmers\Controllers;
use App\Farmers\Models\Farmer;
use App\Farmers\Requests\FarmerRequest;
use App\Farmers\Services\FarmerService;

class FarmerController
{
    /**
     * @var FarmerService
     */
    private $service;

    public function __construct(FarmerService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $farmers = $this->service->getAll();
        return view('farmer.index', compact('farmers'));
    }

    public function create(Farmer $farmer)
    {
         return view('farmer/create', compact('farmer'));
    }

    public function store(FarmerRequest $request, Farmer $farmer)
    {
        $farmer->fill($request->validated());
        $farmer->saveOrFail();
        return redirect()->route('farmer.index')->with('success', 'Data Added');
    }

    public function edit(Farmer $farmer)
    {
        return view('farmer.edit', compact('farmer'));
    }

    public function update(FarmerRequest $request, Farmer $farmer)
    {
        $farmer->update($request->validated());
        return redirect()->route('farmer.index')->with('success','Data Updated');
    }

    public function destroy(Farmer $farmer)
    {
        $farmer->delete();
        return redirect()->route('farmer.index')->with('success', 'Data Deleted');
    }

}
