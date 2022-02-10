@extends('layouts.index')

@section('container')
    <div class="container mt-3">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h2 mb-0 text-gray-800">Tabel Data Ruangan</h1>
            <a href="#">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Ruangan Baru
                </button>  
            </a>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered" id="example" style="text-align: center">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode Ruangan</th>
                        <th>Nama Ruangan</th>
                        <th width="300">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>00001</td>
                        <td>LAB. KOREA</td>
                        <td>
                            <button type="button" class="btn btn-info" style="color: #fff;"><i class="bi bi-eye"></i> Detail</button>
                            <button type="button" class="btn btn-success"><i class="bi bi-pencil-square"></i> Edit</button>
                            <button type="button" class="btn btn-danger"><i class="bi bi-trash"></i> Hapus</button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>00002</td>
                        <td>Techno Park</td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ruangan Baru</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="post" action="">
                        @csrf
                        <div class="container" style=" border-radius: 5px; background-color: #fff; padding: 20px;">
                            <div class="row">
                                <div class="col-25" style=" float: left; width: 25%; margin-top: 6px;">
                                    <label for="Nama Ruangan" style="padding: 12px 12px 12px 0; display: inline-block;"><h5>Nama Ruangan</h5></label>
                                </div>
                                <div class="col-75" style=" float: left; width: 75%; margin-top: 6px;">
                                    <input type="text" id="nama_ruang" value="{{ old('nama_ruang') }}" name="nama_ruang" placeholder="Nama Ruangan" style="width: 100%; padding: 12px; border: 1px solid #ccc; border-radius: 4px; resize: vertical;">
                                </div>
                            </div>                           
                            <div class="row">
                                <div class="col-25" style=" float: left; width: 25%; margin-top: 6px;">
                                    <label for="Kode Ruangan" style="padding: 12px 12px 12px 0; display: inline-block;"><h5>Kode Ruangan</h5></label>
                                </div>
                                <div class="col-75" style=" float: left; width: 75%; margin-top: 6px;">
                                    <input type="text" id="kode_ruang" value="{{ old('kode_ruang') }}" name="kode_ruang" placeholder="Kode Ruangan" style="width: 100%; padding: 12px; border: 1px solid #ccc; border-radius: 4px; resize: vertical;">
                                </div>
                            </div>                           
                            <div class="row">
                                <div class="col-25" style=" float: left; width: 25%; margin-top: 6px;">
                                    <label for="gambar_ruang" style="padding: 12px 12px 12px 0; display: inline-block;"><h5>Upload Gambar</h5></label>
                                </div>
                                <div class="col-75" style=" float: left; width: 75%; margin-top: 6px;">
                                    <input type="file" id="gambar_ruang" name="gambar_ruang" placeholder="Gambar Ruangan" >
                                </div>
                            </div>                           
                            <div class="row">
                                <div class="col-25" style=" float: left; width: 25%; margin-top: 6px;">
                                    <label for="deskripsi" style="padding: 12px 12px 12px 0; display: inline-block;"><h5>Deskripsi</h5></label>
                                </div>
                                <div class="col-75" style=" float: left; width: 75%; margin-top: 6px;">
                                    <textarea id="desc" name="deskripsi" value="{{ old('deskripsi') }}" placeholder="Tuliskan Deskripsi Cerita" style="width: 100%; padding: 12px; border: 1px solid #ccc; border-radius: 4px; resize: vertical; height:200px"></textarea>
                                </div>
                            </div>                                                    
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
