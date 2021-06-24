<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use DB;
use Auth;
use App\Models\User;

class MessageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function dashboard()
    {
        $all_users = User::all();

        return view("Student\dashboard",["all_users" => $all_users ]);
    }
    public function get_messages($id)
    {
        $sender_user_id = Auth::user()->id;
        $reciver_user_id = $id;
        
        $messages = DB::select("select * from messages where sender_user_id='$sender_user_id' and reciver_user_id='$reciver_user_id' or sender_user_id='$reciver_user_id' and reciver_user_id='$sender_user_id'");
        
        $reciver_user_name = DB::select("select name from users where id='$reciver_user_id'");

        return view("Student\message",["messages" => $messages, "reciver_id" => $id ,"reciver_user_name" => $reciver_user_name]);
    }

    public function save_messages(Request $request,$id)
    {
        $add_message =Message::Create([
            'sender_user_id' => Auth::user()->id,
            'reciver_user_id' => $id,
            'message' => $request->message,
        ]);

        return redirect("messages/".$id);
    }
}
