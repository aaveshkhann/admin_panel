<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Customer;
use App\models\load;
class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.customers.add');
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
            'zip' => 'required',
            'state' => 'required',
            'country' => 'required',
            'telephone' => 'required',

        ]);

             Customer::create([
                'customer_id'=>$request->customer_id,
                'name'=>$request->name,
                'address'=>$request->address,
                'city'=>$request->city,
                'zip'=>$request->zip,
                'state'=>$request->state,
                'country'=>$request->country,
                'telephone'=>$request->telephone,
                'mc'=>$request->mc,
                'email'=>$request->email,
                'notes'=>$request->notes
             ]);
             return redirect('admin/customer/add')->with('success','Record Inserted Successfully');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $data = Customer::paginate(6);
        return view('admin.customers.show')->with('customers',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Customer::find($id);
        return view('admin.customers.upadate')->with('customers' ,$data);
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
            'zip' => 'required',
            'state' => 'required',
            'country' => 'required',
            'telephone' => 'required',

        ]);
        $customer = Customer::find($id);
        $customer->customer_id=$request->customer_id;
        $customer->name=$request->name;
        $customer-> address=$request->address;
        $customer-> city=$request->city;
        $customer->zip=$request->zip;
        $customer->state=$request->state;
        $customer->country=$request->country;
        $customer->telephone=$request->telephone;
        $customer->mc=$request->mc;
        $customer->email=$request->email;
        $customer->notes=$request->notes;
        $customer->save();

        return redirect('admin/customer/show');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=Customer::find($id);
       if (!is_null($data)){
         $data->delete();
        }
        return redirect()->back();
    }
}
