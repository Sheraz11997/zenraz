<?php

namespace App\Business_Models;

use Illuminate\Database\Eloquent\Model;
use App\Business_Models\UserProfile;
use Illuminate\Support\Facades\DB;
class AreaStructure extends Model
{
    //
    protected $table='area_structure';
    protected $fillable=['t_name','remarks','address','city','province','country','assign_to','crop','is_deleted'];

    public function teams(){
        $teams=  DB::table('area_structure')
            ->join('postions', 'area_structure.id', '=', 'postions.po_id')
            ->select('area_structure.*', 'postions.user_id')
           -> where('area_structure.is_deleted', '=', 'n')
            ->get();       
    return($teams);
    }
    public function teamInsert($data){
       
        $data->save();
        $id=$data->id;

        return $id;
    }
    public function view_team($id){
        $view_team =AreaStructure::find($id);    
    return($view_team);
    }
     public function search($query){
        $get=DB::table("user_profiles")
        ->select('user_profiles.*')
        ->Where('name','LIKE', "%{$query}%")
        ->get();
        return $get;
    }
}
