@extends('adminpage.templates.home')

@section('content')
<div class="row">
    <div class="col-lg-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Transactions</h4>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>
                                    #
                                </th>
                                <th>
                                    Endorser
                                </th>
                                <th>
                                    Product Owner
                                </th>
                                <th>
                                    Nilai Transaksi
                                </th>
                                <th>
                                    Status
                                </th>
                                <th>
                                    Action
                                </th>
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
                                    <td>{{ $trans->product_owner->nama }}</td>
                                    <td>{{ $trans->nilai_transaksi }}</td>
                                    <td>{{ $trans->status }}</td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-primary">Approve</button>
                                        <button type="button" class="btn btn-sm btn-danger">Reject</button>
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
@endsection