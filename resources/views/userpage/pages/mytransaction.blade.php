@foreach ($transactions as $trans)
    <p>{{ $trans->endorser->nama }}</p>
    <p>{{ $trans->product_owner->nama }}</p>
    <p>{{ $trans->nilai_transaksi }}</p>
    <p>{{ $trans->status }}</p>
    <p>{{ $trans->created_at }}</p>
    <p>{{ $trans->updated_at }}</p>
@endforeach