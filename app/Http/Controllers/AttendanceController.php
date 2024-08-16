<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    public function index()
    {
        $attendances = Attendance::all();
        return view('attendances.index', compact('attendances'));
    }

    public function create()
    {
        return view('attendances.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'student_id' => 'required',
            'date' => 'required|date',
            'status' => 'required',
        ]);

        Attendance::create($request->all());
        return redirect()->route('attendances.index');
    }

    public function show($id)
    {
        $attendance = Attendance::find($id);
        return view('attendances.show', compact('attendance'));
    }

    public function edit($id)
    {
        $attendance = Attendance::find($id);
        return view('attendances.edit', compact('attendance'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'student_id' => 'required',
            'date' => 'required|date',
            'status' => 'required',
        ]);

        $attendance = Attendance::find($id);
        $attendance->update($request->all());
        return redirect()->route('attendances.index');
    }

    public function destroy($id)
    {
        $attendance = Attendance::find($id);
        $attendance->delete();
        return redirect()->route('attendances.index');
    }
}
