@extends('admin.authentication.layouts.pages.ads.default')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">List Ads</h3>
                    <a type="button" href="{{ route('admin.ads.create') }}" class="btn btn-rounded btn-success mb-5">Add</a>
                </div>
                <div class="box-body">
                    <div class="table-responsive">
                        <table id="example6" class="table table-bordered table-striped" style="width:100%">
                            <thead class="bg-info">
                                <tr>
                                    <th>Name </th>
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
                                        <td>{{ $annonce->name }}
                                            @if (count($annonce->boosts) > 0)
                                                <br><small class="badge-success">Boosted</small>
                                            @endif
                                        </td>
                                        <td>{{ $annonce->format_price }}</td>
                                        <td>{{ $annonce->category->name }}</td>
                                        <td>{{ $annonce->town->name }}</td>
                                        <td>{{ $annonce->created_at }}</td>
                                        <td>

                                            <a href="{{ route('admin.ads.detail', ['annonce' => $annonce]) }}"
                                                class="btn btn-rounded btn-sm btn-dark mb-5 "><i class="fa fa-eye"></i></a>
                                            @if ($annonce->is_verified == true)
                                                <form name="" method="post"
                                                    action="{{ route('admin.ads.block', ['annonce' => $annonce]) }}">
                                                    @csrf
                                                    @method('put')
                                                    @if ($annonce->is_blocked == true)
                                                        <button type="submit"
                                                            class="btn btn-rounded btn-danger btn-sm mb-5">
                                                            <i class="fa fa-lock"> </i></button>
                                                    @else
                                                        <button type="submit"
                                                            class="btn btn-rounded btn-success btn-sm mb-5">
                                                            <i class="fa fa-unlock"></i></button>
                                                    @endif


                                                </form>
                                            @endif
                                            @if ($annonce->is_verified == false)
                                                <form name="" method="post"
                                                    action="{{ route('admin.ads.verify', ['annonce' => $annonce]) }}">
                                                    @csrf
                                                    @method('put')

                                                    <button type="submit" class="btn btn-rounded btn-danger btn-sm mb-5">
                                                        <i class="fa fa-times"></i>
                                                    </button>
                                                </form>
                                            @endif
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6">No ad</td>
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
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
