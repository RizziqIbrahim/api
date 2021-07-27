<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Guru::all();
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
        //
        $guru = new Guru;
        $guru->user_id = $request->user_id;
        $guru->niy = $request->niy;
        $guru->nomor_handphone = $request->nomor_handphone;
        $guru->tempat_lahir = $request->tempat_lahir;
        $guru->tanggal_lahir = $request->tanggal_lahir;
        $guru->status = $request->status;
        $guru->jumlah_anak = $request->jumlah_anak;
        $guru->nama_suami = $request->nama_suami;
        $guru->nama_istri = $request->nama_istri;
        $guru->tanggal_masuk = $request->tanggal_masuk;
        $guru->tanggal_keluar = $request->tanggal_keluar;
        if($guru->save()){
            return ["status" => "Berhasil Menyimpan Data"];
        }else{
            return["status"=>"Gagal Menyimpan Data"];
        }        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Guru  $guru
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Guru::where($id, 'id')->first();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Guru  $guru
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return Guru::where('id', $id)->first();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Guru  $guru
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $guru = Guru::where($id,'id');
        $guru->user_id = $request->user_id;
        $guru->niy = $request->niy;
        $guru->nomor_handphone = $request->nomor_handphone;
        $guru->tempat_lahir = $request->tempat_lahir;
        $guru->tanggal_lahir = $request->tanggal_lahir;
        $guru->status = $request->status;
        $guru->jumlah_anak = $request->jumlah_anak;
        $guru->nama_suami = $request->nama_suami;
        $guru->nama_istri = $request->nama_istri;
        $guru->tanggal_masuk = $request->tanggal_masuk;
        $guru->tanggal_keluar = $request->tanggal_keluar;
        if($guru->save()){
            return ["status" => "Berhasil update Data"];
        }else{
            return["status"=>"Gagal update Data"];
        }        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Guru  $guru
     * @return \Illuminate\Http\Response
     */
    public function destroy(Guru $guru)
    {
        //
    }
}