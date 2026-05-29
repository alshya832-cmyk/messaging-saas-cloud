<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class MessageController extends Controller
{
    public function index()
    {
        if (!Schema::hasTable('messages')) {
            Schema::create('messages', function ($table) {
                $table->id();
                $table->string('sender_name');
                $table->text('body');
                $table->timestamps();
            });
        }

        $messages = DB::table('messages')->latest()->get();
        return view('messages', compact('messages'));
    }

    public function store(Request $request)
    {
        DB::table('messages')->insert([
            'sender_name' => $request->sender_name,
            'body' => $request->body,
            'created_at' => now(),
        ]);

        return redirect()->back();
    }
}
