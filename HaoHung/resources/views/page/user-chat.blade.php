<!DOCTYPE html>
<html lang="vi">

<head>
  <meta charset="UTF-8">
  <title>Nhắn tin với shop</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: sans-serif;
    }

    body {
      background-color: #f8f8f8;
      color: #333;
    }

    .dropdown {
      position: relative;
      display: inline-block;
    }

    .dropdown-menu {
      display: none;
      position: absolute;
      right: 0;
      background-color: #222;
      min-width: 200px;
      border-radius: 8px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      z-index: 1000;
      overflow: hidden;
    }

    .dropdown-menu li {
      padding: 10px 15px;
      color: white;
    }

    .dropdown-menu li a,
    .dropdown-menu li button {
      color: white;
      text-decoration: none;
      display: block;
      width: 100%;
      background: none;
      border: none;
      text-align: left;
      cursor: pointer;
    }

    .dropdown-menu li:hover {
      background-color: #333;
    }

    .user-menu:hover .dropdown-menu {
      display: block;
    }

    .dropdown-toggle {
      background: none;
      border: none;
      cursor: pointer;
    }

    /* Navbar */
    .navbar {
      background-color: #000;
      padding: 10px 20px;
    }

    .nav-list {
      list-style: none;
      display: flex;
      align-items: center;
      justify-content: space-between;
      flex-wrap: wrap;
    }

    .nav-list li {
      margin: 5px 10px;
    }

    .nav-list a {
      color: white;
      text-decoration: none;
      font-weight: bold;
    }

    .nav-list input[type="text"] {
      padding: 5px;
      border-radius: 4px;
      border: none;
    }

    .nav-list button {
      padding: 5px 10px;
      margin-left: 5px;
      border: none;
      background-color: black;
      border-radius: 4px;
      cursor: pointer;
    }

    /* Products section */
    .products {
      padding: 40px 20px;
      text-align: center;
    }

    /* Chat */
    .chat-container {
      max-width: 900px;
      margin: 0 auto;
      background-color: #f9f9f9;
      border: 1px solid #ccc;
      border-radius: 10px;
      display: flex;
      flex-direction: column;
      overflow: hidden;
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
      height: 400px;
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

    /* Footer */
    .footer {
      background: linear-gradient(to right, #131313, #131313);
      padding: 40px 20px;
      width: 100%;
      color: white;
    }
  </style>
</head>

<body>
  @include('outside.navbar-index')

  <section class="products container mt-5">
    <h2>Nhắn tin với shop</h2>

    <div class="chat-container mt-4">
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
  </section>

  @include('outside.footer-user')
</body>

</html>