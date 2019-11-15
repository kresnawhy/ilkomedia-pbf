@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row-chat">
        <div class="col-md-4">
            <div class="user-wrapper">
                <ul class="users">
                    @foreach($users as $user)
                        <li class="user" id="{{ $user->id }}">
                            <span class="pending"></span>

                            <div class="media">
                                <div class="media-left">
                                    <img src="{{ $user->avatar }}" alt="" class="media-object">
                                </div>

                                <div class="media-body">
                                    <p class="name">{{ $user->name }}</p>
                                    <p class="email">{{ $user->email }}</p>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>

        <div class="col-md-8" id="chats">
            <div class="chat-wrapper">
                <ul class="chats">
                    <li class="chat clearfix">
                        <div class="sent">
                            <p>Lorem ipsum dolor.</p>
                            <p class="date">1 Sep, 2019</p>
                        </div>
                    </li>

                    <li class="chat clearfix">
                        <div class="received">
                            <p>Lorem ipsum dolor.</p>
                            <p class="date">1 Sep, 2019</p>
                        </div>
                    </li>

                    <li class="chat clearfix">
                        <div class="sent">
                            <p>Lorem ipsum dolor.</p>
                            <p class="date">1 Sep, 2019</p>
                        </div>
                    </li>

                    <li class="chat clearfix">
                        <div class="received">
                            <p>Lorem ipsum dolor.</p>
                            <p class="date">1 Sep, 2019</p>
                        </div>
                    </li>

                    <li class="chat clearfix">
                        <div class="sent">
                            <p>Lorem ipsum dolor.</p>
                            <p class="date">1 Sep, 2019</p>
                        </div>
                    </li>

                    <li class="chat clearfix">
                        <div class="received">
                            <p>Lorem ipsum dolor.</p>
                            <p class="date">1 Sep, 2019</p>
                        </div>
                    </li>

                    <li class="chat clearfix">
                        <div class="sent">
                            <p>Lorem ipsum dolor.</p>
                            <p class="date">1 Sep, 2019</p>
                        </div>
                    </li>

                    <li class="chat clearfix">
                        <div class="received">
                            <p>Lorem ipsum dolor.</p>
                            <p class="date">1 Sep, 2019</p>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="input-text">
                <input type="textarea" name="chat" class="submit">
            </div>
        </div>
    </div>
</div>
@endsection