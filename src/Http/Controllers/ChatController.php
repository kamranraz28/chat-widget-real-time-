
<?php

namespace Kamran\ChatWidget\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Kamran\ChatWidget\Models\Message;
use Kamran\ChatWidget\Events\MessageSent;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
    public function send(Request $request)
    {
        $message = Message::create([
            'user_id' => Auth::id(),
            'message' => $request->message
        ]);

        broadcast(new MessageSent($message))->toOthers();

        return response()->json(['success' => true]);
    }
}
