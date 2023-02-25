<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shipper;
class ShipperController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.shipper.add');
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
            'address' => 'required',
            'city' => 'required',
            'postal_zip' => 'required',
            'state' => 'required',
            'contact' => 'required',
        ]);

        Shipper::create([
            'shippers_id'=>$request->shippers_id,
            'name'=>$request->name,
            'address'=>$request->address,
            'city'=>$request->city,
            'postal_zip'=>$request->postal_zip,
            'state'=>$request->state,
            'contact'=>$request->contact,
            'telephone'=>$request->telephone,
            'ext'=>$request->ext,
            'email'=>$request->email,
            'notes'=>$request->notes
         ]);
         return redirect('admin/shipper/add')->with('success','Record Inserted Successfully');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $data = Shipper::paginate(6);
        return view('admin.shipper.show')->with('shippers',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $shipper = Shipper::find($id);
        return view('admin.shipper.update')->with('shippers',$shipper);
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
            'name' => 'required|string|max:25',
            'address' => 'required',
            'city' => 'required',
            'postal_zip' => 'required',
            'state' => 'required',
            'contact' => 'required',
        ]);

        $shipper = Shipper::find($id);
        $shipper->shippers_id=$request->shippers_id;
        $shipper-> name=$request->name;
        $shipper->address=$request->address;
        $shipper->city=$request->city;
        $shipper-> postal_zip=$request->postal_zip;
        $shipper-> state=$request->state;
        $shipper-> contact=$request->contact;
        $shipper-> telephone=$request->telephone;
        $shipper->ext=$request->ext;
        $shipper-> email=$request->email;
        $shipper->notes=$request->notes;
        $shipper->save();
        return redirect('admin/shipper/show');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=Shipper::find($id);
        if(!is_null($data)){
          $data->delete();
        }
        return redirect()->back();
    }
}
