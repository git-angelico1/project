<?php

namespace App\Http\Controllers;
use App\Models\ontime;
use Illuminate\Http\Request;

class OntimeController extends Controller
{
   public function index()
    {

        $debtors = ontime::orderBy('id', 'desc')->paginate(5);
        return view('debtors.index', compact('debtors'));
    }

    public function create()
    {
        return view('debtors.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'date'=>'required',
            'amount'=>'required',
            'remarks'=>'required',
        
        ]);

        ontime::create($request->post());
        return redirect()->route('debtors.index')->with('success',' Successfully added');
    }

    public function show(ontime $Ontime)
    {
       return view('debtors.show', compact('Ontime'));
    }

    public function edit(ontime $Ontime)
    {
       return view('debtors.edit', compact('Ontime'));
    }

    public function update(Request $request, ontime $Ontime)
    {
       $request->validate([
            'name'=>'required',
            'date'=>'required',
            'amount'=>'required',
            'remarks'=>'required'
        ]);

        $Ontime->fill([
            'name' => $request->name,
            'date' => $request->date,
            'amount' => $request->amount,
            'remarks' => $request->remarks,
            
        ])->save();


       return redirect()->route('debtors.index')->with('success','Has been updated');
    }

    public function destroy(ontime $Ontime)
    {
       $Ontime->delete();
       return redirect()->route('debtors.index')->with('success', 'Has been deleted!');

   }
}
