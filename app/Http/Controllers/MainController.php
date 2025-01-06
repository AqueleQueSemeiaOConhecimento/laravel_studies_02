<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function showView(): View
    {
        return view("home", [
            // 'value' => random_int(1,5)
            'value' => 100
        ]);
    }
}
