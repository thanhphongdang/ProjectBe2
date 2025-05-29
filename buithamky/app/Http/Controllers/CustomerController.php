<?php

namespace App\Http\Controllers;
// use App\Http\Controllers\Customer;
use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    
    public function profilekhachhang()
    {
        //
            return view('Function.profilekhachhang');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function displayCustomer($id)
    {
        //
        $customer = Customer::find($id);

        $data = [
            "customer" => $customer 
        ];
        return view('Function.profilekhachhang', $data);
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
