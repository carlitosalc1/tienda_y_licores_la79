<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Usercontroller extends Controller
{
    
    public function create()
    {
        return view(view: 'user.create');
    }
}