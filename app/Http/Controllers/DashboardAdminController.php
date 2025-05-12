<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardAdmincontroller extends Controller
{
    public function index()
    {
        return view('admin&tutor.dashboardadmin');
    }

}