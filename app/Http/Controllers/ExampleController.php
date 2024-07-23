<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Example;

class ExampleController extends Controller
{
  public function index()
    {
      $examples = Example::all();
      return view('example', [
        'examples' => $examples
      ]);
    }
}
