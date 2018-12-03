@extends('userpage.templates.home')

@section('content')
<!-- start banner Area -->
<section class="banner-area relative about-banner" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    Coins
                </h1>
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->

<!-- Start events-list Area -->
<div class="whole-wrap">
    <div class="container">
        <div class="section-top-border">
            <h3 class="mb-30">Beli Coins</h3>
            <div class="progress-table-wrap">
                <div class="progress-table">
                    <div class="table-head">
                        <div class="serial">#</div>
                        <div class="country">Paket Coins</div>
                        <div class="visit">Harga</div>
                        <div class="percentage"></div>
                    </div>
                    @php
                        $i = 1;
                    @endphp
                    @foreach ($coins as $coin)
                    <div class="table-row">
                        <div class="serial">{{ $i++ }}</div>
                        <div class="country"> <img src="{{ asset('assets/img/coins.png') }}" alt="coin" style="width: 50px;">{{ $coin->jumlah }} Coins</div>
                        <div class="visit">Rp {{ number_format($coin->harga, 0, ',', '.') }}</div>
                        <div class="percentage">
                            <a href="{{ url('coins/buy/'.$coin->id) }}" class="genric-btn info circle arrow">Beli<span class="lnr lnr-arrow-right"></span></a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End events-list Area -->
@endsection
