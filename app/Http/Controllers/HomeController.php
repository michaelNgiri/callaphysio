<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\User;
use Illuminate\Http\Request;

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
        $physios = User::where('user_type', 2)->paginate(6);
        $cities = City::all();
        return view('home', compact('physios', 'cities'));
    }
}
