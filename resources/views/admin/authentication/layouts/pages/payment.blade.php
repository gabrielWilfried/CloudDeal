@extends('admin.authentication.layouts.layout-admin')

@section('body')
    <div>

        <div>
            <p>
                <span class="text-bold">Montant :</span> {{ $montantTotals }}
            </p>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Boots</th>
                    <th>Annonce</th>
                    <th>Utilisateur</th>
                    <th>Montant</th>
                    <th>Statut</th>
                    <th>Date et heure</th>


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
                        </tr>
                    @endif
                @endforeach
            </tbody>
        </table>



    </div>
@endsection
