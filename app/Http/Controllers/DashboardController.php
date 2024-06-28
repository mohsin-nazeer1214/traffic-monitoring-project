<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Visit;
use App\Models\Stage;

class DashboardController extends Controller
{
    public function index()
    {
        $totalVisitors = User::count();
        $stages = Stage::select('stage', \DB::raw('count(*) as total'))
                        ->groupBy('stage')
                        ->get();

        return view('dashboard', compact('totalVisitors', 'stages'));
    }

}
