<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <title>Nhắn tin với shop</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      display: flex;
      height: 100vh;
    }

    .sidebar {
      width: 230px;
      background-color: #e0e0e0;
      padding: 20px;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .sidebar img {
      width: 80px;
      height: 80px;
      border-radius: 50%;
      background: #ccc;
    }

    .sidebar .name {
      margin: 10px 0;
      font-weight: bold;
    }

    .sidebar a {
      text-decoration: none;
      color: black;
      padding: 10px;
      display: block;
      width: 100%;
      border-radius: 5px;
      margin-top: 5px;
    }

    .sidebar a.active {
      background-color: #c48d8d;
      color: white;
    }

    .chat-container {
      flex: 1;
      display: flex;
      flex-direction: column;
      background-color: #f9f9f9;
    }

    .chat-header {
      padding: 15px;
      border-bottom: 1px solid #ccc;
      font-style: italic;
      font-size: 20px;
      display: flex;
      align-items: center;
    }

    .chat-header span {
      margin-left: auto;
      font-weight: bold;
    }

    .chat-box {
      flex: 1;
      padding: 20px;
      overflow-y: auto;
      display: flex;
      flex-direction: column;
    }

    .message {
      max-width: 60%;
      padding: 10px;
      margin: 8px 0;
      border-radius: 15px;
      font-size: 14px;
      word-break: break-word;
    }

    .from-shop {
      align-self: flex-start;
      background-color: #2196f3;
      color: white;
    }

    .from-customer {
      align-self: flex-end;
      background-color: #eeeeee;
    }

    .chat-input {
      border-top: 1px solid #ccc;
      padding: 10px 15px;
      display: flex;
      align-items: center;
    }

    .chat-input input {
      flex: 1;
      padding: 8px 10px;
      border-radius: 20px;
      border: 1px solid #ccc;
      outline: none;
    }

    .chat-input button {
      margin-left: 10px;
      background-color: #2196f3;
      color: white;
      border: none;
      padding: 8px 16px;
      border-radius: 20px;
      cursor: pointer;
    }

  </style>
</head>
<body>
  <!-- Sidebar -->
  <div class="sidebar">
    <img src="" alt="avatar">
    {{-- <div class="name">{{ Auth::user()->name }}</div> --}}
    <a href="#">Thông tin cá nhân</a>
    <a href="#">Đơn mua</a>
    <a href="#" class="active">Nhắn tin với shop</a>
    <a href="#">Mục yêu thích</a>
    <a href="#">Đăng xuất</a>
  </div>

  <!-- Main Chat Area -->
  <div class="chat-container">
    <div class="chat-header">
      ← Trở Về
      <span>Nhắn tin với shop</span>
    </div>

    <div class="chat-box">
      @foreach ($messages as $msg)
        <div class="message {{ $msg->sender_id === auth()->id() ? 'from-customer' : 'from-shop' }}">
          {{ $msg->message }}
        </div>
      @endforeach
    </div>

    <form action="{{ route('chat.customer.send') }}" method="POST" class="chat-input">
      @csrf
      <input type="text" name="message" placeholder="Hãy gửi tôi tin nhắn bạn tại đây..." required>
      <button type="submit">Gửi</button>
    </form>
  </div>
</body>
</html>