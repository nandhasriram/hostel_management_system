<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CertificateController extends Controller
{
    public function index()
    {
        $certificates = Certificate::all();
        return view('certificates.index', compact('certificates'));
    }

    public function create()
    {
        return view('certificates.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'student_id' => 'required',
            'type' => 'required',
            'date_issued' => 'required|date',
        ]);

        Certificate::create($request->all());
        return redirect()->route('certificates.index');
    }

    public function show($id)
    {
        $certificate = Certificate::find($id);
        return view('certificates.show', compact('certificate'));
    }

    public function edit($id)
    {
        $certificate = Certificate::find($id);
        return view('certificates.edit', compact('certificate'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'student_id' => 'required',
            'type' => 'required',
            'date_issued' => 'required|date',
        ]);

        $certificate = Certificate::find($id);
        $certificate->update($request->all());
        return redirect()->route('certificates.index');
    }

    public function destroy($id)
    {
        $certificate = Certificate::find($id);
        $certificate->delete();
        return redirect()->route('certificates.index');
    }
}
