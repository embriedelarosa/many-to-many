<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Models\Progress;

class ProgressesController extends Controller
{
    public function index()
{
    $progresses = Progress::with('chapters')->paginate(10);
    return view('progresses.index', compact('progresses'));
}

}
