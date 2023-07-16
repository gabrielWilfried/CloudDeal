@extends('admin.authentication.layouts.pages.ads.default')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">List Messages</h3>

                </div>
                <div class="box-body">
                    <div class="table-responsive">
                        <table id="example6" class="table table-bordered table-striped">
                            <thead class="bg-info">
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Subject</th>
                                    <th scope="col">Message</th>
                                    <th scope="col">Mark as read</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($messages as $message)
                                    <tr>

                                        <td>{{ $message->fname }}</td>
                                        <td>{{ $message->email }}</td>
                                        <td>{{ $message->subject }}</td>
                                        <td>{{ $message->msg }}</td>
                                        <td>
                                            @if (!$message->is_read)
                                                <form
                                                    action="{{ route('admin.messages.markAsRead', ['id' => $message->id]) }}"
                                                    method="get">
                                                    @csrf
                                                    <button type="submit"
                                                        style="border:none; outline: none; background: none">
                                                        <i class="fa fa-check-circle text-secondary"></i>
                                                    </button>
                                                </form>
                                            @else
                                                <i class="fa fa-check-circle text-success"></i>
                                            @endif
                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
