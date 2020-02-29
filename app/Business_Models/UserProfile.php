<?php

namespace App\Business_Models;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    //
    protected $table='user_profiles';
    protected $fillable=['name','fname','cnic','gender','phone','city','profession','image','is_deleted'];

    public function userInfoInsert($data){
       
        $data->save();
    }
    public function userProfile(){
        $user_profile=UserProfile::where('is_deleted', '=', 'n')->get();       
    return($user_profile);
    }
    public function userProfileEdit($id){
        $user_profile_edit =UserProfile::find($id);    
    return($user_profile_edit);
    }
    public function updateUserInfo($id,$data){
        UserProfile::where('id',$id)->update($data);
    }
    public function deleteUserProfile($id){
        UserProfile::where('id',$id)->update(["is_deleted"=>'y']);
                    
    }
}
