<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Calibration;

class CalibrationController extends Controller
{
    public function insert(Request $request){
      $calibration = Calibration::find(1);
      $calibration->size = $request->size;
      $calibration->save();
    }

    public function mirror(Request $request){
      $calibration = Calibration::find(1);
      $calibration->mirror = $request->mirror;
      $calibration->save();
    }

    public function mirrorGet(Request $request){
      $calibration = Calibration::find(1);
      return response()->json([
                    "mirror" => $calibration->mirror
                ]);
    }

}
