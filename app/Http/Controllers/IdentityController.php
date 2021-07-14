<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Identity;

class IdentityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $identityBuku = Identity::get();
        return view('product.identity', compact('identityBuku'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.create-identity');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data =  $request->validate([
            'nama_identity' => 'required'
        ]);

        $jenis = Identity::create($data);
        return redirect()->route('identity.index')
            ->with('success', 'Berhasil Membuat Identity');
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
        $identity = Identity::findOrFail($id);
        return view('product.edit-identity', compact('identity'));
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
        $identity = Identity::findOrFail($id);
        $data =  $request->validate([
            'nama_identity' => 'required'
        ]);

        $identity->update($data);
        return redirect()->route('identity.index')
        ->with('success', 'Berhasil Update Identity');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $identity = Identity::findOrFail($id)->delete();
        return redirect()->route('identity.index')->with('error', 'Berhasil Hapus Identity !!');
    }
}
