@extends('user.layouts.layout')

@section('style')
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/css/chat.css') }}">
@endsection

@section('content')
    @include('user.includes.breadcumb')
    <div class="container">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card chat-app">
                    <div id="plist" class="people-list">
                        <div class="input-group" x-data="{ discussions: [], searchQuery: '' } " x-init="chatComponent()" >
                            <input type="text" x-model="searchQuery" class="form-control" placeholder="Search...">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-search"></i></span>
                            </div>
                        </div>
                        <ul class="list-unstyled chat-list mt-2 mb-0">
                            <template x-for="discussion in discussions" :key="discussion.id">
                                <li class="clearfix" x-on:click="openDiscussion === discussion.id ? openDiscussion = null : openDiscussion = discussion.id">
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
                            </template>
                        </ul>
                        <script {{-- src="{{ asset('assets/custom/js/chat') }}" --}}>
                            function chatComponent() {
                                return {
                                    discussions: [], // Les discussions récupérées depuis le backend
                                    searchQuery: '', // La valeur de recherche de l'utilisateur

                                    fetchDiscussions() {
                                    // Appel AJAX pour récupérer les discussions
                                    var userId = 2;
                                    fetch(`/chat/${Id}`)
                                        .then(response => response.json())
                                        .then(data => {
                                        this.discussions = data;
                                        })
                                        .catch(error => {
                                        console.error(error);
                                        });
                                    },

                                    get filteredDiscussions() {
                                    // Filtrer les discussions en fonction de la recherche de l'utilisateur
                                    if (this.searchQuery.trim() === '') {
                                        return this.discussions;
                                    } else {
                                        const searchTerm = this.searchQuery.toLowerCase();
                                        return this.discussions.filter(discussion => {
                                        // Comparer la valeur de recherche avec les discussions
                                        return discussion.slug.toLowerCase().includes(searchTerm);
                                        });
                                    }
                                    },

                                    // sortDiscussionsByLatestMessage() {
                                    // // Trier les discussions par le message le plus récent
                                    // this.discussions.sort((a, b) => {
                                    //     const lastMessageA = a.messages[a.messages.length - 1];
                                    //     const lastMessageB = b.messages[b.messages.length - 1];
                                    //     return new Date(lastMessageB.created_at) - new Date(lastMessageA.created_at);
                                    // });
                                    // }
                                };
                                console.log(discussions);
                            }

                        </script>
                         {{-- <script>
                            window.onload = function () {
                                Alpine.data('filteredDiscussions', function() {
                                    return this.discussions.filter(discussion => {
                                        return discussion.slug.toLowerCase().includes(this.search.toLowerCase());
                                    });
                                });
                            }
                        </script> --}}
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
                                        @foreach($discussion->messages as $message)
                                            <li class="clearfix">
                                                <div class="message-data {{ $message->user_id === 2 ? 'text-right' : '' }}">
                                                    <span class="message-data-time">{{ $message->created_at->format('h:i A, M d') }}</span>
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
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2"></script>
    <script>
        Alpine.start();
    </script>

@endsection
