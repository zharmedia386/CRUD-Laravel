<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;

class BukuController extends Controller
{
    public function index() {
        $data_buku = Buku::all();
        return view('buku.index', compact('data_buku'));
    }

    public function create() {
        return view('buku.create');
    }

    public function store() {
        $buku = new Buku;
        $buku->judul      = request('judul');
        $buku->penulis    = request('penulis');
        $buku->harga      = request('harga');
        $buku->tgl_terbit = request('tgl_terbit');
        $buku->save();
        return redirect('/');
    }

    public function edit($id) {
        $buku = Buku::find($id);
        return view('buku.edit', compact('buku'));
    }

    public function update($id) {
        $buku = Buku::find($id);
        $buku->judul      = request('judul');
        $buku->penulis    = request('penulis');
        $buku->harga      = request('harga');
        $buku->tgl_terbit = request('tgl_terbit');
        $buku->update();
        return redirect('/');
    }

    public function destroy($id) {
        $buku = Buku::find($id);
        $buku->delete();
        return redirect('/');
    }
}
