<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Add_User;
use Illuminate\Support\Facades\Hash;
class Add_UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.user.add');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:25',
            'email' => 'required',
            'username' => 'required',
            'password' => 'required',
            'confirm_password' => 'required',
            'image' => 'required',
        ]);

        Add_User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'username'=>$request->username,
            'phone'=>$request->phone,
            'password'=>Hash::make($request->password),
            'confirm_password'=>Hash::make($request->confirm_password),
            'image'=>$request->image,

         ]);
    return redirect('/admin/add_user')->with('success','Record Inserted Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $data = Add_User::paginate(6);
        return view('admin.user.show')->with('Add_Users',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = Add_User::find($id);
        return view('admin.user.update')->with('users',$user);
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
        $user = Add_User::find($id);
        $user->name=$request->name;
        $user->email=$request->email;
        $user->username=$request->username;
        $user->phone=$request->phone;
        $user->image=$request->image;
        $user->save();
  return redirect('admin/add_user/show');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=Add_User::find($id);
        if(!is_null($data)){
          $data->delete();
        }
        return redirect()->back();
    }
}
