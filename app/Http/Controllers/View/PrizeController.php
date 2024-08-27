<?php

namespace App\Http\Controllers\View;
use App\Models\prizes;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PrizeController extends Controller
{
    public function index() {
        $prize = prizes::all();
        return response()->json($prize);
    }
}
