<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class PhysiotherapistsController extends Controller
{
    public function mapView(Request $request){
        $physio = User::where('slug', $request->slug)->first();

        return view('physiotherapists.map-view', compact('physio'));
    }

    public function profileView(Request $request){
        $user = User::where('slug', $request->slug)->first();

        return view('physiotherapists.profile-view', compact('user'));
    }
}
