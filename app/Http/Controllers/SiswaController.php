<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        $data = Siswa::all();
        return view('siswa.index', compact('data'));
    }

    public function create()
    {
        return view('siswa.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama'  => 'required|string|max:100',
            'umur'  => 'required|numeric',
            'nilai' => 'required|numeric'
        ]);

        Siswa::create([
            'nama'  => $request->nama,
            'umur'  => $request->umur,
            'nilai' => $request->nilai
        ]);

        return redirect()->route('siswa.index')
                         ->with('success', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $data = Siswa::findOrFail($id);
        return view('siswa.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama'  => 'required|string|max:100',
            'umur'  => 'required|numeric',
            'nilai' => 'required|numeric'
        ]);

        $data = Siswa::findOrFail($id);

        $data->update([
            'nama'  => $request->nama,
            'umur'  => $request->umur,
            'nilai' => $request->nilai
        ]);

        return redirect()->route('siswa.index')
                         ->with('success', 'Data berhasil diupdate');
    }

    public function destroy($id)
    {
        $data = Siswa::findOrFail($id);
        $data->delete();

        return redirect()->route('siswa.index')
                         ->with('success', 'Data berhasil dihapus');
    }
}