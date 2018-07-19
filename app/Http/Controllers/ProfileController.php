<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function viewProfile(Request $request){
        $user =User::where('slug', $request->slug)->first();

        return view('cap.profile-view', compact('user'));
    }
}
