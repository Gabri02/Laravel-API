<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sample;

class SampleController extends Controller
{
    public function index(){
        $samples = Sample::All();
        return response()->json($samples);
    }
}
