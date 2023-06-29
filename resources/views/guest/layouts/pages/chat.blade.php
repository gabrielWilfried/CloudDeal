@extends('guest.layouts.layout')

@section('style')
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/css/chat.css') }}">
@endsection

@section('content')
    @include('guest.includes.navbanner')
    <div class="container">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card chat-app">
                    <div id="plist" class="people-list" x-data="chatComponent" x-init="fetchDiscussions()">
                        <div class="input-group">
                            <input type="text" x-model="searchQuery" class="form-control" placeholder="Search...">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-search"></i></span>
                            </div>
                        </div>
                        <ul class="list-unstyled chat-list mt-2 mb-0">
                            {{-- <template x-for="discussion in discussions" :key="discussion.id">
                            <li class="clearfix"
                                x-on:click="openDiscussion === discussion.id ? openDiscussion = null : openDiscussion = discussion.id">
                                <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="avatar">
                                <div class="about">
                                    <div class="name">
                                        <h3 x-text="discussion.slug"></h3>

                                    </div>
                                    <div class="status">
                                        <span>Online</span>
                                    </div>
                                </div>
                            </li>
                            </template> --}}

                            <li class="clearfix">
                                <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="avatar">
                                <div class="about">
                                    <div class="name">
                                        <h3 x-text="discussion.slug"></h3>

                                    </div>
                                    <div class="status">
                                        <span>Online</span>
                                    </div>
                                </div>
                            </li>
                            <li class="clearfix">
                                <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="avatar">
                                <div class="about">
                                    <div class="name">
                                        <h3 x-text="discussion.slug"></h3>

                                    </div>
                                    <div class="status">
                                        <span>Online</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="chat">
                        <div class="chat-header clearfix">
                            <div class="row">
                                <div class="col-lg-6">
                                    <a href="javascript:void(0);" data-toggle="modal" data-target="#view_info">
                                        <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="avatar">
                                    </a>
                                    <div class="chat-about">
                                        <h6 class="m-b-0" x-text="discussion.slug"></h6>
                                        <small>
                                            {{-- JE dois gérer le status avec alpinejs --}}
                                        </small>
                                    </div>
                                </div>
                                <div class="col-lg-6 hidden-sm text-right">
                                    <a href="javascript:void(0);" class="btn btn-outline-secondary"><i
                                            class="fa fa-camera"></i></a>
                                    <a href="javascript:void(0);" class="btn btn-outline-primary"><i
                                            class="fa fa-image"></i></a>
                                    <a href="javascript:void(0);" class="btn btn-outline-info"><i
                                            class="fa fa-cogs"></i></a>
                                    <a href="javascript:void(0);" class="btn btn-outline-warning"><i
                                            class="fa fa-question"></i></a>
                                </div>
                            </div>
                        </div>
                        @isset($discussion)
                            <div class="chat-history">
                                <ul class="m-b-0">
                                    @foreach ($discussion->messages as $message)
                                        <li class="clearfix">
                                            <div class="message-data {{ $message->user_id === 2 ? 'text-right' : '' }}">
                                                <span
                                                    class="message-data-time">{{ $message->created_at->format('h:i A, M d') }}</span>
                                                <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="avatar">
                                            </div>
                                            <div class="message {{ $message->user_id === 2 ? 'my-message' : 'other-message' }}">
                                                {{ $message->content }}
                                            </div>
                                        </li>
                                    @endforeach

                                </ul>
                            </div>
                            <div class="chat-message clearfix">
                                <div class="input-group mb-0">
                                    <form action="{{ route('messages.store') }}" method="POST">
                                        <input type="text" placeholder="Enter text here...">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-send"></i></span>
                                        </div>
                                        <input type="hidden" name="discussion_id" value="{{ $discussion->id }}">
                                    </form>
                                </div>
                            </div>
                        @endisset
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
