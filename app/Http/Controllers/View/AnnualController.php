<?php

namespace App\Http\Controllers\View;
use App\Models\annual;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AnnualController extends Controller
{
    public function index() {
        $annual = annual::all();
        return response()->json($annual);
    }
}
