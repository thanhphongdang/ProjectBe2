<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agency;

class MinMapController extends Controller
{
    //
     public function index()
    {
        return view('page.Minimap');
    }

    public function search(Request $request)
    {
        $query = Agency::query();

    // Không cần where('region_id', ...) nữa
    if ($request->district) {
        $query->where('district', $request->district);
    }

    if ($request->agency_type) {
        $query->where('type', $request->agency_type);
    }

    $agencies = $query->get();

    return view('page.Minimap', compact('agencies'));
    }
}
