<?php

use App\Models\User;

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    public function getIndex()
    {
        return view('index');
    }
}
