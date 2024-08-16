<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HostelBillController extends Controller
{
    public function index()
    {
        $hostelBills = HostelBill::all();
        return view('hostelBills.index', compact('hostelBills'));
    }

    public function create()
    {
        return view('hostelBills.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'student_id' => 'required',
            'amount' => 'required|numeric',
            'due_date' => 'required|date',
        ]);

        HostelBill::create($request->all());
        return redirect()->route('hostelBills.index');
    }

    public function show($id)
    {
        $hostelBill = HostelBill::find($id);
        return view('hostelBills.show', compact('hostelBill'));
    }

    public function edit($id)
    {
        $hostelBill = HostelBill::find($id);
        return view('hostelBills.edit', compact('hostelBill'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'student_id' => 'required',
            'amount' => 'required|numeric',
            'due_date' => 'required|date',
        ]);

        $hostelBill = HostelBill::find($id);
        $hostelBill->update($request->all());
        return redirect()->route('hostelBills.index');
    }

    public function destroy($id)
    {
        $hostelBill = HostelBill::find($id);
        $hostelBill->delete();
        return redirect()->route('hostelBills.index');
    }
}
