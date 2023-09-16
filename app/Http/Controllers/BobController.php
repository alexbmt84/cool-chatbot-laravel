<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Bob;
class BobController extends Controller {
    public function index() {

        return view('home');

    }

    public function respond(Request $request) {

        $bob = new Bob();

        $reply = $bob->respondTo($request->input('message'));

        return view('home', ['reply' => $reply]);

    }

}
