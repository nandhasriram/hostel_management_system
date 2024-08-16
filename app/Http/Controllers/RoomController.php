<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index()
    {
        $rooms = Room::all();
        return view('rooms.index', compact('rooms'));
    }

    public function create()
    {
        return view('rooms.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'room_number' => 'required',
            'type' => 'required',
            'capacity' => 'required|integer',
        ]);

        Room::create($request->all());
        return redirect()->route('rooms.index');
    }

    public function show($id)
    {
        $room = Room::find($id);
        return view('rooms.show', compact('room'));
    }

    public function edit($id)
    {
        $room = Room::find($id);
        return view('rooms.edit', compact('room'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'room_number' => 'required',
            'type' => 'required',
            'capacity' => 'required|integer',
        ]);

        $room = Room::find($id);
        $room->update($request->all());
        return redirect()->route('rooms.index');
    }

    public function destroy($id)
    {
        $room = Room::find($id);
        $room->delete();
        return redirect()->route('rooms.index');
    }
}
