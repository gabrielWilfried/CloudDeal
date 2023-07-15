@extends('admin.authentication.layouts.pages.ads.default')

@section('content')
    @include('admin.authentication.layouts.pages.modal.modal-category')

    <div class="row">
        <div class="col-12">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">List Categories</h3>
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
                                @forelse ($categories as $category)
                                    <tr>
                                        <td>{{ $category->name }}</td>
                                        <td>{{ $category->description }}</td>
                                        <td>{{ $category->created_at }}</td>


                                        <td>
                                            <form id="delete-form-{{ $category->id }}" method="POST"
                                                action="{{ route('admin.category.delete', ['category' => $category]) }}">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-rounded btn-danger mb-5">
                                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                                </button>
                                            </form>
                                        </td>

                                    </tr>
                                @empty
                                    <p>No Category</p>
                                @endforelse
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

