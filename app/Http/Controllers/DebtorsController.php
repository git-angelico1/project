<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\lendings; 

class DebtorsController extends Controller
{
    public function index()
    {
        $debtors = lendings::all();
        $debtors = lendings::paginate(4);
        return view('debtors.index');

    }
    public function create()
    {

        return view('debtors.create');

    }
    public function store(Request $request)
    {
        $request->validate([

            'Name'=>'required',
            'date_of_transaction'=>'required',
            'amount_borrowed'=>'required',
            'remarks'=>'required '

        ]);
        lendings::create([
            'Name' => $request->Name,
            'date_of_transaction' => $request->date_of_transaction,
            'amount_borrowed' => $request->amount_borrowed,
            'remarks' => $request->remarks,
        ]);
        return redirect()->route('debtors.index')->with('success', 'Employee is added');
    }

    public function show(lendings $debtor)
    {

        return view('debtors.show', compact('debtor'));

    }

    public function edit(lendings $debtor)
    {

        return view('debtors.edit', compact('debtor'));

    }

     public function update(Request $request, lendings $debtor)
    {

        $request->validate([

            'NAME'=>'required',
            'DATE'=>'required',
            'BORROW'=>'required',
            'remarks'=>'required '

        ]);
         $debtor->fill([
            'Name' => $request->Name,
            'date_of_transaction' => $request->date_of_transaction,
            'amount_borrowed' => $request->amount_borrowed,
            'remarks' => $request->remarks,
        ])->save();

        return redirect()->route('debtors.index')->with('success', 'Employee is Updated!');

    }

    public function destroy(lendings $debtor)
    {

        $debtor->delete();
        return redirect()->route('debtors.index')->with('success', 'Employee deleted');

    }



}