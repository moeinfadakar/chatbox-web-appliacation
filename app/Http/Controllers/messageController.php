<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class messageController extends Controller
{
    function index(){
         $Messages = Message::all();
        return view('welcome', [
          "messages" => $Messages

        ]);

        }
        function add(request $request){

        $Message = new message();
        $Message->name = $request["name"];
        $Message->text = $request["text"];
         $Message->save();

        return redirect()->to('/');
}}
