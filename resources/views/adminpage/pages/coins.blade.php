@extends('adminpage.templates.home')

@section('content')
<div class="row">
    <div class="col-lg-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Coin Transactions</h4>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Endorser</th>
                                <th>Nilai Koin</th>
                                <th>Total Harga</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i = 1;
                            @endphp
                            @foreach ($transactions as $trans)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $trans->endorser->nama }}</td>
                                    <td>{{ $trans->nilai_koin_transaksi }} coins</td>
                                    <td>Rp {{ number_format($trans->coin->harga, 0, ',', '.') }}</td>
                                    <td>{{ $trans->status }}</td>
                                    <td>
                                        @if ($trans->status == 'Belum diverifikasi')
                                        <button type="button" class="btn btn-sm btn-primary" id="approve-button" data-id="{{ $trans->id }}">Approve</button>
                                        <button type="button" class="btn btn-sm btn-danger">Reject</button>
                                        @else
                                        <button type="button" class="btn btn-sm btn-danger">Hapus</button>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<form action="{{ url('admin/coins/approve') }}" method="POST" id="transaction-form">
    @csrf

    <input type="hidden" name="transaction_id" value="" id="transaction-id">
    <input type="hidden" name="action" value="" id="action">
</form>
@endsection

@section('scripts')
    @parent
    
    <script>
        $("#approve-button").click(function(){
            $("#transaction-id").val($(this).attr('data-id'));
            $("#action").val(1);

            swal({
                title: 'Apakah anda yakin?',
                text: 'Anda akan menyetujui transaksi ini',
                type: 'warning',
                showCancelButton: true
            }).then((result) => {
                if (result.value) {
                    $("#transaction-form").submit();
                }
            })
        });
    </script>
@endsection