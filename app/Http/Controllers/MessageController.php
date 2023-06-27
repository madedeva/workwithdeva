<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class MessageController extends Controller
{
    public function __construct() {
        $this->middleware(['auth', 'verified']);
    }

    public function index() {

        $messages = Message::orderBy('id', 'desc')->get();

        return view('admin.message.index')->with('messages', $messages);
    }

    public function destroy($id) {

        $message = Message::find($id);

        $message->delete();

        return redirect()->route('admin.message.index')->with('success', 'Message deleted successfully');
    }
}
