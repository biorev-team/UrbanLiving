<?php

namespace App\Http\Controllers;
use App\Models\status;
use Illuminate\Http\Request;

class CommonController extends Controller
{
    public function status()
    {
        return status::all();
    }
}
