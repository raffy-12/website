<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('produk.index',
    [
        "produks" => Produk::all()
    ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    return view('produk.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $produk = new Produk;
        $produk-> name=$request -> name;
        $produk-> price=$request -> price;
        $produk-> save();
        
   return redirect()->route('produk.index');
    
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        
        return view('produk.edit', ['produk'=>produk::find($id)]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
       $produk = Produk::find($id);
       $produk-> name=$request -> name;
         $produk-> price=$request -> price;
    $produk-> save();
       

           return redirect('produk')-> with('status','Data berhasil ditambah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $produk = Produk::find($id);
        $produk->delete();
        return redirect()->route('produk.index')-> with('status', 'Data Berhasil Di Hapus!');
    }
}
