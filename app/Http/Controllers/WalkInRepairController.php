<?php

namespace App\Http\Controllers;

use App\StoresTable;
use Illuminate\Http\Request;

class WalkInRepairController extends Controller
{
    public function viewWalkInRepairPage()
    {
        $storesData = StoresTable::all();
        return view('template/frontEnd/pages/walk-in-repair')->with(['storesData' => $storesData]);
    }
}
