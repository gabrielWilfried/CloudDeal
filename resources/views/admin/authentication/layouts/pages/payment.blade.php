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
                                <th>Nature</th>
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
                            @foreach ($annonces as $annonce)
                                @if ($annonce->payment)
                                    <tr>
                                        <td>
                                            @if (count($annonce->boosts) > 0)
                                                <span>Boost</span>
                                            @else
                                                <span>Taxe</span>
                                            @endif
                                        </td>
                                        <td>{{ $annonce->name }}</td>
                                        <td>{{ $annonce->user->name }}</td>

                                        <td>{{ toMoney($annonce->payment->amount) }}</td>
                                        @if ($annonce->payment->status === 'PENDING')
                                            <td class="text-info text-bold">{{ $annonce->payment->status }}</td>
                                        @elseif ($annonce->payment->status === 'APPROVED')
                                            <td class="text-success text-bold">{{ $annonce->payment->status }}</td>
                                        @else
                                            <td class="text-danger  text-bold">{{ $annonce->payment->status }}</td>
                                        @endif
                                        <td>{{ $annonce->created_at }}</td>
                                        @if (auth()->user()->is_admin)
                                            <td>
                                                <!-- Buttons -->
                                                @if ($annonce->payment->status === 'PENDING')
                                                    <form
                                                        action="{{ route('admin.payments.approve', ['annonce' => $annonce]) }}"
                                                        method="get">
                                                        <button type="submit" class="btn btn-success btn-sm mb-5"><i
                                                                class="fa fa-check "></i></button>

                                                    </form>
                                                    <form
                                                        action="{{ route('admin.payments.cancel', ['annonce' => $annonce]) }}"
                                                        method="get"><button class="btn btn-danger btn-sm  mb-5">
                                                            <i class="fa fa-times "></i>
                                                        </button>
                                                    </form>
                                                @endif
                                            </td>
                                        @endif
                                    </tr>
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
