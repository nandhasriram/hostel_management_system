<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FeeController extends Controller
{
    public function index()
    {
        $fees = Fee::all();
        return view('fees.index', compact('fees'));
    }

    public function create()
    {
        return view('fees.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'student_id' => 'required',
            'amount' => 'required|numeric',
            'due_date' => 'required|date',
        ]);

        Fee::create($request->all());
        return redirect()->route('fees.index');
    }

    public function show($id)
    {
        $fee = Fee::find($id);
        return view('fees.show', compact('fee'));
    }

    public function edit($id)
    {
        $fee = Fee::find($id);
        return view('fees.edit', compact('fee'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'student_id' => 'required',
            'amount' => 'required|numeric',
            'due_date' => 'required|date',
        ]);

        $fee = Fee::find($id);
        $fee->update($request->all());
        return redirect()->route('fees.index');
    }

    public function destroy($id)
    {
        $fee = Fee::find($id);
        $fee->delete();
        return redirect()->route('fees.index');
    }
}
