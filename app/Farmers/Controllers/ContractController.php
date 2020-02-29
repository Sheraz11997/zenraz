<?php

namespace App\Farmers\Controllers;

use App\Farmers\Models\Contract;
use App\Farmers\Requests\ContractRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class ContractController
{
    public function index()
    {
        $data = Contract::get();
        return view('contract.index', compact('data'));
    }

    public function create(Contract $contract)
    {

        $farmerId = Arr::get($_GET, 'id');
        return view('contract/create', compact('contract','farmerId'));
    }

    public function store(ContractRequest $request, Contract $contract)
    {
        $contract->fill($request->validated());
        $contract->saveOrFail();
        return redirect()->route('contract.index')->with('success', 'Data Added');

    }

    public function edit(Contract $contract)
    {
        return view('contract/edit', compact('contract'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SContract  $sContract
     * @return \Illuminate\Http\Response
     */

    public function update(SContract $sContract)
    {
        dd('11');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SContract  $sContract
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        dd('ll');
    }

}
