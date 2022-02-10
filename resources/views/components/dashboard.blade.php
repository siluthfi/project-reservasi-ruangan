@extends('layouts.index')

@section('container')
    <section class="hero p-3">
        <div class="container my-5">
            {{-- <h1>Hello World</h1> --}}
            <div class="row">
                <div class="col-md">
                    <div id="carouselExampleControls" class="carousel carousel-dark slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img src="/img/gambar.jpg" class="d-block vh-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="/img/image4.jpg" class="d-block vh-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="/img/image5.jpg" class="d-block vh-100" alt="...">
                          </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                      </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="row mt-5 text-center">
            <div class="col-md-4 mb-3">
                <div class="card shadow-sm">
                    <img src="/img/image4.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Techno Park</h5>
                        <a href="/detail" class="btn border-custom">Lihat Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card shadow-sm">
                    <img src="/img/image4.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Lab Korea</h5>
                        <a href="/detail" class="btn border-custom">Lihat Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card shadow-sm">
                    <img src="/img/image4.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">RPS</h5>
                        <a href="/detail" class="btn border-custom">Lihat Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection