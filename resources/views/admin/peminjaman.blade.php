@extends('admin.index')
@section('title', 'peminjaman')
@section('content-title', 'peminjaman')

@section('konten')

<div class="row">
    <div class="col-lg-12">
        <div class="card shadow mb-4">
            <div class="card-body">
                {{-- @if(count($errors) >0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif --}}
                <form method="POST" action="">
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" >
                    </div>
                    <div class="form-group">
                        <label for="jurusan">Jurusan</label>
                        <select class="form-control" name="jurusan" id="jurusan">
                            <option value="RPL">RPL</option>
                            <option value="TKJ">TKJ</option>
                            <option value="MM">MM</option>
                            <option value="OTKP">OTKP</option>
                            <option value="PSPT">PSPT</option>
                            <option value="PH">PH</option>
                            <option value="AKL">AKL</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="kelas">Kelas</label>
                        <select class="form-control" id="kelas" name="kelas">
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="tanggal">Tanggal</label>
                        <input type="date" class="form-control" id="tanggal" name="tanggal">
                    </div>

                    <div class="form-group">
                      <label for="kelas">Judul Buku</label>
                      <select class="form-control" id="kelas" name="kelas">
                          <option value="10">Malin Kundang</option>
                          <option value="11">Sangkuriang</option>
                          <option value="12">Kartini</option>
                      </select>
                  </div>

                    <div class="form-group">
                        <a href="/riwayat" input type="submit" class="btn btn-success" value="simpan" > Simpan <a>
                        <a href="" class="btn btn-danger">Batal</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection