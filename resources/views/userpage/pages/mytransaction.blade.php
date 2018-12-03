@extends('userpage.templates.home')

@section('content')
    @foreach ($transactions as $trans)
        <p>{{ $trans->endorser->nama }}</p>
        <p>{{ $trans->product_owner->nama }}</p>
        <p>{{ $trans->nilai_transaksi }}</p>
        <p>{{ $trans->status }}</p>
        <p>{{ $trans->created_at }}</p>
        <p>{{ $trans->updated_at }}</p>
        @if ($trans->status == 'Disetujui')
        <button type="button" data-toggle="modal" data-target="#review_modal" id="{{ $trans->id }}" class="btn btn-primary review_btn">Review</button>
        @endif
    @endforeach


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