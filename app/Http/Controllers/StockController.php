<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StockController extends Controller
{
    public function index()
    {
        $stocks = Stock::all();
        return view('stocks.index', compact('stocks'));
    }

    public function create()
    {
        return view('stocks.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'item_name' => 'required',
            'quantity' => 'required|integer',
            'unit_price' => 'required|numeric',
        ]);

        Stock::create($request->all());
        return redirect()->route('stocks.index');
    }

    public function show($id)
    {
        $stock = Stock::find($id);
        return view('stocks.show', compact('stock'));
    }

    public function edit($id)
    {
        $stock = Stock::find($id);
        return view('stocks.edit', compact('stock'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'item_name' => 'required',
            'quantity' => 'required|integer',
            'unit_price' => 'required|numeric',
        ]);

        $stock = Stock::find($id);
        $stock->update($request->all());
        return redirect()->route('stocks.index');
    }

    public function destroy($id)
    {
        $stock = Stock::find($id);
        $stock->delete();
        return redirect()->route('stocks.index');
    }
}
