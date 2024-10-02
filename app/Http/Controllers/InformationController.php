<?php
namespace App\Http\Controllers;

use App\Models\Information;
use Illuminate\Http\Request;

class InformationController extends Controller
{
    // Menampilkan daftar informasi
    public function index()
    {
        $informations = Information::all();
        return view('informations.index', compact('informations'));
    }

    // Menampilkan form untuk membuat informasi baru
    public function create()
    {
        return view('informations.create');
    }

    // Menyimpan informasi baru
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        Information::create($request->all());
        return redirect()->route('informations.index')->with('success', 'Information created successfully.');
    }

    // Menampilkan informasi tertentu
    public function show(Information $information)
    {
        return view('informations.show', compact('information'));
    }

    // Menampilkan form untuk mengedit informasi
    public function edit(Information $information)
    {
        return view('informations.edit', compact('information'));
    }

    // Memperbarui informasi tertentu
    public function update(Request $request, Information $information)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        $information->update($request->all());
        return redirect()->route('informations.index')->with('success', 'Information updated successfully.');
    }

    // Menghapus informasi tertentu
    public function destroy(Information $information)
    {
        $information->delete();
        return redirect()->route('informations.index')->with('success', 'Information deleted successfully.');
    }
}
