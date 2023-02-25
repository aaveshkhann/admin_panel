<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipment;
use App\Models\Load;
class EquipmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin._ equipment.add');
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
            'owner_first_name' => 'required',
            'owner_last_name' => 'required',
            'unit_number' => 'required',
            'make' => 'required',
            'year' => 'required',
            'vin' => 'required',
            'plate_number' => 'required',
            'plate_exp' => 'required',
            'start_date' => 'required',
            'dot_date' => 'required',
            'annual_date' => 'required',
            'days_inspection_date' => 'required',

        ]);

        Equipment::create([
            'owner_first_name'=>$request->owner_first_name,
            'owner_last_name'=>$request->owner_last_name,
            'unit_number'=>$request->unit_number,
            'make'=>$request->make,
            'type'=>$request->type,
            'year'=>$request->year,
            'vin'=>$request->vin,
            'plate_number'=>$request->plate_number,
            'plate_exp'=>$request->plate_exp,
            'mileage'=>$request->mileage,
            'truck'=>$request->truck,
            'trailer'=>$request->trailer,
            'province'=>$request->province,
            'axels'=>$request->axels,
            'fuel_type'=>$request->fuel_type,
            'weight'=>$request->weight,
            'start_date'=>$request->start_date,
            'deactivation_date'=>$request->deactivation_date,
            'dot_date'=>$request->dot_date,
            'ifta_truck'=>$request->ifta_truck,
            'annual_date'=>$request->annual_date,
            'days_inspection_date'=>$request->days_inspection_date,


         ]);

         return redirect('admin/equipment/add')->with('success','Record Inserted Successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $data = Equipment::paginate(6);
        return view('admin._ equipment.show')->with('Equipments',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $equipment = Equipment::find($id);
        return view('admin._ equipment.update')->with('equipments',$equipment);
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
            'owner_first_name' => 'required',
            'owner_last_name' => 'required',
            'unit_number' => 'required',
            'make' => 'required',
            'year' => 'required',
            'vin' => 'required',
            'plate_number' => 'required',
            'plate_exp' => 'required',
            'start_date' => 'required',
            'dot_date' => 'required',
            'annual_date' => 'required',
            'days_inspection_date' => 'required',

        ]);

        $equipment = Equipment::find($id);
            $equipment->owner_first_name=$request->owner_first_name;
            $equipment->owner_last_name=$request->owner_last_name;
            $equipment->unit_number=$request->unit_number;
            $equipment->make=$request->make;
            $equipment->type=$request->type;
            $equipment->year=$request->year;
            $equipment->vin=$request->vin;
            $equipment->plate_number=$request->plate_number;
            $equipment->plate_exp=$request->plate_exp;
            $equipment->mileage=$request->mileage;
            $equipment->truck=$request->truck;
            $equipment->trailer=$request->trailer;
            $equipment->province=$request->province;
            $equipment->axels=$request->axels;
            $equipment->fuel_type=$request->fuel_type;
            $equipment->weight=$request->weight;
            $equipment->start_date=$request->start_date;
            $equipment->deactivation_date=$request->deactivation_date;
            $equipment->dot_date=$request->dot_date;
            $equipment->ifta_truck=$request->ifta_truck;
            $equipment->annual_date=$request->annual_date;
            $equipment-> days_inspection_date=$request->days_inspection_date;
        $equipment->save();

      return redirect('admin/equipment/show');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=Equipment::find($id);
        if(!is_null($data)){
          $data->delete();
        }
        return redirect()->back();
    }
}
