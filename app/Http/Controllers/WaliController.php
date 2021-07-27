<?php

namespace App\Http\Controllers;

use App\Models\Wali;
use Illuminate\Http\Request;

class WaliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Wali::all();

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
        $wali = new Wali;
        $wali->user_id = $request->user_id;
        $wali->nama = $request->nama;
        $wali->pekerjaan = $request->pekerjaan;
        $wali->penghasilan = $request->penghasilan;
        $wali->status = $request->status;
        $wali->jumlah_anak = $request->jumlah_anak;
        $wali->siswa_id = $request->siswa_id;
        $wali->alamat = $request->alamat;
        if($wali->save()){
            return ["status" => "Berhasil Menyimpan Data"];
        }else{
            return["status"=>"Gagal Menyimpan Data"];
        }     
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Wali  $wali
     * @return \Illuminate\Http\Response
     */
    public function show(Wali $wali)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Wali  $wali
     * @return \Illuminate\Http\Response
     */
    public function edit(Wali $wali)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Wali  $wali
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Wali $wali)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Wali  $wali
     * @return \Illuminate\Http\Response
     */
    public function destroy(Wali $wali)
    {
        //
    }
}