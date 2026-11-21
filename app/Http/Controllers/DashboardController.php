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


    public function destroy(\Illuminate\Http\Request $request)
    {
        testing::destroy($request->id);
        return redirect('/testing');
    }



    public function showNotification()
    {
        $message = Message::all();

        return view('notificationPage',[
        'messages' => $message,
        ]);
    }


}
