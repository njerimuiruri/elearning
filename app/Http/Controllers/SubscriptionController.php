<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Subscription;

class SubscriptionController extends Controller
{
    public function showPackages()
    {
        $packages = [
            ['name' => 'Free Package', 'description' => 'Access to base topics 1 and 2'],
            ['name' => 'Standard Package', 'description' => 'Access to topics 1 to 10 for $20/month'],
            ['name' => 'Premium Package', 'description' => 'Access to everything for $23/month'],
        ];

        return view('subscriptions.packages', compact('packages'));
    }

    public function subscribe(Request $request, $package)
    {
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Please log in to subscribe.');
        }

        $selectedPackage = $package;
        $packagePrice = $this->getPackagePrice($package);

        return view('subscriptions.subscribe', compact('selectedPackage', 'packagePrice'));
    }

    public function subscribePost(Request $request)
    {
        // Validate the form data
        $request->validate([
            'package' => 'required|in:Standard Package,Premium Package',
            // Add more validation rules as needed
        ]);

        // Perform additional subscription logic
        $subscription = new Subscription([
            'user_id' => Auth::id(),
            'package' => $request->input('package'),
        ]);

        $subscription->save();

        return redirect()->route('dashboard')->with('success', 'You have successfully subscribed!');
    }

    private function getPackagePrice($package)
    {
        return match ($package) {
            'Standard Package' => 20,
            'Premium Package' => 23,
            default => 0,
        };
    }
}
