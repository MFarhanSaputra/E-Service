<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ListEventController extends Controller
{
    //
    public function index()
    {
        $events = \App\Events::all();
        return view('list',['events' => $events]);
    }
}
