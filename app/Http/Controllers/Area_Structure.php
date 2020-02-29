<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Business_Models\AreaStructure;
use App\Business_Models\Position;

class Area_Structure extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $teams = new AreaStructure();
        $teams=$teams->teams();
        return view('area_structure.index', compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('area_structure.create');
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
            'team_name'    =>  'required',
            'remarks'     =>  'required',
            'address'     =>  'required',
            'city'     =>  'required',
            'province'     =>  'required',
            'country'     =>  'required',
            'assign_to'     =>  'required',
            'crop'     =>  'required',
            
        ]);
        $teamInsert = new AreaStructure();
        $data= new AreaStructure([
             't_name'    =>  $request->get('team_name'),
            'remarks'     =>  $request->get('remarks'),
            'address'     =>  $request->get('address'),
            'city'     =>  $request->get('city'),
            'province'     =>  $request->get('province'),
            'country'     =>  $request->get('country'),
            'crop'     =>  $request->get('crop'),
            'is_deleted' =>'n',
            'created_at'=>now()
        ]);

        $id=$teamInsert->teamInsert($data);

        $positionInsert = new Position();
        $data= new Position([
            'name'    =>  $request->get('name'),
            'po_id'     =>  $id,
            'user_id'     =>  $request->get('assign_to'),
            'status'     =>  'active',
            'is_deleted' =>'n',
            'created_at'=>now()
        ]);

        $positionInsert->positionInsert($data);
        return redirect()->route('area_structure.index')->with('success', 'Data Added');
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function view($id)
    {
        $view_team = new AreaStructure();
        $view_team= $view_team->view_team($id);
        return view('area_structure.view', compact('view_team', 'id'));
    }
    public function user(Request $request)
    {
       
        $query=$request->input('query');
        $AreaStructure = new AreaStructure();
        $data = $AreaStructure->search($query);
        return $data;
       
       
    }
}
