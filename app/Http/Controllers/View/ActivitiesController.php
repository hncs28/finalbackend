<?php

namespace App\Http\Controllers\View;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\activities;
class ActivitiesController extends Controller
{
    public function index() {
        $act = activities::all();
        return response()->json($act);
    }
}
