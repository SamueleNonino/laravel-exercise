<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Counter;

class CounterController extends Controller
{
    //
    public function show()
    {
        // Trova il primo record nella tabella counters
        $counter = Counter::first();

        // Passa il valore del counter alla vista
        return view('pages.counter', ['counter' => $counter]);
    }
}
