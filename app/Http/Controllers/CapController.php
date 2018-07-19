<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\State;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CapController extends Controller
{
    public function index(){
        if (Auth::check()){
            if (is_null(Auth::user()->state)){
            $physios = User::where('user_type', 2)->paginate(6);
            $currentState = null;
            }else{
            $physios = User::where('user_type', 2)->where('state', Auth::user()->state)->paginate(6);
            $currentState = State::find(Auth::user()->state);
            }
        }else{
            $physios = User::where('user_type', 2)->paginate(6);
            $currentState = null;
        }
        $states = State::all();
        $cities = City::all();
        return view('home', compact('physios', 'cities', 'states', 'currentState'));
    }

    public function applyFilter(Request $request){
        if (is_null($request->state)){
            $physios = User::where('user_type', 2)->paginate(6);
        }else {
            $physios = User::where('user_type', 2)->where('state', $request->state)->paginate(6);
        }
        $states = State::all();
        !is_null($request->state)? $currentState = State::find($request->state): $currentState = null;
        !is_null($request->state)?  $cities = City::where('state', $request->state)->get(): $cities = City::all();
        return view('home', compact('physios', 'cities', 'states', 'currentState'));

    }

    public function consult(Request $request){
        $physio = User::where('slug',$request->slug)->first();
        return view('consultations.consult', compact('physio'));
    }
}
