@extends('layouts.master')
@section ('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="card my-5">
          <div class="card-header">
            <h3 class="card-title">Data Buku</h3>
            <div class="card-tools">
              <a href="{{ route('buku.create') }}" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i> Tambah Data</a>
            </div>
          </div>
          <div class="card-body">
            <table class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Judul</th>
                  <th>Pengarang</th>
                  <th>Penerbit</th>
                  <th>Tahun Terbit</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($data_buku as $b)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $b->judul }}</td>
                    <td>{{ $b->penulis }}</td>
                    <td>{{ $b->harga }}</td>
                    <td>{{ $b->tgl_terbit }}</td>
                    <td>
                      <form action="{{ route('buku.destroy', $b->id) }}" method="post"> @csrf
                          <a href="{{ route('buku.edit', $b->id) }}" class="btn btn-warning"><i class="fas fa-edit"></i>Edit</a> 
                          <button class="btn btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus data?')"><i class="far fa-trash-alt"></i>Hapus</button>
                      </form>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection