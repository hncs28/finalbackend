<?php

namespace App\Http\Controllers\CMS;
use App\Models\annual;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CMSAnnualController extends Controller
{
    public function index() 
    {
        $annual = DB::table('annual')->select('*');
        $annual = $annual->get();

        return view('CMS/annual/annual',compact('annual'));
    }
    public function edit($annualID)
    {
        $annual = annual::findOrFail($annualID);
        return view('/CMS/annual/annual_update', compact('annual'));
    }

    public function create() {
            return view('/CMS/annual/annual_create');
    }
    public function store(Request $request)
    {
        
        $annual = new annual;
        $annual->annualName = $request->annualName; 
        $annual->annualTime = $request->annualTime;
        $annual->annualImg = $request->annualImg;
        $annual->save();
        return redirect()->action([CMSAnnualController::class,'index']);
    }

    public function show($annualID)
    {
        $annual = annual::where('annualID', '=',$annualID)->select('*')->first();
        
        return view('/CMS/annual/annual_detail', compact('annual'));
    }
    public function destroy($annualID)
    {
        $annual = annual::where('annualID', '=', $annualID)->delete();
    
        return redirect()->action([CMSAnnualController::class,'index'])->with('success','Dữ liệu xóa thành công.');
    }
    public function update(Request $request, $annualID)
    {
        $annual = annual::find($annualID);
        $annual->annualName = $request->annualName; 
        $annual->annualTime = $request->annualTime;
        $annual->annualImg = $request->annualImg;
        $annual->save();
        return redirect()->action([CMSAnnualController::class,'index']);
    }
}
