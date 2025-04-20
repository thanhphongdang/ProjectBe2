@extends('layouts.app')

@section('content')
<div class="main-content">
    <div class="header"> Edit Manage Vouchers</div>
    <form action="{{ route('sale.postUpdateSale') }}" method="POST">
        @csrf
        <input name="id" type="hidden" value="{{$sales->id}}">
        <div class="form-group">
            <label>Name voucher :</label>
            <input
            class="form-control" 
            type="text"
            name="name"
            value="{{$sales->name}}"
            placeholder="Enter name voucher">
        </div>

        <div class="form-group">
            <label>Code voucher :</label>
            <input
            class="form-control" 
            type="text"
            name="code"
            value="{{$sales->code}}"
            placeholder="Enter code voucher">
        </div>

        <div class="form-group">
            <label>How much % :</label>
            <input
            class="form-control" 
            type="text"
            name="money"
            value="{{$sales->money}}"
            placeholder="Enter % voucher">
        </div>

        <div class="form-group">
            <label>Discount description :</label>
            <input
            class="form-control" 
            type="text"
            name="description"
            value="{{$sales->description}}"
            placeholder="Enter the description">
        </div>
            <button class="btn btn-primary"
                    type="submit">
                Edit Vouchers
            </button>
    </form>
</div>
@endsection