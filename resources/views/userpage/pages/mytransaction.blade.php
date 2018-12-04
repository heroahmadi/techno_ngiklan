@extends('userpage.templates.home')

@section('content')
<!-- start banner Area -->
<section class="banner-area relative about-banner" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    My Transactions
                </h1>
            </div>
        </div>
    </div>
</section>

<section class="section-gap">
    <div class="container">
        <div class="row d-flex">
            <table class="table table-stripped">
                <thead>
                    <tr>
                        <th>Endorser</th>
                        <th>Nilai Transaksi</th>
                        <th>Status</th>
                        <th>Tanggal</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($transactions as $trans)
                    <tr>
                        <td>{{ $trans->endorser->nama }}</td>
                        <td>{{ $trans->nilai_transaksi }}</td>
                        <td>{{ $trans->status }}</td>
                        <td>{{ $trans->created_at->format('d F Y H:i') }}</td>
                        <td>
                            @if ($trans->status == 'Disetujui')
                            <button type="button" data-toggle="modal" data-target="#review_modal" id="{{ $trans->id }}" class="btn btn-primary review_btn">Review</button>
                            @elseif($trans->status == 'Ditawarkan')
                            <button type="button" id="{{ $trans->id }}" harga="{{ $trans->nilai_transaksi }}" nama="{{ $trans->endorser->nama }}" class="btn btn-primary approve" data-toggle="modal" data-target="#submit-modal">Setujui</button>
                            <button type="button" id="{{ $trans->id }}" class="btn btn-danger reject">Tolak</button>
                            @endif
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!-- End banner Area -->


    <div class="modal fade" id="submit-modal" tabindex='-1' role="dialog" style="padding-top: 150px">
        <div class="modal-dialog" role="document">
            <div class="modal-content text-center">
                <form action="{{ url('transaction/setuju') }}" method="POST">
                    @csrf
                    <input type="hidden" name="transaction_id" id="trid" value="">
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">&times;</span>
                            <span class="sr-only"><b>Setujui</b></span>
                        </button>
                        {{-- <h4 class="modal-title" id="labelModalKu">Tutup</h4> --}}
                    </div>

                    <!-- Modal Body -->
                    <div class="modal-body">
                        <p class="excert">
                            Anda akan Menggunakan Jasa Endorse dari
                        </p>
                        <h2 class="mb-20"><b id="namaku"></b></h2>
                        <p>Total Harga:</p>
                        <h2 class="mb-20 harga" id="hargaku">Rp </h2>
                        <p>Mohon Transfer ke salah satu rekening berikut:</p>
                        <p>Bank Mandiri 031-00-1170324-9 a/n Muhammad Ridha Tantowi</p>
                        <p>Bank BRI 0219-1989-9181-1 a/n Muhammad Ridha Tantowi</p>
                        <p>Bank BCA 8762-2261-00 a/n Muhammad Ridha Tantowi</p>
                        <p class="mb-20">Bank BNI 10-1975-9870  a/n Muhammad Ridha Tantowi</p>
                        <p><b>Verifikasi memakan waktu paling lambat 1x24 jam</b></p>
                    </div>

                    <!-- Modal Footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" tabindex="-1" role="dialog" id="review_modal" >
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Review</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ url('transaction/review') }}" method="POST">
                    <div class="modal-body">
                        @csrf
                        <input type="hidden" name="transaction_id" id="transaction_id">
                        <input type="hidden" name="rating" id="count">
                        <div class="form-group">
                            <textarea name="review" class="form-control" id="" placeholder="Tulis ulasan anda mengenai endorser ini..."></textarea>
                        </div>
                        <div class="form-group">
                            <div class="single-review" style="margin: 0;">
                                <div class="star">
                                    <label>Berikan penilaian anda</label>
                                    <span class="fa fa-star" id="rating-1" data-value="1"></span>
                                    <span class="fa fa-star" id="rating-2" data-value="2"></span>
                                    <span class="fa fa-star" id="rating-3" data-value="3"></span>
                                    <span class="fa fa-star" id="rating-4" data-value="4"></span>
                                    <span class="fa fa-star" id="rating-5" data-value="5"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Save</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection

@section('scripts')
    @parent

    <script>
        $(".review_btn").click(function() {
            $("#transaction_id").val($(this).attr('id'));
        });

        $(".approve").click(function() {
            $("#hargaku").html('Rp '+$(this).attr('harga'));
            $("#namaku").html('Rp '+$(this).attr('nama'));
            $("#trid").val($(this).attr('id'));
        });

        $(".star span").click(function(){
            var val = $(this).attr('data-value');
            console.log(val);
            $("#count").val(val);

            for(var i = 1; i <= 5; i++)
            {
                $("#rating-"+i).removeClass('checked');
                if(i <= val)
                    $("#rating-"+i).addClass('checked');
            }
        });

        
    </script>
@endsection