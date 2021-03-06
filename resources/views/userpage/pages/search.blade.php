@extends('userpage.templates.home')

@section('styles')
    @parent

    <style>
        .img-fluid {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: auto !important;
            max-height: 250px;
        }

        .bg-grey {
            background-color: rgba(165, 165, 165, 0.75);;
        }
    </style>
@endsection

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
            <form action="" id="searchform">
                <div class="col-lg-6">
                    <input type="text" name="q" placeholder="Search..." onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search...'" class="form-control" value="{{ request('q') }}">
                </div>
                <div class="col-lg-6">
                    <select name="category" id="category">
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
                        <img class="img-fluid" src="{{ asset($result->foto) }}" alt="">
                    </div>
                    <div class="meta d-flex justify-content-between bg-grey">
                        <p>Category: 
                            @if (auth()->user()->type === 'product owner')
                            @foreach ($result->kategori_endorser as $ka)
                                {{ $ka->kategori->nama_kategori.' ' }}
                            @endforeach
                            @else
                            {{ $result->kategori->nama_kategori }}
                            @endif
                        </p>
                    </div>
                </div>
                <div class="details">
                    @if (auth()->user()->type === 'product owner')
                    <a href="{{ url('profile/'.$result->user->id) }}">
                    @else
                    <a href="{{ url('product/'.$result->id) }}">
                    @endif
                        <h4>
                            {{ $result->nama }}
                        </h4>
                    </a>
                    @if (auth()->user()->type === 'product owner')
                    <p>Followers: {{ rand(1, 5) }}jt</p>
                    @endif
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


@section('scripts')
    @parent

    <script>
        $("#category").change(function(){
            $("#searchform").submit();
        });

        @if(request('category'))
        $("#category").val('{{request("category")}}')
        @endif
    </script>
@endsection