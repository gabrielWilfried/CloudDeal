@extends('admin.authentication.layouts.pages.ads.default')

@section('content')
    <div class="col-12">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">List Payments</h3>
                <h3 class="box-title text-right mr-35" style="position: absolute; right: 0;">TotalAmount: {{ $montantTotals }}
                </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="table-responsive">
                    <table id="example6" class="table table-bordered table-striped">
                        <thead class="bg-info">
                            <tr>
                                <th>Nature annonces</th>
                                <th>Annonce</th>
                                <th>User</th>
                                <th>Amount</th>
                                <th>Status</th>
                                <th>Payment Date</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($payments as $payment)
                                @php
                                    $annonce = App\Models\Annonce::find($payment->annonce_id);
                                    $user = $annonce->user;
                                    $boosts = $annonce->boosts;
                                @endphp

                                <tr>
                                    <td>
                                        @if ($boosts->count() > 0)
                                            <span>Boost</span>
                                        @else
                                            <span>Taxe</span>
                                        @endif
                                    </td>
                                    <td>{{ $annonce->name }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ toMoney($payment->amount) }}</td>
                                    <td>
                                        @if ($payment->status === 'PENDING')
                                            <span class="text-info text-bold">{{ $payment->status }}</span>
                                        @elseif ($payment->status === 'APPROVED')
                                            <span class="text-success text-bold">{{ $payment->status }}</span>
                                        @else
                                            <span class="text-danger text-bold">{{ $payment->status }}</span>
                                        @endif
                                    </td>
                                    <td>{{ $payment->created_at }}</td>
                                    <td>
                                        <!-- Buttons -->
                                        @if ($payment->status === 'PENDING')
                                            <form action="{{ route('admin.payments.approve', ['annonce' => $annonce]) }}"
                                                method="get">
                                                <button type="submit" class="btn btn-success btn-sm mb-5"><i
                                                        class="fa fa-check"></i></button>
                                            </form>
                                            <form action="{{ route('admin.payments.cancel', ['annonce' => $annonce]) }}"
                                                method="get">
                                                <button class="btn btn-danger btn-sm mb-5"><i
                                                        class="fa fa-times"></i></button>
                                            </form>
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
@endsection
