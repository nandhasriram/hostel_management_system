<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PayrollController extends Controller
{
    public function index()
    {
        $payrolls = Payroll::all();
        return view('payrolls.index', compact('payrolls'));
    }

    public function create()
    {
        return view('payrolls.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'staff_id' => 'required',
            'amount' => 'required|numeric',
            'pay_date' => 'required|date',
        ]);

        Payroll::create($request->all());
        return redirect()->route('payrolls.index');
    }

    public function show($id)
    {
        $payroll = Payroll::find($id);
        return view('payrolls.show', compact('payroll'));
    }

    public function edit($id)
    {
        $payroll = Payroll::find($id);
        return view('payrolls.edit', compact('payroll'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'staff_id' => 'required',
            'amount' => 'required|numeric',
            'pay_date' => 'required|date',
        ]);

        $payroll = Payroll::find($id);
        $payroll->update($request->all());
        return redirect()->route('payrolls.index');
    }

    public function destroy($id)
    {
        $payroll = Payroll::find($id);
        $payroll->delete();
        return redirect()->route('payrolls.index');
    }
}
