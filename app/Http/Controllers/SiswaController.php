<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Siswa::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $siswa = new Siswa;
        $siswa->user_id = $request->user_id;
        $siswa->nisn = $request->nisn;
        $siswa->tempat_lahir = $request->tempat_lahir;
        $siswa->tanggal_lahir = $request->tanggal_lahir;
        $siswa->sekolah_asal = $request->sekolah_asal;
        $siswa->nama_ayah = $request->nama_ayah;
        $siswa->nama_ibu = $request->nama_ibu;
        $siswa->nama_wali = $request->nama_wali;
        $siswa->tahun_masuk = $request->tahun_masuk;
        $siswa->tahun_keluar = $request->tahun_keluar;
        $siswa->alasan_keluar = $request->alasan_keluar;
        $siswa->status = $request->status;
        if($siswa->save()){
            return["status"=>"Berhasil Menyimpan Data"];
        }else{
            return["status"=>"gagal Menyimpan Data"];
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Siswa::where('id', $id)->first();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return Siswa::where('id', $id)->first();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $siswa = Siswa::where($id, 'id');
        $siswa->user_id = $request->user_id;
        $siswa->nisn = $request->nisn;
        $siswa->tempat_lahir = $request->tempat_lahir;
        $siswa->tanggal_lahir = $request->tanggal_lahir;
        $siswa->sekolah_asal = $request->sekolah_asal;
        $siswa->nama_ayah = $request->nama_ayah;
        $siswa->nama_ibu = $request->nama_ibu;
        $siswa->nama_wali = $request->nama_wali;
        $siswa->tahun_masuk = $request->tahun_masuk;
        $siswa->tahun_keluar = $request->tahun_keluar;
        $siswa->alasan_keluar = $request->alasan_keluar;
        $siswa->status = $request->status;
        if($siswa->save()){
            return["status"=>"Berhasil Update Data"];
        }else{
            return["status"=>"gagal Update Data"];
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Siswa $siswa)
    {
        //
    }
}
