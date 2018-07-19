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
            $currentState = null;
            }else{
            $currentState = State::find(Auth::user()->state);
            }
        }else{
            $currentState = null;
        }
        $physios = User::where('user_type', 2)->paginate(6);
        $states = State::all();
        $cities = City::all();
        return view('home', compact('physios', 'cities', 'states', 'currentState'));
    }

    public function applyFilter(Request $request){
        $physios = User::where('user_type', 2)->where('state', $request->state)->paginate(6);
        $states = State::all();
        $currentState = State::find($request->state);
        $cities = City::where('state', $request->state)->get();
        return view('home', compact('physios', 'cities', 'states', 'currentState'));

    }

    public function consult(Request $request){
        $physio = User::where('slug',$request->slug)->first();
        return view('consultations.consult', compact('physio'));
    }
}
