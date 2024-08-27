<?php

namespace App\Http\Controllers\View;
use App\Models\projects;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index() {
        $project = projects::all();
        return response()->json($project);
    }
}
