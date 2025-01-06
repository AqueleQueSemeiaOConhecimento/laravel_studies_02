<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function showView(): View
    {
        // método 1
        // $data = [
        //     'name' => 'Matheus Araujo',
        //     'phone' => '123456789'
        // ];
        // return view("admin.newPage3", $data);
        
        // método 2
        // return view("admin.newPage3", [
        //     'name' => 'Matheus Araujo',
        //     'phone' => '123456789'
        // ]);

        // método 3
        // return view("admin.newPage3")
        //     ->with('name', 'Matheus Araujo')
        //     ->with('phone', '123456789');
        
        // método 4
        $name = 'Matheus Araujo de Melo';
        $phone = '123456789';
        
        return view('admin.newPage3', compact('name', 'phone'));
    }
}
