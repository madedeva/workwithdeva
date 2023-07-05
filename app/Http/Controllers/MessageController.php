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

    public function edit($id) {

        $message = Message::find($id);

        return view('admin.message.edit')->with('message', $message);
    }

    public function update(Request $request, $id) {

        $message = Message::find($id);

        $message->status = $request->input('status');

        $message->save();

        return redirect()->route('admin.message.index')->with('success', 'This message has been read');
    }

    // import messages to pdf files
    public function exportPDF() {

        $messages = Message::orderBy('id', 'desc')->get();

        $pdf = \PDF::loadView('admin.message.export', compact('messages'));

        return $pdf->download('messages.pdf');
    }
}
