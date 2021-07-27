<?php

namespace App\Http\Controllers;

use App\Models\Managemen;
use Illuminate\Http\Request;

class ManagemenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Managemen::all();
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
        $users = new Managemen;
        $users->name = $request->name;
        $users->email = $request->email;
        $users->password = $request->password;
        $users->role = $request->role;
        $users->status = $request->status;
        if($users->save()){
            return["status"=>"Berhasil Menyimpan Data"];
        }else{
            return["status"=>"gagal Menyimpan Data"];
        }
    }
    /*        
     * @param  \App\Models\Managemen  $managemen
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Managemen::where('id', $id)->first();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Managemen  $managemen
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return Managemen::where('id', $id)->first();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Managemen  $managemen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $users = Managemen::where($id, 'id');
        $users->name = $request->name;
        $users->email = $request->email;
        $users->password = $request->password;
        $users->role = $request->role;
        $users->status = $request->status;
        if($users->save()){
            return["status"=>"Berhasil update Data"];
        }else{
            return["status"=>"gagal update Data"];
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Managemen  $managemen
     * @return \Illuminate\Http\Response
     */
    public function destroy(Managemen $managemen)
    {
        //
    }
}
