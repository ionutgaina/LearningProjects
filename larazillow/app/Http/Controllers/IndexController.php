<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index() {
        return inertia('Index/Index',
        // here we pass data to the component (props)
    [
        'message' => 'Hello from Laravel'
    ]);
    }
    public function show() {
        return inertia('Index/Show');
    }
}
