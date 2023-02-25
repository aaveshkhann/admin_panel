<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Load;
class LoadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('admin.load_entry.add');
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
            'shipper_id' => 'required',
            'driver_id' => 'required',
            'customer_load' => 'required',
            'pick_up_date' => 'required',
            'delivery_date' => 'required',
            'consignee_id' => 'required',
        ]);

         Load::create([
            'load_id'=>$request->load_id,
            'customer_id'=>$request->customer_id,
            'customer_load'=>$request->customer_load,
            'load_type'=>$request->load_type,
            'date'=>$request->date,
            'pick_up_date'=>$request->pick_up_date,
            'delivery_date'=>$request->delivery_date,
            'dispatch'=>$request->dispatch,
            'line_haul_rate'=>$request->line_haul_rate,
            'unloading'=>$request->unloading,
            'reimburse'=>$request->reimburse,

            'detention'=>$request->detention,
            'layover'=>$request->layover,
            'other_charges'=>$request->other_charges,
            'total_rate'=>$request->total_rate,
            'driver_id'=>$request->driver_id,
            'truck'=>$request->truck,
            'trailer'=>$request->trailer,
            'rate'=>$request->rate,
            'shipper_id'=>$request->shipper_id,
            'address'=>$request->address,
            'city'=>$request->city,
            'customer_id'=>$request->customer_id,
            'zip_code'=>$request->zip_code,
            'state'=>$request->state,
            'weight'=>$request->weight,
            'qty'=>$request->qty,
            'shipper_contact'=>$request->shipper_contact,
            'note'=>$request->note,
            'consignee_id'=>$request->consignee_id,
            'con_address'=>$request->con_address,
            'con_city'=>$request->con_city,
            'con_zip_code'=>$request->con_zip_code,
            'con_state'=>$request->con_state,
            'con_contact'=>$request->con_contact,
            'con_note'=>$request->con_note,
            'empty_m'=>$request->empty_m,
            'loaded_m'=>$request->loaded_m,
            'per_mile'=>$request->per_mile,
        ]);

        return redirect('/admin/load_entry/add')->with('success','Record Inserted Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $data = Load::paginate(6);
        return view('admin.load_entry.show')->with('loads',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = load::find($id);
        return view('admin.load_entry.update')->with('Loads',$data);
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
            'shipper_id' => 'required',
            'driver_id' => 'required',
            'customer_load' => 'required',
            'pick_up_date' => 'required',
            'delivery_date' => 'required',
            'consignee_id' => 'required',
        ]);
        $data = Load::find($id);
                $data->load_id=$request->load_id;
                $data->customer_id=$request->customer_id;
                $data->customer_load=$request->customer_load;
                $data->load_type=$request->load_type;
                $data->date=$request->date;
                $data->pick_up_date=$request->pick_up_date;
                $data->delivery_date=$request->delivery_date;
                $data->dispatch=$request->dispatch;
                $data->line_haul_rate=$request->line_haul_rate;
                $data->unloading=$request->unloading;
                $data->reimburse=$request->reimburse;
                $data->detention=$request->detention;
                $data->layover=$request->layover;
                $data->other_charges=$request->other_charges;
                $data->total_rate=$request->total_rate;
                $data->driver_id=$request->driver_id;
                $data->truck=$request->truck;
                $data->trailer=$request->trailer;
                $data->rate=$request->rate;
                $data->shipper_id=$request->shipper_id;
                $data->address=$request->address;
                $data->city=$request->city;
                $data->customer_id=$request->customer_id;
                $data->zip_code=$request->zip_code;
                $data->state=$request->state;
                $data->weight=$request->weight;
                $data->qty=$request->qty;
                $data->shipper_contact=$request->shipper_contact;
                $data->note=$request->note;
                $data->consignee_id=$request->consignee_id;
                $data->con_address=$request->con_address;
                $data->con_city=$request->con_city;
                $data->con_zip_code=$request->con_zip_code;
                $data->con_state=$request->con_state;
                $data->con_contact=$request->con_contact;
                $data->con_note=$request->con_note;
                $data->empty_m=$request->empty_m;
                $data->loaded_m=$request->loaded_m;
                $data->per_mile=$request->per_mile;
                $data->save();
        return redirect('/admin/load_entry/show');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
      $data = Load::find($id);
       if(!is_null( $data)){
        $data->delete();
       }
       return redirect()->back();
    }
}
