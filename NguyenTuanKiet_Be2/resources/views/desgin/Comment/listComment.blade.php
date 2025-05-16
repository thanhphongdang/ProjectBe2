@extends('app_navar')

@section('content')
<div class="container">
    <h3>Bình luận sản phẩm</h3>

    {{-- Form gửi bình luận mới --}}
    <form method="POST" action="{{ route('comments.create') }}">
        @csrf

        <input type="hidden" name="parent_id" value="">
        <textarea name="content" rows="3" class="form-control" placeholder="Viết bình luận..."></textarea>
        <button class="btn btn-primary mt-2" type="submit">Gửi</button>
    </form>

    <hr>

    <h3>Danh sách bình luận</h3>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Sản phẩm</th>
            <th>Người dùng</th>
            <th>Nội dung</th>
            <th>Thao tác</th>
        </tr>
    </thead>
    <tbody>
        @foreach($comments as $comment)
            <tr>
                <td>{{ $comment->id }}</td>
                <td>{{ $comment->product_id }}</td>
                <td>{{ $comment->user_id }}</td>
                <td>{{ $comment->content }}</td>
                <td>
                    <form action="{{ route('comments.destroy', $comment->id) }}" method="POST" onsubmit="return confirm('Xóa bình luận này?');">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm">Xóa</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection