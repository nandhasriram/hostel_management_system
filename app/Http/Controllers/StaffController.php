<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function index()
    {
        $staffs = Staff::all();
        return view('staffs.index', compact('staffs'));
    }

    public function create()
    {
        return view('staffs.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'position' => 'required',
            'salary' => 'required|numeric',
        ]);

        Staff::create($request->all());
        return redirect()->route('staffs.index');
    }

    public function show($id)
    {
        $staff = Staff::find($id);
        return view('staffs.show', compact('staff'));
    }

    public function edit($id)
    {
        $staff = Staff::find($id);
        return view('staffs.edit', compact('staff'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'position' => 'required',
            'salary' => 'required|numeric',
        ]);

        $staff = Staff::find($id);
        $staff->update($request->all());
        return redirect()->route('staffs.index');
    }

    public function destroy($id)
    {
        $staff = Staff::find($id);
        $staff->delete();
        return redirect()->route('staffs.index');
    }
}
