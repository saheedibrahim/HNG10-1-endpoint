<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Information;

class InformationController extends Controller
{
    public function show(Request $request) {
        $data = Information::all();
        $getData = $request->fullUrlWithQuery(["slack_name" => $request->slack_name, "track" => $request->track]);
        $setData = $request->fullUrlWithQuery(["slack_name" => "saolabram", "track" => "backend"]);
        if($setData == $getData) {
            return response()->json([$data], 200);
        } else {
            return response()->json(["message" => "data not found"], 404);
        }
    
    }
}