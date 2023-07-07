@extends('admin.authentication.layouts.pages.ads.default')


@section('content')
    <div class="col-12">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">List Messages</h3>


                <!-- /.box-header -->
                <div class="box-body">
                    <div class="table-responsive">

                        <table class="table table-striped">
                            <thead>
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
                                                    method="get" class="mark-as-read-form">
                                                    @csrf
                                                    <button type="submit" class="mark-as-read-button unread">
                                                        <i class="fa fa-circle"></i>
                                                    </button>
                                                </form>
                                            @else
                                                <i class="fa fa-check-circle"></i>
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
    @endsection
