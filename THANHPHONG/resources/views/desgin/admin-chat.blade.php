<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <title>Admin - Chat với khách hàng</title>
  <style>
    * {
      box-sizing: border-box;
    }

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
      background-color: #f0f2f5;
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

    .message-wrapper {
      display: flex;
      margin-bottom: 10px;
    }

    .from-admin {
      justify-content: flex-end;
    }

    .from-admin .message {
      background-color: #2196f3;
      color: white;
      border-radius: 20px;
      border-bottom-right-radius: 4px;
    }

    .from-customer {
      justify-content: flex-start;
    }

    .from-customer .message {
      background-color: #e0e0e0;
      color: black;
      border-radius: 20px;
      border-bottom-left-radius: 4px;
    }

    .message {
      max-width: 60%;
      padding: 10px 15px;
      font-size: 14px;
      word-break: break-word;
      position: relative;
    }

    .chat-input {
      border-top: 1px solid #ccc;
      padding: 10px 15px;
      display: flex;
      align-items: center;
      background-color: #fff;
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
  <div class="sidebar">
    <img src="#" alt="avatar">
    <div class="name">Admin</div>
    <a href="#" class="active">Tin nhắn</a>
    <a href="#">Đơn hàng</a>
    <a href="#">Quản lý sản phẩm</a>
    <a href="#">Đăng xuất</a>
  </div>

  <div class="chat-container">
    <div class="chat-header">
      ← Trở về
      <span>Chat với Khách hàng</span>
    </div>

    <div class="chat-box" id="chat-box">
      @foreach ($messages as $msg)
        <div class="message-wrapper {{ $msg->sender_id === auth()->id() ? 'from-admin' : 'from-customer' }}">
          <div class="message">
            {{ $msg->message }}
          </div>
        </div>
      @endforeach
    </div>

    @if ($firstCustomerId)
      <form action="{{ route('chat.admin.send') }}" method="POST" class="chat-input">
        @csrf
        <input type="hidden" name="receiver_id" value="{{ $firstCustomerId }}">
        <input type="text" name="message" placeholder="Nhập tin nhắn..." required>
        <button type="submit">Gửi</button>
      </form>
    @else
      <div class="chat-input">
        <em>Chưa có khách hàng nào nhắn tin...</em>
      </div>
    @endif
  </div>

  <script>
    window.onload = function () {
      const chatBox = document.getElementById("chat-box");
      chatBox.scrollTop = chatBox.scrollHeight;
    };
  </script>
</body>
</html>