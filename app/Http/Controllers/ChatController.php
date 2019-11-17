<?php

namespace App\Http\Controllers;


use App\Chat;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Pusher\Pusher;

class ChatController extends Controller
{
    public function index()
    {
        $users = DB::select("select users.id, users.name, users.avatar, users.email, count(is_read) as unread 
        from users LEFT JOIN  chats ON users.id = chats.from and is_read = 0 and chats.to = ". Auth::id() ."
        where users.id != ". Auth::id() ."
        group by users.id, users.name, users.avatar, users.email");
        return view('chat', ['users' => $users]);
    }
    public function getChat($user_id)
    {
        $my_id = Auth::id();
        Chat::where(['from' => $user_id, 'to' => $my_id])->update(['is_read' => 1]);
        $chats = Chat::where(function ($query) use ($user_id, $my_id) {
            $query->where('from', $user_id)->where('to', $my_id);
        })->oRwhere(function ($query) use ($user_id, $my_id) {
            $query->where('from', $my_id)->where('to', $user_id);
        })->get();
        return view('chats.index', ['chats' => $chats]);
    }
    public function sendChat(Request $request)
    {
        $from = Auth::id();
        $to = $request->receiver_id;
        $chat = $request->chat;
        $data = new Chat();
        $data->from = $from;
        $data->to = $to;
        $data->chat = $chat;
        $data->is_read = 0;
        $data->save();
        // pusher
        $options = array(
            'cluster' => 'ap1',
            'useTLS' => true
        );
        $pusher = new Pusher(
            env('PUSHER_APP_KEY'),
            env('PUSHER_APP_SECRET'),
            env('PUSHER_APP_ID'),
            $options
        );
        $data = ['from' => $from, 'to' => $to]; // sending from and to user id when pressed enter
        $pusher->trigger('my-channel', 'my-event', $data);
    }
}
