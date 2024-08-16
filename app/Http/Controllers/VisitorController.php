<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VisitorController extends Controller
{
    public function index()
    {
        $visitors = Visitor::all();
        return view('visitors.index', compact('visitors'));
    }

    public function create()
    {
        return view('visitors.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'purpose' => 'required',
            'date' => 'required|date',
        ]);

        Visitor::create($request->all());
        return redirect()->route('visitors.index');
    }

    public function show($id)
    {
        $visitor = Visitor::find($id);
        return view('visitors.show', compact('visitor'));
    }

    public function edit($id)
    {
        $visitor = Visitor::find($id);
        return view('visitors.edit', compact('visitor'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'purpose' => 'required',
            'date' => 'required|date',
        ]);

        $visitor = Visitor::find($id);
        $visitor->update($request->all());
        return redirect()->route('visitors.index');
    }

    public function destroy($id)
    {
        $visitor = Visitor::find($id);
        $visitor->delete();
        return redirect()->route('visitors.index');
    }
}
