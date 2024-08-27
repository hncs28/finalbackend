<?php

namespace App\Http\Controllers\CMS;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\projects;

class CMSProjectsController extends Controller
{
    public function index() 
    {
        $project = DB::table('projects')->select('*');
        $project = $project->get();

        return view('CMS/projects/projects',compact('project'));
    }
    public function edit($projectID)
    {
        $project = projects::findOrFail($projectID);
        return view('/CMS/projects/projects_update', compact('project'));
    }

    public function create() {
            return view('/CMS/projects/projects_create');
    }
    public function store(Request $request)
    {
        
        $project = new projects;
        $project->projectName = $request->projectName; 
        $project->projectLink = $request->projectLink;
        $project->projectImg = $request->projectImg;
        $project->save();
        return redirect()->action([CMSProjectsController::class,'index']);
    }

    public function show($projectID)
    {
        $project = projects::where('projectID', '=',$projectID)->select('*')->first();
        
        return view('/CMS/projects/projects_detail', compact('project'));
    }
    public function destroy($projectID)
    {
        $projects = projects::where('projectID', '=', $projectID)->delete();
    
        return redirect()->action([CMSProjectsController::class,'index'])->with('success','Dữ liệu xóa thành công.');
    }
    public function update(Request $request, $projectID)
    {
        $project = projects::find($projectID);
        $project->projectName = $request->projectName; 
        $project->projectLink = $request->projectLink;
        $project->projectImg = $request->projectImg;
        $project->save();
        return redirect()->action([CMSProjectsController::class,'index']);
    }
}
