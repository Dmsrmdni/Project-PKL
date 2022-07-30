<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use App\Models\Pendaftaran;
use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // memanggil data Pendaftaran bersama dengan data siswa
        // yang dibuat dari method 'siswa' di model 'Pendaftaran'
        $pendaftaran = Pendaftaran::with('jurusan')->get();
        // dd($pendaftaran);
        // return $pendaftaran;
        return view('admin.pendaftaran.index', ['pendaftaran' => $pendaftaran]);
    }

    public function create()
    {
        $jurusan = Jurusan::all();
        return view('admin.pendaftaran.create', compact('jurusan'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'kode_pendaftaran' => 'required',
            'id_jurusan' => 'required',
            'nama_lengkap' => 'required',
            'jenis_kelamin' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'no_hp_siswa' => 'required',
            'email' => 'required',
            'provinsi' => 'required',
            'kota' => 'required',
            'kecamatan' => 'required',
            'desa' => 'required',
            'alamat' => 'required',
            'kode_pos' => 'required',
            'nama_asal_sekolah' => 'required',
            'nama_lengkap_ortu' => 'required',
            'pekerjaan' => 'required',
            'no_hp_yang_bisa_di_hubungi' => 'required',
        ]);

        $pendaftaran = new Pendaftaran();
        $pendaftaran->kode_pendaftaran = $request->kode_pendaftaran;
        $pendaftaran->id_jurusan = $request->id_jurusan;
        $pendaftaran->nama_lengkap = $request->nama_lengkap;
        $pendaftaran->jenis_kelamin = $request->jenis_kelamin;
        $pendaftaran->tempat_lahir = $request->tempat_lahir;
        $pendaftaran->tanggal_lahir = $request->tanggal_lahir;
        $pendaftaran->no_hp_siswa = $request->no_hp_siswa;
        $pendaftaran->email = $request->email;
        $pendaftaran->provinsi = $request->provinsi;
        $pendaftaran->kota = $request->kota;
        $pendaftaran->kecamatan = $request->kecamatan;
        $pendaftaran->desa = $request->desa;
        $pendaftaran->alamat = $request->alamat;
        $pendaftaran->kode_pos = $request->kode_pos;
        $pendaftaran->nama_asal_sekolah = $request->nama_asal_sekolah;
        $pendaftaran->alamat_sekolah = $request->alamat_sekolah;
        $pendaftaran->nama_lengkap_ortu = $request->nama_lengkap_ortu;
        $pendaftaran->pekerjaan = $request->pekerjaan;
        $pendaftaran->no_hp_yang_bisa_di_hubungi = $request->no_hp_yang_bisa_di_hubungi;
        $pendaftaran->alamat_ortu = $request->alamat_ortu;

        $pendaftaran->save();
        return redirect()
            ->route('pendaftaran.index')
            ->with('success', 'Data berhasil dibuat!');
    }

    public function show($id)
    {
        $pendaftaran = Pendaftaran::findOrFail($id);
        return view('admin.pendaftaran.show', compact('pendaftaran'));
    }

    public function edit($id)
    {
        $pendaftaran = Pendaftaran::findOrFail($id);
        $jurusan = Jurusan::all();
        return view('admin.pendaftaran.edit', compact('pendaftaran', 'jurusan'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'id_jurusan' => 'required',
            'nama_lengkap' => 'required',
            'jenis_kelamin' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'no_hp_siswa' => 'required',
            'email' => 'required',
            'provinsi' => 'required',
            'kota' => 'required',
            'kecamatan' => 'required',
            'desa' => 'required',
            'alamat' => 'required',
            'kode_pos' => 'required',
            'nama_asal_sekolah' => 'required',
            'nama_lengkap_ortu' => 'required',
            'pekerjaan' => 'required',
            'no_hp_yang_bisa_di_hubungi' => 'required',
        ]);

        $pendaftaran = Pendaftaran::findOrFail($id);
        $pendaftaran->kode_pendaftaran = $request->kode_pendaftaran;
        $pendaftaran->id_jurusan = $request->id_jurusan;
        $pendaftaran->nama_lengkap = $request->nama_lengkap;
        $pendaftaran->jenis_kelamin = $request->jenis_kelamin;
        $pendaftaran->tempat_lahir = $request->tempat_lahir;
        $pendaftaran->tanggal_lahir = $request->tanggal_lahir;
        $pendaftaran->no_hp_siswa = $request->no_hp_siswa;
        $pendaftaran->email = $request->email;
        $pendaftaran->provinsi = $request->provinsi;
        $pendaftaran->kota = $request->kota;
        $pendaftaran->kecamatan = $request->kecamatan;
        $pendaftaran->desa = $request->desa;
        $pendaftaran->alamat = $request->alamat;
        $pendaftaran->kode_pos = $request->kode_pos;
        $pendaftaran->nama_asal_sekolah = $request->nama_asal_sekolah;
        $pendaftaran->alamat_sekolah = $request->alamat_sekolah;
        $pendaftaran->nama_lengkap_ortu = $request->nama_lengkap_ortu;
        $pendaftaran->pekerjaan = $request->pekerjaan;
        $pendaftaran->no_hp_yang_bisa_di_hubungi = $request->no_hp_yang_bisa_di_hubungi;
        $pendaftaran->alamat_ortu = $request->alamat_ortu;

        $pendaftaran->save();
        return redirect()
            ->route('pendaftaran.index')
            ->with('success', 'Data berhasil dibuat!');
    }

    public function destroy($id)
    {
        $pendaftaran = Pendaftaran::findOrFail($id);
        $pendaftaran->deleteImage();
        $pendaftaran->delete();
        return redirect()
            ->route('pendaftaran.index')
            ->with('success', 'Data berhasil dihapus!');
    }
}
