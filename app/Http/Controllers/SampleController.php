<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SampleController extends Controller
{
    public function welcome()
    {
        return 'Welcome to Laravel Test Project!';
    }

    public function new_page()
    {
        return 'New page!';
    }
}
