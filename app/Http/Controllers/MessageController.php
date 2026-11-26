<?php

namespace App\Http\Controllers;
use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
        'description' => 'required|string|max:1000|min:1',
        ]);

        Message::create($data);

        return redirect('/contact');
    }

    public function destroy(Message $message)
    {
        $message->delete();
        return redirect('/dashboard/view/Notification');
    }
}
