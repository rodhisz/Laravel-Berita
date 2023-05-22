<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $berita = Berita::all();
        return view('berita.index', compact('berita'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('berita.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Berita::create([
            'judul' => $request->judul,
            'tanggal' => Carbon::now(),
            'penulis' => $request->penulis,
            'konten' => $request->konten,
            'gambar' => $request->file('gambar')->store('berita')
        ]);
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function show(Berita $berita, $id)
    {
        $berita = Berita::find($id);
        return view('berita.show', compact('berita'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function edit(Berita $berita, $id)
    {
        $berita = Berita::find($id);
        return view('berita.edit', compact('berita'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Berita $berita, $id)
    {
        if (empty($request->file('gambar'))) {
            $berita = Berita::find($id);

            $berita->update([
                'judul' => $request->judul,
                'tanggal' => Carbon::now(),
                'penulis' => $request->penulis,
                'konten' => $request->konten,
            ]);

            return redirect('/');
        } else {
            $berita = Berita::find($id);

            $berita->update([
                'judul' => $request->judul,
                'tanggal' => Carbon::now(),
                'penulis' => $request->penulis,
                'konten' => $request->konten,
                'gambar' => $request->file('gambar')->store('berita')
            ]);

            return redirect('/');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function destroy(Berita $berita, $id)
    {
        $berita = Berita::find($id);

        Storage::delete($berita->gambar); //ngapus gambar
        $berita->delete(); //ngapus data

        return redirect('/');
    }
}
