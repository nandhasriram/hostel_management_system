<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MaintenanceController extends Controller
{
    public function index()
    {
        $maintenances = Maintenance::all();
        return view('maintenances.index', compact('maintenances'));
    }

    public function create()
    {
        return view('maintenances.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'description' => 'required',
            'status' => 'required',
            'date_reported' => 'required|date',
        ]);

        Maintenance::create($request->all());
        return redirect()->route('maintenances.index');
    }

    public function show($id)
    {
        $maintenance = Maintenance::find($id);
        return view('maintenances.show', compact('maintenance'));
    }

    public function edit($id)
    {
        $maintenance = Maintenance::find($id);
        return view('maintenances.edit', compact('maintenance'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'description' => 'required',
            'status' => 'required',
            'date_reported' => 'required|date',
        ]);

        $maintenance = Maintenance::find($id);
        $maintenance->update($request->all());
        return redirect()->route('maintenances.index');
    }

    public function destroy($id)
    {
        $maintenance = Maintenance::find($id);
        $maintenance->delete();
        return redirect()->route('maintenances.index');
    }
}
