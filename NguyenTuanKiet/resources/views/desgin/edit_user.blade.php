@extends('app_navar')

@section('title', 'Thêm người dùng')

@section('content')
<div class="main-content">
    <h2>Thêm người dùng mới</h2>
    <form method="POST" action="{{ route('user.postUpdateUser') }}">
        @csrf
        <input name="id" type="hidden" value="{{$users->id}}">
        <div class="form-group">
            <label>Họ tên</label>
            <input type="text" name="name" class="form-control" value="{{$users->name}}"
            required>
        </div>

        <div class="form-group">
            <label>Địa chỉ</label>
            <input type="text" name="address" class="form-control"value="{{$users->address}}"required>
        </div>

        <div class="form-group">
            <label>Số điện thoại</label>
            <input type="text" name="phone" class="form-control" value="{{$users->phone}}"required>
        </div>

        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" class="form-control" value="{{$users->email}}"required>
        </div>

        <div class="form-group">
            <label>Mật khẩu</label>
            <input type="password" name="password" class="form-control" value="{{$users->password}}"required>
        </div>

        <button type="submit" class="mt-5 btn btn-primary">Update Users</button>
    </form>
</div>
@endsection
