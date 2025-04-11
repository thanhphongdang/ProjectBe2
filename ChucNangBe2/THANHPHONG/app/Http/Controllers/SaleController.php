<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sale;
use Illuminate\Support\Facades\Auth;


class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sales = Sale::all();
        return view('desgin.QLMaGiamGia', compact('sales'));
    }
    //Hiển thị danh sách
    public function sale_list() {
        $sales = Sale::all();
                 return view('desgin.add', ["sales"=> $sales]);
    }

    public function create()
    {
        return view('desgin.QLMaGiamGia');
    }

    /**
     * Store a newly created resource in storage.
     * 
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function postAdd(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'code' => 'required',
            'money' => 'required',
            'description' => 'required',
        ]);

        $sale = $request->all();
        $check = Sale::create([
            'name' => $sale['name'],
            'code' => $sale['code'],
            'money' => $sale['money'],
            'description' => $sale['description'],
        ]);
        return redirect('add');
    }

    public function view() {
        return view('add');
    }

    /**
     * Delete sale by id
     */
    public function deleteSale(Request $request) {
        $id = $request->get('id');
        $sale = Sale::destroy($id);

        return redirect("add")->withSuccess('You have signed-in');
    }

    /**
     * Form update sale page
     */
    public function updateSale(Request $request)
    {
        $id = $request->get('id');
        $sale = Sale::find($id);

        return view('desgin.edit', ['sales' => $sale]);
    }

    /**
     * Submit form update sale
     */
    public function postUpdateSale(Request $request)
    {
        $input = $request->all();

        $request->validate([
            'name' => 'required',
            'code' => 'required',
            'money' => 'required',
            'description' => 'required',
        ]);

       $sale = Sale::find($input['id']);
       $sale->name = $input['name'];
       $sale->code = $input['code'];
       $sale->money = $input['money'];
       $sale->description = $input['description'];
       $sale->save();

        return redirect("add")->withSuccess('You have signed-in');
    }

    public function viewEdit() {
        return view('desgin.edit');
    }
}
