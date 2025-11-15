<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Message;
use App\Models\TUser;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function adminChatView()
    {

        // $allUsers = TUser::all();
        $allUsers = TUser::select('t_users.*')
        ->leftJoin('messages', 't_users.pk_i_id', '=', 'messages.fk_i_user_id')
        ->selectRaw('MAX(messages.dt_created_date) as last_message_time')
        ->groupBy('t_users.pk_i_id')
        ->orderByDesc('last_message_time')
        ->get();
        return view('admin.chat.index',compact('allUsers'));
    }
    public function adminSendMessage(Request $request)
    {
        if ($request->has('is_front')) {
            $is_admin = false ;
        } else {
            $is_admin = true ;
        }
        Message::create([
            'fk_i_user_id' => $request->fk_i_user_id,
            'is_from_admin' =>  $is_admin,
            'message' => $request->message,
        ]);
        return back();
    }
    public function getMessages($userId)
    {
        $user = TUser::where('pk_i_id' , $userId)->first();
        $messages = Message::where('fk_i_user_id', $userId)->orderBy('dt_created_date')->get();
        return view('admin.chat.messages', compact('messages','user'));
    }
}
