<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vidio;
use App\Models\Beritaekraf;
use App\Models\Beritapariwisata;
use App\Models\Beritasalatiga;

class BerandaUserController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $beritaekraf = BeritaEkraf::all();
        $beritapariwisata = BeritaPariwisata::all();
        $beritasalatiga = BeritaSalatiga::all();
        $vidio = Vidio::all();
        return view('user.home', ['vidio' => $vidio],  compact('beritaekraf', 'vidio', 'beritapariwisata', 'beritasalatiga'));
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
    } 

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
    //
    }
}
