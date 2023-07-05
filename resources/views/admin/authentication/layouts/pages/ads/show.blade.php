@extends('admin.authentication.layouts.pages.ads.default')

@section('content')
    <div class="col-12">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">List Ads</h3>
                <a type="button" href="{{ route('admin.ads.create') }}" class="btn btn-rounded btn-success mb-5">Publish</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="table-responsive">
                    <table id="example5" class="table table-bordered table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Category</th>
                                <th>Town</th>
                                <th>Published date</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($annonces as $annonce)
                                <tr>
                                    <td>{{ $annonce->name }}</td>
                                    <td>{{ $annonce->format_price }}</td>
                                    <td>{{ $annonce->category->name }}</td>
                                    <td>{{ $annonce->town->name }}</td>
                                    <td>{{ $annonce->created_at }}</td>
                                    <td>
                                        <form name="delete-ad-form" method="post"
                                            action="{{ route('admin.ads.delete', ['annonce' => $annonce]) }}">
                                            @method('DELETE')
                                            @csrf
                                            <button type="button" class="btn btn-rounded btn-info mb-5" data-toggle="modal"
                                                data-target="#modal-success">Boost <i class="fa fa-rocket"
                                                    aria-hidden="true"></i></button>
                                        </form>
                                        <form method="get"
                                            action="{{ route('admin.ads.edit', ['annonce' => $annonce]) }}">
                                            <button type="submit" class="btn btn-rounded btn-warning mb-5">Edit <i
                                                    class="fa fa-edit"></i></button>
                                        </form>
                                        <form name="delete-ad-form" method="post"
                                            action="{{ route('admin.ads.delete', ['annonce' => $annonce]) }}">
                                            @csrf
                                            @method('')
                                            <button type="submit" class="btn btn-rounded btn-danger mb-5">Delete <i
                                                    class="fa fa-trash" aria-hidden="true"></i></button>
                                        </form>
                                        <form name="" method="get" action="">
                                            @csrf
                                            @if ($annonce->is_blocked == false)
                                                <button type="button" class="btn btn-rounded btn-info mb-5"
                                                    data-toggle="modal" data-target="#modal-success">Bloquer <i
                                                        class="fa fa-rocket" aria-hidden="true"></i></button>
                                            @else
                                                <button type="button" class="btn btn-rounded btn-info mb-5"
                                                    data-toggle="modal" data-target="#modal-success">Debloquer <i
                                                        class="fa fa-rocket" aria-hidden="true"></i></button>
                                            @endif

                                        </form>


                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <h1>No ad</h1>
                                </tr>
                            @endforelse
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Category</th>
                                <th>Town</th>
                                <th>Published date</th>
                                <th>Actions</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @include('admin.authentication.layouts.pages.ads.modal.modal-boost')
    @include('admin.authentication.layouts.pages.ads.modal.modal-edit')
    @include('admin.authentication.layouts.pages.ads.modal.modal-delete')
@endsection
