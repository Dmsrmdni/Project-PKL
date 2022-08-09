<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use App\Models\Pendaftaran;
use DB;
use Illuminate\Http\Request;
use Alert;
class PendaftaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

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
        $q = DB::table('pendaftarans')->select(DB::raw('MAX(RIGHT(kode_pendaftaran,3)) as kode'));
        $kd = "";
        if ($q->count() > 0) {
            foreach ($q->get() as $k) {
                $tmp = ((int) $k->kode) + 1;
                $kd = sprintf("%03s", $tmp);
            }
        } else {
            $kd = "001";
        }

        return view('admin.pendaftaran.create', compact('jurusan', 'kd'));
    }

    //  public function create2()
    // {
    //     $jurusan = Jurusan::all();
    //     $q = DB::table('pendaftarans')->select(DB::raw('MAX(RIGHT(kode_pendaftaran,3)) as kode'));
    //     $kd = "";
    //     if ($q->count() > 0) {
    //         foreach ($q->get() as $k) {
    //             $tmp = ((int) $k->kode) + 1;
    //             $kd = sprintf("%03s", $tmp);
    //         }
    //     } else {
    //         $kd = "001";
    //     }

    //     return view('user.daftar', compact('jurusan', 'kd'));
    // }

      public function store(Request $request)
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
        return redirect('/daftar')
            ->with('toast_success', 'Data berhasil dibuat!')
            ->with('kode_pendaftaran', $request->kode_pendaftaran)
            ->with('id_jurusan', $request->id_jurusan)
            ->with('nama_lengkap', $request->nama_lengkap)
            ->with('jenis_kelamin', $request->jenis_kelamin)
            ->with('tempat_lahir', $request->tempat_lahir)
            ->with('tanggal_lahir', $request->tanggal_lahir)
            ->with('no_hp_siswa', $request->no_hp_siswa)
            ->with('email', $request->email)
            ->with('provinsi', $request->provinsi)
            ->with('kota', $request->kota)
            ->with('kecamatan', $request->kecamatan)
            ->with('desa', $request->desa)
            ->with('alamat', $request->alamat)
            ->with('kode_pos', $request->kode_pos)
            ->with('nama_asal_sekolah', $request->nama_asal_sekolah)
            ->with('alamat_sekolah', $request->alamat_sekolah)
            ->with('nama_lengkap_ortu', $request->nama_lengkap_ortu)
            ->with('pekerjaan', $request->pekerjaan)
            ->with('no_hp_yang_bisa_di_hubungi', $request->no_hp_yang_bisa_di_hubungi)
            ->with('alamat_ortu', $request->alamat_ortu);
    }


    public function show($id)
    {
        $pendaftaran = Pendaftaran::findOrFail($id);
        $jurusan = Jurusan::all();
        $q = DB::table('pendaftarans')->select(DB::raw('MAX(RIGHT(kode_pendaftaran,3)) as kode'));
        $kd = "";
        if ($q->count() > 0) {
            foreach ($q->get() as $k) {
                $tmp = ((int) $k->kode) + 1;
                $kd = sprintf("%03s", $tmp);
            }
        } else {
            $kd = "001";
        }

        return view('admin.pendaftaran.show', compact('pendaftaran', 'jurusan', 'kd'));
    }

    public function edit($id)
    {
        $pendaftaran = Pendaftaran::findOrFail($id);
        $jurusan = Jurusan::all();

        $q = DB::table('pendaftarans')->select(DB::raw('MAX(RIGHT(kode_pendaftaran,3)) as kode'));
        $kd = "";
        if ($q->count() > 0) {
            foreach ($q->get() as $k) {
                $tmp = ((int) $k->kode) + 1;
                $kd = sprintf("%03s", $tmp);
            }
        } else {
            $kd = "001";
        }

        return view('admin.pendaftaran.edit', compact('pendaftaran', 'jurusan', 'kd'));
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
            ->with('toast_success', 'Data berhasil diedit!');
    }

    public function destroy($id)
    {
        $pendaftaran = Pendaftaran::findOrFail($id);
        $pendaftaran->delete();
        return redirect()
            ->route('pendaftaran.index')
            ->with('toast_success', 'Data berhasil dihapus!');
    }

    public function cekPendaftaran(Request $request)
    {
        $cek = Pendaftaran::where('kode_pendaftaran', '=', $request->kode_pendaftaran)->first();
        if($cek){
           Alert::success('Data Anda Telah Terdaftar');
           return back(); 
        }
        else{
            Alert::warning("Data Tidak Ditemukan");
            return back();
        } 
        // dd($cek);
    }
}
