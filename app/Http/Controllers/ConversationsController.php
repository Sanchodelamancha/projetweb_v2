<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConversationsController extends Controller
{
    //
    public function index () {
        User::select('name','id')->where('id', '!=', Auth::user()->id);

        return view('conversations/index');
    }

    public function show (int $id) {


    }

}
