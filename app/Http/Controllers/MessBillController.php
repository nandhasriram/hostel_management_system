<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MessBillController extends Controller
{
    public function index()
    {
        $messBills = MessBill::all();
        return view('messBills.index', compact('messBills'));
    }

    public function create()
    {
        return view('messBills.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'student_id' => 'required',
            'amount' => 'required|numeric',
            'due_date' => 'required|date',
        ]);

        MessBill::create($request->all());
        return redirect()->route('messBills.index');
    }

    public function show($id)
    {
        $messBill = MessBill::find($id);
        return view('messBills.show', compact('messBill'));
    }

    public function edit($id)
    {
        $messBill = MessBill::find($id);
        return view('messBills.edit', compact('messBill'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'student_id' => 'required',
            'amount' => 'required|numeric',
            'due_date' => 'required|date',
        ]);

        $messBill = MessBill::find($id);
        $messBill->update($request->all());
        return redirect()->route('messBills.index');
    }

    public function destroy($id)
    {
        $messBill = MessBill::find($id);
        $messBill->delete();
        return redirect()->route('messBills.index');
    }
}
