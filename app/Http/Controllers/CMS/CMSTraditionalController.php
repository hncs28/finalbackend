<?php

namespace App\Http\Controllers\CMS;
use App\Models\traditional;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CMSTraditionalController extends Controller
{
    public function index() 
    {
        $traditional = DB::table('traditional')->select('*');
        $traditional = $traditional->get();

        return view('CMS/traditional_room/traditional_room',compact('traditional'));
    }
    public function edit($tradiID)
    {
        $traditional = traditional::findOrFail($tradiID);
        return view('/CMS/traditional_room/traditional_update', compact('traditional'));
    }

    public function create() {
            return view('/CMS/traditional_room/traditional_create');
    }
    public function store(Request $request)
    {
        
        $traditional = new traditional;
        $traditional->tradiName = $request->tradiName; 
        $traditional->tradiGen = $request->tradiGen;
        $traditional->tradiDetail = $request->tradiDetail;
        $traditional->tradiImg = $request->tradiImg;

        $traditional->save();
        return redirect()->action([CMSTraditionalController::class,'index']);
    }

    public function show($tradiID)
    {
        $traditional = traditional::where('tradiID', '=', $tradiID)->select('*')->first();
        
        return view('/CMS/traditional_room/traditional_detail', compact('traditional'));
    }
    public function destroy($tradiID)
    {
        $traditionals = traditional::where('tradiID', '=', $tradiID)->delete();
    
        return redirect()->action([CMSTraditionalController::class,'index'])->with('success','Dữ liệu xóa thành công.');
    }
    public function update(Request $request, $tradiID)
    {
        $traditional = traditional::find($tradiID);
        $traditional->tradiName = $request->tradiName; 
        $traditional->tradiGen = $request->tradiGen;
        $traditional->tradiDetail = $request->tradiDetail;
        $traditional->tradiImg = $request->tradiImg;
        $traditional->save();
        return redirect()->action([CMStraditionalController::class,'index']);
    }
}
