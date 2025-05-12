<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TutorMateriController extends Controller

{
    public function index()
    {
        return view('admin_tutor.tutormateri');
    }
}
