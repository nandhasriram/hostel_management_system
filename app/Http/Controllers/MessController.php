<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MessController extends Controller
{
    public function index()
    {
        $messes = Mess::all();
        return view('messes.index', compact('messes'));
    }

    public function create()
    {
        return view('messes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'location' => 'required',
        ]);

        Mess::create($request->all());
        return redirect()->route('messes.index');
    }

    public function show($id)
    {
        $mess = Mess::find($id);
        return view('messes.show', compact('mess'));
    }

    public function edit($id)
    {
        $mess = Mess::find($id);
        return view('messes.edit', compact('mess'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'location' => 'required',
        ]);

        $mess = Mess::find($id);
        $mess->update($request->all());
        return redirect()->route('messes.index');
    }

    public function destroy($id)
    {
        $mess = Mess::find($id);
        $mess->delete();
        return redirect()->route('messes.index');
    }
}
