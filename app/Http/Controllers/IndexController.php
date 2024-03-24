<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Listing;

class IndexController extends Controller
{
    
    public function index()
    {

        dd(Listing::all());


        // return inertia(
        //     'Index/Index',
        //     [
        //         'message' => 'Hello from Laravel!'
        //     ]
        // );
    }

    public function show()
    {
        return inertia('Index/Show');
    }
}
