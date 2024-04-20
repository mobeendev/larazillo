<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(Listing::class, 'listing');
    }

    public function index(Request $request)
    {
        $filters = [
            'deleted' => $request->boolean('deleted'),
            ...$request->only(['by', 'order'])
        ];

        return inertia(
            'Dashboard/Index',
            [
                'filters' => $filters,
                'listings' => Auth::user()
                    ->listings()
                    ->filter($filters)
                    ->paginate(5)
                    ->withQueryString()
            ]        
        );
    }

    public function destroy(Listing $listing)
    {
        $listing->deleteOrFail();

        return redirect()->back()
            ->with('success', 'Listing was deleted!');
    }
}