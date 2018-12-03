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
                            @endif
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!-- End banner Area -->


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