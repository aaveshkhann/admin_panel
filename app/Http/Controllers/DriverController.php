<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MOdels\Driver;
use App\MOdels\Load;
class DriverController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.drivers.add');
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
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'postal_zip' => 'required',
            'telephone' => 'required',
            'email' => 'required',
            'dob' => 'required',
            'ssn' => 'required',
            'insurance' => 'required',
            'insurance_truck' => 'required',
            'ifta_service' => 'required',
            'account_holder' => 'required',
            'license_number' => 'required',
            'license_exp' => 'required',
            'medical_date' => 'required',
            'medical_exp' => 'required',
            'drug_test' => 'required',
            'pay_type' => 'required',
            'percentage' => 'required',
            'prepass' => 'required',
            'load_board' => 'required',
            'trailer_rent' => 'required',

        ]);

            Driver::create([
                'driver_id'=>$request->driver_id,
                'first_name'=>$request->first_name,
                'last_name'=>$request->last_name,
                'address'=>$request->address,
                'city'=>$request->city,
                'state'=>$request->state,
                'postal_zip'=>$request->postal_zip,
                'telephone'=>$request->telephone,
                'email'=>$request->email,
                'dob'=>$request->dob,
                'ssn'=>$request->ssn,
                'insurance'=>$request->insurance,
                'insurance_truck'=>$request->insurance_truck,
                'ifta_service'=>$request->ifta_service,
                'account_holder'=>$request->account_holder,
                'license_number'=>$request->license_number,
                'license_exp'=>$request->license_exp,
                'medical_date'=>$request->medical_date,
                'medical_exp'=>$request->medical_exp,
                'drug_test'=>$request->drug_test,
                'pay_type'=>$request->pay_type,
                'per_mile'=>$request->per_mile,
                'empty_mile'=>$request->empty_mile,
                'percentage'=>$request->percentage,
                'status'=>$request->status,
                'notes'=>$request->notes,
                'prepass'=>$request->prepass,
                'load_board'=>$request->load_board,
                'trailer_rent'=>$request->trailer_rent,

            ]);



         return redirect('/admin/driver')->with('success','Record Inserted Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $data = Driver::paginate(6);
        return view('admin.drivers.show')->with('Drivers',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $driver = Driver::find($id);
       return view('admin.drivers.update')->with('drivers',$driver);
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
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'postal_zip' => 'required',
            'telephone' => 'required',
            'email' => 'required',
            'dob' => 'required',
            'ssn' => 'required',
            'insurance' => 'required',
            'insurance_truck' => 'required',
            'ifta_service' => 'required',
            'account_holder' => 'required',
            'license_number' => 'required',
            'license_exp' => 'required',
            'medical_date' => 'required',
            'medical_exp' => 'required',
            'drug_test' => 'required',
            'pay_type' => 'required',
            'percentage' => 'required',
            'prepass' => 'required',
            'load_board' => 'required',
            'trailer_rent' => 'required',

        ]);
        $driver =  Driver::find($id);
            $driver->driver_id=$request->driver_id;
            $driver->first_name=$request->first_name;
            $driver->last_name=$request->last_name;
            $driver->address=$request->address;
            $driver->city=$request->city;
            $driver->state=$request->state;
            $driver->postal_zip=$request->postal_zip;
            $driver->telephone=$request->telephone;
            $driver->email=$request->email;
            $driver->dob=$request->dob;
            $driver->ssn=$request->ssn;
            $driver->insurance=$request->insurance;
            $driver->insurance_truck=$request->insurance_truck;
            $driver->ifta_service=$request->ifta_service;
            $driver->account_holder=$request->account_holder;
            $driver->license_number=$request->license_number;
            $driver->license_exp=$request->license_exp;
            $driver->medical_date=$request->medical_date;
            $driver->medical_exp=$request->medical_exp;
            $driver->drug_test=$request->drug_test;
            $driver->pay_type=$request->pay_type;
            $driver->per_mile=$request->per_mile;
            $driver->empty_mile=$request->empty_mile;
            $driver->percentage=$request->percentage;
            $driver->status=$request->status;
            $driver->notes=$request->notes;
            $driver->prepass=$request->prepass;
            $driver->load_board=$request->load_board;
            $driver->trailer_rent=$request->trailer_rent;
            $driver->save();

        return redirect('admin/driver/show');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=Driver::find($id);
        if(!is_null($data)){
          $data->delete();
        }
        return redirect()->back();
    }
}
