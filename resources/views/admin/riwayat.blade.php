@extends('admin.index')
@section('title', 'Riwayat')
@section('content-title', 'Riwayat')

@section('konten')

    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tabel peminjaman</h6>
                </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Status</th>
                        <th scope="col">Tanggal Pinjam</th>
                        <th scope="col">Tanggal Kembali</th>
                    </tr>
                </thead>
            <tbody>

                <tr>
                    <td>1</td>
                    <td>Sangkuriang</td>
                    <td>Dipinjam</td>
                    <td>16-01-2023</td>
                    <td>23-01-2023</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
    </div>
    </div>
</div>




@endsection