<?php

namespace App\Http\Controllers;

use App\StoresTable;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function viewDashboard()
    {
        $storesData = StoresTable::all()->first();
        return view('welcome')->with(['storesData' => $storesData]);
    }
}
