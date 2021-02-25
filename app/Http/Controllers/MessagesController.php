<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
class MessagesController extends Controller
{
    public function messaging(Request $req){
        $message = new Message;

        $message->name=$req['name'];
        $message->email=$req['email'];
        $message->number=$req['phone'];
        $message->msg=$req['msg'];
        $message->save();
        return redirect('/');
    }
}
