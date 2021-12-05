@extends('layouts.master')
@section('content')
  <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default my-5">
                <h3 class="card-title">Edit Buku</h3>
                <div class="panel-body">
                    <form action="{{ route('buku.update', $buku->id) }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="judul">Judul</label>
                            <input type="text" name="judul" class="form-control" value="{{ $buku->judul }}">
                        </div>
                        <div class="form-group">
                            <label for="penulis">Penulis</label>
                            <input type="text" name="penulis" class="form-control" value="{{ $buku->penulis }}">
                        </div>
                        <div class="form-group">
                            <label for="harga">Harga</label>
                            <input type="text" name="harga" class="form-control" value="{{ $buku->harga }}">
                        </div>
                        <div class="form-group">
                            <label for="tgl_terbit">Tgl. Terbit</label>
                            <input type="text" name="tgl_terbit" class="form-control" value="{{ $buku->tgl_terbit }}">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">
                                <i class="fa fa-save"></i>
                                Simpan
                            </button>
                            <a href="{{ route('buku.index') }}" class="btn btn-danger">
                                <i class="fa fa-times"></i>
                                Batal
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
@endsection