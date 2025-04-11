@extends('layouts.app')

@section('content')
    <div class="main-content">
        <div class="header">Manage Vouchers</div>
        <h2>Danh sách mã giảm giá:</h2>
            <ul class="list-group">
                @foreach ($sales as $sale)
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold">{{ $sale->name }}</div>
                        <small class="text-muted">{{ $sale->description }}</small>
                    </div>
                    <div class="text-end">
                        <span class="badge bg-success rounded-pill d-block mb-1">{{ $sale->money }}</span>
                        <span class="badge bg-info text-dark rounded-pill d-block">{{ $sale->code }}</span>
                    </div>
                </li>
                <a class="btn btn-success" href="{{ route('update',["id"=>$sale->id]) }}"> Edit Vouchers</a>
                <a class="btn btn-danger" href="{{ route('sale.deleteSale',["id"=>$sale->id]) }}"> Delete Vouchers</a>
                @endforeach
            </ul>
    </div>
@endsection