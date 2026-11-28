<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;


class DashboardController extends Controller
{
    public function view()
    {
        // $message = Message::all();
        return view ('dashboard');

                // return view ('dashboard',compact('message'));

    }

    public function viewEditContent()
    {
        return view('editPageDashboard');
    }


    public function showNotification()
    {
        $message = Message::orderBy('id')->paginate(5);

        return view('notificationPage',[
        'messages' => $message,
        ]);
    }


}
