<?php

namespace App\Http\Controllers;

use App\Models\Test;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test()
    {
        $test = new Test;
        $test = $test->get();

        return view('test',compact('test'));
    }
}
