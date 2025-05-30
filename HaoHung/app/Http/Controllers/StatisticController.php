<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StatisticController extends Controller
{
    //
    public function showChart()
    {

        // 1. Đổi 'oders' thành 'orders'
        $results = DB::table('oderes as o')
            ->join('products as p', 'o.ID_Product', '=', 'p.Id_Products')
            ->select(
                'p.Name_Car', 
                DB::raw('COUNT(*) as total_sold')
                
                )
            ->groupBy('p.Name_Car')
            ->orderByDesc('total_sold')
            ->get();

        // 2. Tách dữ liệu
        $labels = $results->pluck('Name_Car');
        $data   = $results->pluck('total_sold');

        // 3. Trả về view
        return view('page.statistic', compact('labels', 'data'));
    }
}
