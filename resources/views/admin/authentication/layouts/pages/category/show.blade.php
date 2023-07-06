@extends('admin.authentication.layouts.pages.ads.default')

@section('content')
@include('admin.authentication.layouts.pages.modal.modal-category')
    <div class="col-12">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">List Categories</h3>
                <a type="button" data-toggle="modal" data-target="#categoryModal" class="btn btn-rounded btn-success mb-5">Add</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body"  x-data="data" x-init="loadAds">
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
                            @forelse ($categories as $category)
                                <tr>
                                    <td>{{ $category->name }}</td>
                                    <td>{{ $category->description }}</td>
                                    <td>{{ $category->created_at }}</td>
                                    <td>

                                        <form method="get" action="{{ route('admin.category.update', ['category' => $category]) }}" >
                                            <button type="submit" class="btn btn-rounded btn-warning mb-5"><i
                                                    class="fa fa-edit"></i></button>
                                        </form>
                                        <form method="POST" onsubmit="event.preventDefault()">
                                            @csrf
                                            <input type="hidden" x-model="selectedId" :value="ad.id">
                                            <button x-on:click="deleteAd" type="submit" class="btn btn-rounded btn-danger mb-5"><i
                                                    class="fa fa-trash" aria-hidden="true"></i></button>
                                    </td>
                                </tr>
                            @empty
                                <p>No Category</p>
                            @endforelse
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Date Created</th>
                                <th>Actions</th>
                        </tfoot>
                    </table>

                </div>
            </div>
        </div>
    </div>
@endsection
