@extends('layouts.index')

@section('container')
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-8">
              <img class="img-fluid" src="/img/image4.jpg" alt="Gambar Ruangan"/>
            </div>
            <div class="col-md-4" style="width: 380px; height: 348px; background-color: #fff; border-style: solid;">                
              <form class="row g-3" style="margin-top: 10px;">
                <div class="col-md-8">
                  <input type="text" class="form-control" id="" placeholder="Tersedia" readonly>
                </div>
                <div class="col-md-4">
                  <div class="d-grid gap-2 mx-auto">
                    <button class="btn btn-warning" type="button">Jadwal</button>
                  </div>
                </div>
                <div class="col-12">
                  <input type="date" class="form-control" id="" placeholder="Tanggal">
                </div>
                <div class="col-md-6">                      
                  <input type="text" class="form-control" id="" placeholder="Waktu Masuk">
                </div>
                <div class="col-md-6">
                  <input type="text" class="form-control" id="" placeholder="Waktu Keluar">
                </div>
                <div class="col-12">
                  <input type="text" class="form-control" id="" placeholder="Nama">
                </div>                                                           
                <div class="d-grid gap-2 mx-auto">
                  <button type="submit" class="btn btn-primary"><h4>Book Now</h4></button>
                </div>
              </form>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8" style="margin-left: 12px; margin-top: 10px; width: 736px; height: 348px; background-color: #fff; border-style: solid;">
                <h5 style="margin-top: 5px;">Detail Ruangan</h5>
                <hr>
                <table>
                  <tbody>
                    <tr>
                      <td>Kapasitas</td>
                      <td>:</td>
                      <td> 20 orang</td>
                    </tr>
                    <tr>
                      <td>Fasilitas</td>
                      <td>:</td>
                      <td>AC, Microphone, Projector, TV, etc</td>
                    </tr>
                    <tr>
                      <td>Deskripsi</td>
                      <td>:</td>
                      <td>Ruangan ini di desain khusus untuk agenda seperti Rapat/<i>Meeting<i>,</td>
                      {{-- <td>ruangan ini memiliki ukuran yang cukup untuk menampung setidaknya 20 orang dan sudah disediakan kursi serta meja yang bisa digunakan. Ada juga beberapa fasilitas lain yang diberikan seperti TV, Projector, dll.</td> --}}
                    </tr>
                  </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection