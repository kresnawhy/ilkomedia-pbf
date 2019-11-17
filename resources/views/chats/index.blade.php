<div class="chat-wrapper">
    <ul class="chats">
        @foreach($chats as $chat)
            <li class="chat clearfix">
                <div class="{{ ($chat->from == Auth::id()) ? 'sent' : 'received' }}">
                    <p>{{ $chat->chat }}</p>
                    <p class="date">{{ date('d M y, h:i a', strtotime($chat->created_at)) }}</p>
                </div>
            </li>
        @endforeach
    </ul>
</div>

<div class="input-text">
    <input type="textarea" name="chat" class="submit">
</div>