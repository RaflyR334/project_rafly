@extends('layouts.front')

@section('content')

    <!-- slider-area-start -->
    <section class="slider-area slider-bg slider-bg-height">
       <!-- Slider content here, skipped for brevity -->
    </section>
    <!-- slider-area-end -->

    <!-- Jumbotron -->
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Selamat datang di Toko Kami!</h1>
            <p class="lead">Temukan berbagai produk berkualitas kami dengan harga terbaik.</p>
        </div>
    </div>

    <!-- product-area-start -->
    <section class="product-area pb-65">
       <div class="container">
          <div class="row">
             <div class="col-lg-12">
                <div class="tpsection mb-40">
                   <h4 class="tpsection__title">Beberapa Produk</h4>
                </div>
             </div>
          </div>

          <style>
              /* CSS for consistent height and text alignment of card */
              .card {
                  height: 100%;
                  display: flex;
                  flex-direction: column;
              }
              .card-body {
                  flex: 1;
                  display: flex;
                  flex-direction: column;
                  justify-content: space-between;
              }
              .card-title {
                  font-size: 1.25rem;
                  margin-bottom: 0.75rem;
              }
              .card-text {
                  flex: 1;
              }
              .btn {
                  align-self: flex-end;
              }
          </style>

          <div class="row">
            @foreach($produk as $item)
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="card">
                        <img src="{{ asset('storage/produks/' . $item->image) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->nama_produk }}</h5>
                            <p class="card-text">{{ $item->deskripsi }}</p>
                            <a href="{{url('produk', $item->id)}}" class="btn btn-primary">Lihat detail</a>
                        </div>
                    </div>
                </div>
            @endforeach
          </div>
       </div>
    </section>
    <!-- product-area-end -->

@endsection
