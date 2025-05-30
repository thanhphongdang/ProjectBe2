<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sale;
class SaleController extends Controller
{
    public function postAdd(Request $request)
    {
        $request->validate([
            'Name_Sale' => 'required',
            'Code_Voucher' => 'required',
            'Moneny' => 'required',
            'description' => 'required',
        ]);

        $sale = $request->all();
        $check = Sale::create([
            'Name_Sale' => $sale['Name_Sale'],
            'Code_Voucher' => $sale['Code_Voucher'],
            'Moneny' => $sale['Moneny'],
            'description' => $sale['description'],
        ]);
        return redirect('voucher');
    }
    public function sale_list()
    {
        $sales = Sale::all();
        return view('page.voucher', ["sales" => $sales]);
    }
    public function index()
    {
        $sales = Sale::all();
        return view('page.add-vouncher', compact('sales'));
    }
    public function deleteSale(Request $request, $id)
    {
        // $id = $request->get('id');

        $sale = Sale::find($id);

        if (!$sale) {
            return redirect('voucher')->with('error', 'Không tìm thấy Voucher để xóa.');
        }

        $sale->delete();

        return redirect('voucher')->with('success', 'Bạn đã xóa Voucher thành công.');
    }

    /**
     * Form update sale page
     */
    public function updateSale(Request $request)
    {
        $id = $request->get('id');
        $sale = Sale::find($id);

        return view('page.edit-sale', ['sales' => $sale]);
    }
    public function postUpdateSale(Request $request)
    {
        $input = $request->all();

        $request->validate([
            'Name_Sale' => 'required',
            'Code_Voucher' => 'required',
            'Moneny' => 'required',
            'description' => 'required',
        ]);

        $sale = Sale::find($input['id']);
        $sale->Name_Sale = $input['Name_Sale'];
        $sale->Code_Voucher = $input['Code_Voucher'];
        $sale->Moneny = $input['Moneny'];
        $sale->description = $input['description'];
        $sale->save();

        return redirect("voucher")->with('success', 'Add suddessfully !');
    }
}
