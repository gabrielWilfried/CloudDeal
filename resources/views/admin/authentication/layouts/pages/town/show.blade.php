@extends('admin.authentication.layouts.pages.ads.default')

@section('content')
    @include('admin.authentication.layouts.pages.modal.modal-town')


    <div class="row">
        <div class="col-12">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">List Towns</h3>
                    <button type="button" id="toggle-create" class="btn btn-rounded btn-success mb-5">Add</button>
                </div>
                <div class="box-body">
                    <div class="table-responsive">

                        <table id="example6" class="table table-bordered table-striped">
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

