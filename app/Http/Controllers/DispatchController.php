<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dispatch;
class DispatchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.dispatch.add');
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
            'first_name' => 'required',
            'last_name' => 'required',
            'phone' => 'required',
            'email' => 'required|email|unique:users,email',
            'rate' => 'required',

        ]);

        Dispatch::create([
            'dispatch_id'=>$request->dispatch_id,
            'first_name'=>$request->first_name,
            'last_name'=>$request->last_name,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'rate'=>$request->rate,

        ]);

        return redirect('/admin/dispatch')->with('success','Record Inserted Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $data = Dispatch::paginate(6);
        return view('admin.dispatch.show')->with('dispatchs',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dispatch = Dispatch::find($id);
        return view('admin.dispatch.update')->with('dispatch',$dispatch );
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

        $validated = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'phone' => 'required',
            'email' => 'required|email|unique:users,email',
            'rate' => 'required',

        ]);
        $dispatch = Dispatch::find($id);
        $dispatch-> dispatch_id=$request->dispatch_id;
        $dispatch->first_name=$request->first_name;
        $dispatch->last_name=$request->last_name;
        $dispatch->phone=$request->phone;
        $dispatch->email=$request->email;
        $dispatch->rate=$request->rate;
        $dispatch->save();

        return redirect('admin/dispatch/show');



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Dispatch::find($id)->delete();
        return redirect()->back();
    }
}
