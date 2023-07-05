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

                                        <form name="" method="post"
                                            action="{{ route('admin.ads.block', ['annonce' => $annonce]) }}">
                                            @csrf
                                            @method('put')
                                            @if ($annonce->is_blocked == false)
                                                <button type="submit" class="btn btn-rounded btn-danger mb-5">Bloquer
                                                    <i></i></button>
                                            @else
                                                <button type="submit" class="btn btn-rounded btn-success mb-5">Debloquer
                                                    <i></i></button>
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
