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
                                <th>Nature du paiement</th>
                                <th>Annonce</th>
                                <th>User</th>
                                <th>Amount</th>
                                <th>Status</th>
                                <th>Payment Date</th>
                                @if (auth()->user()->is_admin)
                                    <th>Actions</th>
                                @endif
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($payments as $payment)
                                <tr>
                                    <td>
                                        @if ($payment->target_type == App\Models\Boost::class)
                                            <span>Boost</span>
                                        @else
                                            <span>Taxe</span>
                                        @endif
                                    </td>
                                    <td>{{ $payment->target->name ?? $payment->target->annonce->name }}</td>
                                    <td>{{ $payment->user->name }}</td>

                                    <td>{{ toMoney($payment->amount) }}</td>
                                    @if ($payment->status === 'PENDING')
                                        <td class="text-info text-bold">{{ $payment->status }}</td>
                                    @elseif ($payment->status === 'APPROVED')
                                        <td class="text-success text-bold">{{ $payment->status }}</td>
                                    @else
                                        <td class="text-danger  text-bold">{{ $payment->status }}</td>
                                    @endif
                                    <td>{{ $payment->created_at }}</td>
                                    @if (auth()->user()->is_admin)
                                        <td>
                                            <!-- Buttons -->
                                            @if ($payment->status === 'PENDING')
                                                <form action="{{ route('admin.payments.approve', $payment->id) }}"
                                                    method="get">
                                                    <button type="submit" class="btn btn-success btn-sm mb-5"><i
                                                            class="fa fa-check "></i></button>

                                                </form>
                                                <form action="{{ route('admin.payments.cancel', $payment->id) }}"
                                                    method="get"><button class="btn btn-danger btn-sm  mb-5">
                                                        <i class="fa fa-times "></i>
                                                    </button>
                                                </form>
                                            @endif
                                        </td>
                                    @endif
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
