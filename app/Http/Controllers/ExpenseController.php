<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Expense;
class ExpenseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.Expense.add');
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
         Expense::create([
            'date'=>$request->date,
            'vendor'=>$request->vendor,
            'description'=>$request->description,
            'account_holder'=>$request->account_holder,
            'amount'=>$request->amount
         ]);

         return redirect('/admin/expense')->with('success','Record Inserted Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $data = Expense::paginate(6);
        return view('admin.Expense.show')->with('Expenses',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $expense = Expense::find($id);
        return view('admin.Expense.update')->with('expense',$expense);
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
       $expense = Expense::find($id);
       $expense->date=$request->date;
       $expense->vendor=$request->vendor;
       $expense-> description=$request->description;
       $expense->account_holder=$request->account_holder;
       $expense->amount=$request->amount;
       $expense->save();

       return redirect('admin/expense/show');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=Expense::find($id);
        if(!is_null($data)){
          $data->delete();
        }
        return redirect()->back();
    }
}
