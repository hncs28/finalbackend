<?php

namespace App\Http\Controllers\CMS;
use App\Models\prizes;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CMSPrizeController extends Controller
{
    public function index() 
    {
        $prize = DB::table('prizes')->select('*');
        $prize = $prize->get();

        return view('CMS/prizes/prizes',compact('prize'));
    }
    public function edit($prizeID)
    {
        $prize = prizes::findOrFail($prizeID);
        return view('/CMS/prizes/prizes_update', compact('prize'));
    }

    public function create() {
            return view('/CMS/prizes/prizes_create');
    }
    public function store(Request $request)
    {
        
        $prize = new prizes;
        $prize->prizeName = $request->prizeName; 
        $prize->prizeTime = $request->prizeTime;
        $prize->prizeLocation = $request->prizeLocation;
        $prize->save();
        return redirect()->action([CMSPrizeController::class,'index']);
    }

    public function show($prizeID)
    {
        $prize = prizes::where('prizeID', '=',$prizeID)->select('*')->first();
        
        return view('/CMS/prizes/prizes_detail', compact('prize'));
    }
    public function destroy($prizeID)
    {
        $prize = prizes::where('prizeID', '=', $prizeID)->delete();
    
        return redirect()->action([CMSPrizeController::class,'index'])->with('success','Dữ liệu xóa thành công.');
    }
    public function update(Request $request, $prizeID)
    {
        $prize = prizes::find($prizeID);
        $prize->prizeName = $request->prizeName; 
        $prize->prizeTime = $request->prizeTime;
        $prize->prizeLocation = $request->prizeLocation;
        $prize->save();
        return redirect()->action([CMSPrizeController::class,'index']);
    }
}
