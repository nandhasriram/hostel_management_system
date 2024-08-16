<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AccommodationController extends Controller
{
    public function index()
    {
        $accommodations = Accommodation::all();
        return view('accommodations.index', compact('accommodations'));
    }

    public function create()
    {
        return view('accommodations.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'room_number' => 'required',
            'student_id' => 'required',
        ]);

        Accommodation::create($request->all());
        return redirect()->route('accommodations.index');
    }

    public function show($id)
    {
        $accommodation = Accommodation::find($id);
        return view('accommodations.show', compact('accommodation'));
    }

    public function edit($id)
    {
        $accommodation = Accommodation::find($id);
        return view('accommodations.edit', compact('accommodation'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'room_number' => 'required',
            'student_id' => 'required',
        ]);

        $accommodation = Accommodation::find($id);
        $accommodation->update($request->all());
        return redirect()->route('accommodations.index');
    }

    public function destroy($id)
    {
        $accommodation = Accommodation::find($id);
        $accommodation->delete();
        return redirect()->route('accommodations.index');
    }
}
