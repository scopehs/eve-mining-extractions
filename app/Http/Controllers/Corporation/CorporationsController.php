<?php

namespace App\Http\Controllers\Corporation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class CorporationsController extends Controller
{
    public function index() {
        dd (Auth::user());
    }
}
