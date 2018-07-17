<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $closestPhysios = User::where('user_type', 2)->where('map_coordinates', Auth::user()->map_coordinates +- 300);
        is_null(Auth::user()->city)? $allPhysios = User::where('user_type', 2)->where('state', Auth::user()->state): $allPhysios = User::where('user_type', 2)->where('state', Auth::user()->city);
        $physios = User::where('user_type', 2)->paginate();
        $cities = City::all();
        return view('home', compact( 'physios','cities'));
    }
}
