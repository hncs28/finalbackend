<?php

namespace App\Http\Controllers\CMS;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\activities;

class CMSActivitiesController extends Controller
{
    public function index() 
    {
        $act = DB::table('activities')->select('*')->get();
        return view('CMS/activities/activities', compact('act'));
    }
    public function edit($actID)
    {
        $act = activities::findOrFail($actID);
        return view('/CMS/activities/activities_update', compact('act'));
    }

    public function create() {
            return view('/CMS/activities/activities_create');
    }
    public function store(Request $request)
    {
        
        $act = new activities;
        $act->actName = $request->actName; 
        $act->actImg = $request->actImg;
        
        $act->save();
        return redirect()->action([CMSActivitiesController::class,'index']);
    }

    public function show($actID)
    {
        $act = activities::where('actID', '=',$actID)->select('*')->first();
        
        return view('/CMS/activities/activities_detail', compact('act'));
    }
    public function destroy($actID)
    {
        $act = activities::where('actID', '=', $actID)->delete();
    
        return redirect()->action([CMSActivitiesController::class,'index'])->with('success','Dữ liệu xóa thành công.');
    }
    public function update(Request $request, $actID)
    {
        $act = activities::find($actID);
        $act->actName = $request->actName; 
        $act->actImg = $request->actImg;
        $act->save();
        return redirect()->action([CMSActivitiesController::class,'index']);
    }
}
