<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Consignee;
use App\Models\Load;
class ConsigneeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin._ Consignee.add');
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

        Consignee::create([
            'Consignee_id'=>$request->Consignee_id,
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
         return redirect('/admin/consignee')->with('success','Record Inserted Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {

        // $search = $request['search'] ?? "";
        // if($search != ""){

        //     $consignee = Consignee::where('name','like',$search)->get();
        // }
        // else{
        //     $consignee = Consignee::all();
        // }
        $data = Consignee::paginate(6);
        return view('admin._ Consignee.show')->with('Consignees',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $consignee = Consignee::find($id);
        return view('admin._ Consignee.update')->with('consignees',$consignee);
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
        $consignee = Consignee::find($id);
        $consignee->Consignee_id=$request->Consignee_id;
        $consignee->name=$request->name;
        $consignee->address=$request->address;
        $consignee-> city=$request->city;
        $consignee->postal_zip=$request->postal_zip;
        $consignee->state=$request->state;
        $consignee->contact=$request->contact;
        $consignee-> telephone=$request->telephone;
        $consignee-> ext=$request->ext;
        $consignee-> email=$request->email;
        $consignee->notes=$request->notes;
        $consignee->save();

         return redirect('admin/consignee/show')->with('success','Record Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=Consignee::find($id);
        if(!is_null($data)){
          $data->delete();
        }
        return redirect()->back();
    }
}
