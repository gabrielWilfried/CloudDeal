@extends('admin.authentication.layouts.pages.ads.default')

@section('content')
    @include('admin.authentication.layouts.pages.modal.modal-town')

    @if (session('success'))
        <div id="success-alert" class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="col-12">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">List Towns</h3>
                <button type="button" id="toggle-create" class="btn btn-rounded btn-success mb-5">Add</button>
            </div>
            <div class="box-body">
                <div class="table-responsive">

                    <table id="example6" class="table table-bordered table-striped" style="width:100%">
                        <thead class="bg-info">
                            <tr>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Date Created</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($towns as $town)
                                <tr>
                                    <td>{{ $town->name }}</td>
                                    <td>{{ $town->description }}</td>
                                    <td>{{ $town->created_at }}</td>


                                    <td>
                                        <form id="delete-form-{{ $town->id }}" method="POST"
                                            action="{{ route('admin.town.delete', ['town' => $town]) }}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-rounded btn-danger mb-5">
                                                <i class="fa fa-trash" aria-hidden="true"></i>
                                            </button>
                                        </form>
                                    </td>

                                </tr>
                            @empty
                                <p>No Towns</p>
                            @endforelse
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection

@section('script')
    <script>
        // Attends que le document soit prêt
        $(document).ready(function() {
            // Masque le message de succès après 30 secondes
            setTimeout(function() {
                $('#success-alert').fadeOut('slow');
            }, 10000); // 30 secondes (en millisecondes)
        });
    </script>
@endsection
