<?php

namespace App\Http\Controllers\View;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function showCustomImage($filename)
    {
        $path = public_path('storage2/' . $filename);

        if (!file_exists($path)) {
            abort(404); 
        }

        return response()->file($path);
    }
}
