@extends('layouts.master')
@section ('content')
  @if(count($data_buku) > 0)
  <div class="container">
    <div class="alert alert-success mt-4">Ditemukan {{ count($data_buku) }} data  dengan kata {{ $cari }}</div>
    @if(Session::has('pesan'))
      <div class="alert alert-success mt-4">
        {{ Session::get('pesan') }}
      </div>
    @endif
    <div class="row">
      <div class="col-md-12">
        <div class="card mb-5 mt-3">
          <div class="card-header">
            <h3 class="card-title">Data Buku</h3>
            <div class="card-tools">
              <a href="{{ route('buku.create') }}" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i> Tambah Data</a>
            </div>
          </div>
          <!-- search -->
            <form action="{{ route('buku.search') }}" method="get" class="mx-4 mt-4">@csrf
              <div class="form-group">
                <div class="input-group">
                  <input type="text" name="cari" class="form-control" placeholder="Cari Buku">
                  <span class="input-group-btn">
                    <button type="submit" class="btn btn-primary">Cari</button>
                  </span>
                </div>
              </div>
            </form>
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
                    <td>{{ ++$no }}</td>
                    <td>{{ $b->judul }}</td>
                    <td>{{ $b->penulis }}</td>
                    <td>{{ number_format($b->harga,0,'.',',') }}</td>
                    <td>{{ $b->tgl_terbit->format('d/m/Y') }}</td>
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
            <div class="area">
              <div class="kanan">{{ $data_buku->links('pagination::bootstrap-4') }}</div>
              <div class="kiri"><strong>Jumlah Buku: {{ count($data_buku) }}</strong></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  @else
    <div class="alert alert-danger">
      Data {{ $cari }}tidak ditemukan
      <a href="/">Kembali</a>
    </div>
  </div>
  @endif
@endsection