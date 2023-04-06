<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Province;
class LocationController extends Controller
{
    public function provinces(Request $request){
        return Province::all();
    }
    public function regencies(Request $request, $provices_id){
        return Province::where('province_id', $provices_id->get());
    }
    //
}
