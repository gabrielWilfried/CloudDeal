@extends('guest.layouts.layout')

@section('style')
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
<link rel="stylesheet" href="{{ asset('assets/css/chat.css') }}">
@endsection

@section('content')
@include('guest.includes.navbanner')

<div class="container" x-data="chatComponent" x-init="fetchDiscussions()">
    <div class="row clearfix">
        <div class="col-lg-12">
            <div class="card chat-app">
                <div id="plist" class="people-list">
                    <div class="input-group">
                        <input type="text" class="form-control" x-model="searchQuery" x-on:input.debounce="searchDiscussions" placeholder="Search...">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-search"></i></span>
                        </div>

                    </div>
                    <ul class="list-unstyled chat-list mt-2 mb-0">

                        <div class="list-discussion">
                            <template x-for="discussion in filteredDiscussions" :key="discussion.id">
                                <div class="list-item">
                                    <li class="clearfix" x-on:click="selectDiscussion(discussion.id)">
                                        <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="avatar">
                                        <div class="about">
                                            <div class="name">
                                                <span x-text="discussion.slug"></span>


                                            </div>
                                            <div class="status">
                                                <span>Online</span>
                                            </div>
                                        </div>
                                    </li>
                                </div>
                            </template>



                        </div>
                    </ul>
                </div>
                <div class="chat">
                    <div class="chat-header clearfix">
                        <div class="row">
                            <div class="col-lg-6">
                                <a href="javascript:void(0);" data-toggle="modal" data-target="#view_info">
                                    <img x-show="currentDiscussion == !null" src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="avatar">
                                </a>
                                <div class="chat-about">

                                    <small>
                                        <span x-text="discussionSlug"></span>
                                    </small>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="chat-history">
                        <ul class="m-b-0">
                            <div class="list-message">
                                <template x-for="message in messages" :key="message.id">

                                    <li class="clearfix" :class="{ 'text-right': message.sender === currentUser, 'text-left': message.sender === !currentUser }">

                                        <div class="message-data text-right">
                                            <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="avatar">
                                            <span class="message-data-time" x-text="formatTimestamp(message.created_at)"></span>
                                            <span x-show="message.sender === currentUser" class="message-data-time" x-text="formatTimestamp(message.created_at)">12:20</span>
                                            <img x-show="message.sender === currentUser" src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="avatar">

                                        </div>
                                        <div class="message-data text-left">
                                            <img x-show="message.sender === !currentUser" src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="avatar">
                                            <span x-show="message.sender === !currentUser" class="message-data-time">12:15</span>
                                        </div>
                                        <div class="message other-messages text-right">
                                            <span x-text="message.content">
                                            </span>
                                        </div>
                                    </li>
{{-- Chat reactive Comment le faire  --}}

                                </template>
                            </div>
                            <div class="chat-message clearfix">
                                <div class="input-group mb-0" x-show="currentDiscussion == !null">
                                    <input type="text" x-model="newMessage" class="message-input" placeholder="Enter text here...">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-send" x-on:click="sendMessage(currentDiscussion)"></i></span>
                                    </div>
                                </div>
                            </div>
                    </div>
                    </ul>



                </div>
            </div>
        </div>
    </div>
</div>
@endsection
