<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\user_profile;
use App\Business_Models\UserProfile;
class UserController extends Base_Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_profiles = new UserProfile();
        $user_profile=$user_profiles->userProfile();
        return view('user.index', compact('user_profile'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

       
        return view('user.create');
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
            'name'    =>  'required',
            'fname'     =>  'required',
            'cnic'     =>  'required',
            'gender'     =>  'required',
            'phone'     =>  'required',
            'city'     =>  'required',
            'profession'     =>  'required'
        ]);
        $UserProfile = new UserProfile();
        $data= new UserProfile([
             'name'    =>  $request->get('name'),
            'fname'     =>  $request->get('fname'),
            'cnic'     =>  $request->get('cnic'),
             'gender'     =>  $request->get('gender'),
            'phone'     =>  $request->get('phone'),
            'city'     =>  $request->get('city'),
            'profession'     =>  $request->get('profession'),
            'image'=>$request->get('first_image_hidden'),
            'is_deleted' =>'n',
            'created_at'=>now()
        ]);
        $UserProfile->userInfoInsert($data);
        // $user_profile = new user_profile([
        //     'name'    =>  $request->get('name'),
        //     'fname'     =>  $request->get('fname'),
        //     'cnic'     =>  $request->get('cnic'),
        //      'gender'     =>  $request->get('gender'),
        //     'phone'     =>  $request->get('phone'),
        //     'city'     =>  $request->get('city'),
        //     'profession'     =>  $request->get('profession'),
        //     'is_deleted' =>'n'
        // ]);
        //  $user_profile->save();
        return redirect()->route('user.create')->with('success', 'Data Added');
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
        $user_profiles = new UserProfile();
        $user_profile= $user_profiles->userProfileEdit($id);
        // $user_profile =user_profile::find($id);
        return view('user.edit', compact('user_profile', 'id'));
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
            'name'    =>  'required',
            'fname'     =>  'required',
            'cnic'     =>  'required',
            'gender'     =>  'required',
            'phone'     =>  'required',
            'city'     =>  'required',
            'profession'     =>  'required'
        ]);
        $UserProfile = new UserProfile();
        $data=array(
             'name'    =>  $request->get('name'),
            'fname'     =>  $request->get('fname'),
            'cnic'     =>  $request->get('cnic'),
             'gender'     =>  $request->get('gender'),
            'phone'     =>  $request->get('phone'),
            'city'     =>  $request->get('city'),
            'profession'     =>  $request->get('profession'),
            'image'=>$request->get('first_image_hidden'),
            'is_deleted' =>'n',
            'updated_at'=> now()
        );
        $UserProfile->updateUserInfo($id,$data);
        // $user_profile =user_profile::find($id);
        // $user_profile->name = $request->get('name');
        // $user_profile->fname = $request->get('fname');
        // $user_profile->cnic = $request->get('cnic');
        // $user_profile->gender = $request->get('gender');
        // $user_profile->phone = $request->get('phone');
        // $user_profile->city = $request->get('city');
        // $user_profile->profession = $request->get('profession');
        // $user_profile->is_deleted ='n';
        // $user_profile->save();
        return redirect()->route('user.index')->with('success', 'Data Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
        $UserProfile = new UserProfile();
        $UserProfile->deleteUserProfile($id);
         return redirect()->route('user.index')->with('success', 'Data Deleted');

    }
    public function upload(Request $request)
    {
        
         $file=$request->file('file');
                $extension=$file->getClientOriginalExtension();
                $filename=time().'.'.$extension;
                $file->move('uploads/users/',$filename);
               echo $filename;
    
   }

   public function view($id)
    {
        $user_profile = new UserProfile();
        $user_profile= $user_profile->userProfileEdit($id);
        return view('user.view', compact('user_profile', 'id'));
    }
}
