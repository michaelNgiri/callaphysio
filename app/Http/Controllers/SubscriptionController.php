<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subscription;

class SubscriptionController extends Controller
{
    //
    public function index(){
        $subscription = Subscription::all();
        $me = auth()->user()->id;
        dd($me);
        $mySubscription = Subscription::find($me);
        
        return view('cap.subscription.index', compact('subscriptions'));
    }
}
