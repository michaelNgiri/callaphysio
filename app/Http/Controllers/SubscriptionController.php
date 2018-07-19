<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subscription;

class SubscriptionController extends Controller
{
    //function not ready for use yet
    public function index(Request $request){
        $subscription = Subscription::all();
        $me = auth()->user()->id;
        $mySubscription = Subscription::find($me);
        
        return view('cap.subscription.index', compact('subscription', 'mySubscription'));
    }
}
