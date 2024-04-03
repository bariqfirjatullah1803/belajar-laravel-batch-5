<?php

namespace App\Http\Controllers;

use App\Models\School;
use Illuminate\Http\Request;

class SchoolController extends Controller
{
    public function index()
    {
        $schools = School::all();
        return view('admin.school.index', compact('schools'));
    }

    public function create()
    {
        return view('admin.school.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'address' => 'required|string',
        ]);

        School::create([
            'name' => $request->name,
            'address' => $request->address
        ]);

        return redirect()->route('school.index');
    }

    public function edit($id)
    {
        $school = School::findOrFail($id);
        return view('admin.school.edit', compact('school'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string',
            'address' => 'required|string'
        ]);

        $school = School::findOrFail($id);

        $school->update([
            'name' => $request->name,
            'address' => $request->address,
        ]);

        return redirect()->route('school.index');
    }

    public function destroy($id)
    {
        $school = School::findOrFail($id);

        $school->delete();

        return redirect()->route('school.index');
    }
}
