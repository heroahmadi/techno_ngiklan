@extends('userpage.templates.home')

@section('content')
<!-- start banner Area -->
<section class="banner-area relative about-banner" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    Pencarian
                </h1>
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->

<!-- Start popular-courses Area -->
<section class="popular-courses-area section-gap courses-page">
    <div class="container">
        <div class="row d-flex">
            <div class="menu-content col-lg-4">
                <p>Menampilkan {{ $results->count() }} dari {{ $results->total() }}</p>
            </div>
        </div>
        <div class="row mb-50">
            <form action="">
                <div class="col-lg-6">
                    <input type="text" name="q" placeholder="Search..." onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search...'" class="form-control" value="{{ request('q') }}">
                </div>
                <div class="col-lg-6">
                    <select name="category">
                        <option value="all">-- Semua Kategori --</option>
                        @foreach ($kategori as $kat)
                        <option value="{{ $kat->id }}">{{ $kat->nama_kategori }}</option>
                        @endforeach
                    </select>
                </div>
            </form>
        </div>
        <div class="row">
            @foreach ($results as $result)
            <div class="single-popular-carusel col-lg-3 col-md-6">
                <div class="thumb-wrap relative">
                    <div class="thumb relative">
                        <div class="overlay overlay-bg"></div>
                        <img class="img-fluid" src="{{ asset('storage/endorsers/dinda.jpg') }}" alt="">
                    </div>
                    <div class="meta d-flex justify-content-between">
                        <p><span class="lnr lnr-users"></span> {followers} <span class="lnr lnr-bubble"></span>{}</p>
                        <h4>{harga}</h4>
                    </div>
                </div>
                <div class="details">
                    <a href="{{ url('transaction/'.$result->id) }}">
                        <h4>
                            {{ $result->nama }}
                        </h4>
                    </a>
                    <p>
                        {kuliner, itu, ini, oke}
                    </p>
                </div>
            </div>
            @endforeach
        </div>

        <div class="row">
            {{ $results->links() }}
        </div>
    </div>
</section>
<!-- End popular-courses Area -->

@endsection
