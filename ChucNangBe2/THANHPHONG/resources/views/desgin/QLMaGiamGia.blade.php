@extends('layouts.app')

@section('content')
    <div class="main-content">
        <div class="header">Manage Vouchers</div>
        <form action="{{ route('PostQLMaGiamGia') }}" method="POST">
            @csrf
            <div class="form-group">
                <label>Name voucher :</label>
                <input
                class="form-control" 
                type="text"
                name="name"
                placeholder="Enter name voucher">
            </div>
    
            <div class="form-group">
                <label>Code voucher :</label>
                <input
                class="form-control" 
                type="text"
                name="code"
                placeholder="Enter code voucher">
            </div>
    
            <div class="form-group">
                <label>How much % :</label>
                <input
                class="form-control" 
                type="text"
                name="money"
                placeholder="Enter % voucher">
            </div>
    
            <div class="form-group">
                <label>Discount description :</label>
                <input
                class="form-control" 
                type="text"
                name="description"
                placeholder="Enter the description">
            </div>
                <button class="btn btn-primary"
                        type="submit">
                    Add Vouchers
                </button>
        </form>
    </div>
@endsection