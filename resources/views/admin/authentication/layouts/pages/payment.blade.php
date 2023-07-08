@extends('admin.authentication.layouts.pages.ads.default')

@section('content')
    <div class="col-12">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">List Payments</h3>
                <h3 class="text-right">TotalAmount: {{ $montantTotals }}</h3>

                <!-- /.box-header -->
                <div class="box-body">
                    <div class="table-responsive">
                        <table id="example6" class="table table-bordered table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Nature</th>
                                    <th>Annonce</th>
                                    <th>User</th>
                                    <th>Amount</th>
                                    <th>Status</th>
                                    <th>Payment Date</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($annonces as $annonce)
                                    @if ($annonce->payment)
                                        <tr>
                                            <td>
                                                @if (count($annonce->boosts) > 0)
                                                    <span>boost</span>
                                                @else
                                                    <span>taxe</span>
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
                                            <td>
                                                <!-- Buttons -->
                                                @if ($annonce->payment->status === 'PENDING')
                                                    <div class="d-flex justify-content-center">
                                                        <form
                                                            action="{{ route('admin.payments.approve', ['annonce' => $annonce]) }}"
                                                            method="get">
                                                            <button type="submit" class="btn btn-success mr-2 btn-sm"><i
                                                                    class="fa fa-check "></i></button>



                                                        </form>
                                                        <form
                                                            action="{{ route('admin.payments.cancel', ['annonce' => $annonce]) }}"
                                                            method="get"><button class="btn btn-danger btn-sm">
                                                                <i class="fa fa-times "></i>
                                                            </button>
                                                        </form>


                                                    </div>
                                                @endif
                                            </td>

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
