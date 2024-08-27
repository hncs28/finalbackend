<?php

namespace App\Http\Controllers\View;
use App\Models\traditional;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TraditionalController extends Controller
{
    public function index() {
        $traditional = traditional::all();
        return response() -> json($traditional);
    }
}
