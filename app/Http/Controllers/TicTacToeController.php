<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TicTacToeController extends Controller
{
        /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('pc');
    }

    // public function computer()
    // {
    //     return view('pc');
    // }
}