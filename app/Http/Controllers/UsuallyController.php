<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skill;

class UsuallyController extends Controller
{
    public function index()
    {
        return view('usually.index');
    }

    public function template()
    {
        return view('usually.template');
    }

    public function command()
    {
        
    }
}
