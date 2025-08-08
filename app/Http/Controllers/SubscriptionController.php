<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    public function choose(Request $request)
    {
        $request->validate([
            'services' => 'required|array|min:1',
            'services.*' => 'string',
        ]);

        $selectedServices = $request->input('services'); // array of selected services

        // For now, just dd() to check
        // You can later save to DB, process payment, etc.
        dd($selectedServices);

        // Redirect or return view after processing
        // return redirect()->route('subscriptions.checkout')->with('services', $selectedServices);
    }
}
