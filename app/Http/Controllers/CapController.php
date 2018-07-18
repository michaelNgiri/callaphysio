<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\State;
use App\User;
use Illuminate\Http\Request;

class CapController extends Controller
{
   public function index(){
       $physios = User::where('user_type', 2)->paginate(6);
       $states = State::all();
       $cities = City::all();
       return view('home', compact('physios', 'cities', 'states'));
   }
}
