@extends('userpage.templates.home')
{{-- 
@section('styles')
    @parent
@endsection --}}

@section('content')
<!-- start banner Area -->
<section class="banner-area relative" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    Pembayaran
                </h1>
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->
<section class="post-content-area single-post-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 text-center">
                <h2 class="mt-20 mb-20">Pembayaran</h2>
                <p class="excert">
                    Anda akan Menggunakan Jasa Endorse dari <b>{{ $coin->jumlah }} coins</b>
                </p>
                <p>Total Harga:</p>
                <h2 class="mb-20 harga">Rp {{ number_format($coin->harga, 0, ',', '.') }}</h2>
                <p>Bank Mandiri 031-00-1170324-9 a/n Muhammad Ridha Tantowi</p>
                <p>Bank BRI 0219-1989-9181-1 a/n Muhammad Ridha Tantowi</p>
                <p>Bank BCA 8762-2261-00 a/n Muhammad Ridha Tantowi</p>
                <p class="mb-20">Bank BNI 10-1975-9870  a/n Muhammad Ridha Tantowi</p>
                <p><b>Verifikasi memakan waktu paling lambat 1x24 jam</b></p>
                <form action="{{ url('coins/buy') }}" method="POST">
                    @csrf

                    <input type="hidden" name="id" value="{{ $coin->id }}">
                    <button type="button" class="genric-btn primary">Batal</button>
                    <button type="submit" class="genric-btn success">Bayar</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
