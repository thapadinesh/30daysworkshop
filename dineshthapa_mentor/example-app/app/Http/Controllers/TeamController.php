<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function team()
    {
        $marks = array('ram'=>25,'shyam'=>40);
        return view('team',compact('marks'));
    }
}
