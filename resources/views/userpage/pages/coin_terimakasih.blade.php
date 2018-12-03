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
                <h2>Terimakasih</h2>
                <p>Segera lakukan pembayaran, koin akan bertambah apabila admin telah memverifikasi pembayaran</p>
                <a href="/" class="genric-btn primary">Kembali ke beranda</a>
            </div>
        </div>
    </div>
</section>
@endsection
