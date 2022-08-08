<?php

namespace App\Http\Controllers;

use App\Models\Eskul;
use Illuminate\Http\Request;

class EskulController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    // public function index2()
    // {
    //     $eskul = Eskul::all();
    //     return view('user.eskul', compact('eskul'));
    // }

    public function index()
    {
        $eskul = Eskul::all();
        return view('admin.eskul.index', compact('eskul'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.eskul.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validasi
        $validated = $request->validate([
            'nama_eskul' => 'required|unique:eskuls|max:255',
            'deskripsi' => 'required',
            'foto' => 'required',
        ]);

        $eskul = new Eskul();
        $eskul->nama_eskul = $request->nama_eskul;
        $eskul->deskripsi = $request->deskripsi;
        if ($request->hasFile('foto')) {
            $eskul->deleteImage(); //menghapus image sebelum di update melalui method deleteImage di model
            $image = $request->file('foto');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('images/eskul/', $name);
            $eskul->foto = $name;
        }

        $eskul->save();
        return redirect()
            ->route('eskul.index')
            ->with('toast_success', 'Data berhasil di Buat!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Eskul  $eskul
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $eskul = Eskul::findOrFail($id);
        return view('admin.eskul.show', compact('eskul'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Eskul  $eskul
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $eskul = Eskul::findOrFail($id);
        return view('admin.eskul.edit', compact('eskul'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Eskul  $eskul
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //validasi
        $validated = $request->validate([
            'nama_eskul' => 'required',
            'deskripsi' => 'required',
        ]);

        $eskul = Eskul::findOrFail($id);
        $eskul->nama_eskul = $request->nama_eskul;
        $eskul->deskripsi = $request->deskripsi;
        if ($request->hasFile('foto')) {
            $eskul->deleteImage(); //menghapus image sebelum di update melalui method deleteImage di model
            $image = $request->file('foto');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('images/eskul/', $name);
            $eskul->foto = $name;
        }

        $eskul->save();
        return redirect()
            ->route('eskul.index')
            ->with('toast_success', 'Data berhasil di Edit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Eskul  $eskul
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $eskul = Eskul::findOrFail($id);
        $eskul->deleteImage();
        $eskul->delete();
        return redirect()
            ->route('eskul.index')
            ->with('toast_success', 'Data berhasil di Hapus!');

    }
}
