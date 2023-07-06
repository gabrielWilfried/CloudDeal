@extends('admin.authentication.layouts.pages.ads.default')

@section('body')
    <div class="col-12">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">List Payments</h3>

                <!-- /.box-header -->
                <div class="box-body">
                    <div class="table-responsive">
                        <table id="example6" class="table table-bordered table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Nature</th>
                                    <th>Annonce</th>
                                    <th>Utilisateur</th>
                                    <th>Montant</th>
                                    <th>Statut</th>
                                    <th>Date et Heure</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($annonces as $annonce)
                                    @if ($annonce->payment)
                                        <tr>
                                            <td>
                                                @if (count($annonce->boosts) > 0)
                                                    <span class="text-success">&#10004;</span> {{ count($annonce->boosts) }}
                                                @else
                                                    <span class="text-danger">&#10006;</span>
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
                                                <!-- Dropdown -->
                                                @if ($annonce->payment->status === 'PENDING')
                                                    <div class="dropdown">
                                                        <button class="btn btn-secondary dropdown-toggle" type="button"
                                                            id="dropdownMenuButton" data-toggle="dropdown"
                                                            aria-haspopup="true" aria-expanded="false">
                                                            Select
                                                        </button>
                                                        <div class="dropdown-menu text-center"
                                                            aria-labelledby="dropdownMenuButton">
                                                            <div class="dropdown-item mb-3">
                                                                <a
                                                                    href="{{ route('admin.payments.approve', ['annonce' => $annonce]) }}">APPROVE</a>
                                                            </div>
                                                            <div class="dropdown-item">
                                                                <a
                                                                    href="{{ route('admin.payments.cancel', ['annonce' => $annonce]) }}">CANCEL</a>
                                                            </div>
                                                        </div>
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
        @include('admin.authentication.layouts.pages.ads.modal.modal-boost')
        @include('admin.authentication.layouts.pages.ads.modal.modal-edit')
        @include('admin.authentication.layouts.pages.ads.modal.modal-delete')
    @endsection
