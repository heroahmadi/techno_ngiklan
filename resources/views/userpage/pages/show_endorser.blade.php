@extends('userpage.templates.home')

@section('content')
<section class="popular-courses-area section-gap courses-page">
    <div class="container">
        <div class="row d-flex">
            <form action="{{ url('transaction/add') }}" method="POST">
                @csrf
                <input type="hidden" name="{{ $endorser->id }}">
                <select name="produk_id" id="">
                    @foreach ($products as $item)
                    <option value="{{ $item->id }}">{{ $item->nama_produk }}</option>
                    @endforeach
                </select>
                <input type="submit" class="btn btn-primary">
            </form>
        </div>
    </div>
</section>
@endsection
