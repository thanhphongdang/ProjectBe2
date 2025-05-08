<?php

namespace App\Http\Controllers;

use App\Models\Agency;
use Illuminate\Http\Request;

class MapController extends Controller
{
    public function index()
    {
        return view('desgin.mapIntegration');
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

    return view('desgin.mapIntegration', compact('agencies'));
    }
}

