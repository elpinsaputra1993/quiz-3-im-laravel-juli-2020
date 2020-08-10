<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;

class proyekController extends Controller
{
    //
    public function index()
    {
        // Funtion untuk halaman list index proyek
        $get = DB::table('proyek')->get();

        foreach ($get as $val) :
            $val->serial = Crypt::encrypt(($val->id));
        endforeach;

        $data = [
            'list' => $get,
        ];

        return view('proyek.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //    Function untuk menampilkan form input proyek
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Function untuk memproses insert atau create data yang diterima dari form proyek
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Function untuk menampilkan sebuah detail data berdasarkan id primary atau id unique
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Function untuk menampilkan sebuah data berdasarkan id primary atau id unique, ditampilkan ke sebuah form edit
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        // Function untuk memproses updatee data yang diterima dari form edit proyek   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Function untuk memproses hapus data berdasarkan id primary atau id unique
    }
}
