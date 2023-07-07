@extends('admin.authentication.layouts.pages.ads.default')

@section('content')
    <div class="col-12">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">List Towns</h3>
                <a type="button" href="{{ route('admin.town.store') }}" class="btn btn-rounded btn-success mb-5">Add</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="table-responsive">

                    <table id="example5" class="table table-bordered table-striped" style="width:100%">
                        {{-- <thead class="bg-info"> --}}
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
                                        <form method="get" :action="ad.url_to_edit" >
                                            <button type="submit" class="btn btn-sm btn-rounded btn-warning mb-5"><i
                                                    class="fa fa-edit"></i></button>
                                        </form>

                                        <form method="POST" onsubmit="event.preventDefault()">
                                            @csrf
                                            <input type="hidden" x-model="selectedId" :value="ad.id">
                                            <button x-on:click="deleteAd" type="submit" class="btn btn-sm btn-rounded btn-danger mb-5"><i
                                                    class="fa fa-trash" aria-hidden="true"></i></button>
                                    </td>
                                </tr>
                            @empty
                            <p>No Town</p>
                            @endforelse
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Date Created</th>
                                <th>Actions</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
